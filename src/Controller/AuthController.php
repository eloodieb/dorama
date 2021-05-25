<?php

namespace Controller;

use Entity\User;
use ludk\Http\Request;
use ludk\Http\Response;
use ludk\Controller\AbstractController;

class AuthController extends AbstractController
{
    public function login(Request $request): Response
    {
        $userRepo = $this->getOrm()->getRepository(User::class);
        $errorMsg = Null;
        if ($request->request->has('pseudo') && $request->request->has('password')) {
            $criteriaWithLoginAndPassword = [
                "pseudo" => $request->request->get('pseudo'),
                "password" => $request->request->get('password'),
            ];
            $userWithPseudoAndPassword = $userRepo->findBy($criteriaWithLoginAndPassword);
            if (count($userWithPseudoAndPassword) == 1) {
                $request->getSession()->set('user', $userWithPseudoAndPassword[0]);
                return $this->redirectToRoute('display');
            } else {
                $data = array(
                    "errorMsg" => "Wrong login and/or password."
                );
                return $this->render('loginForm.php', $data);
            }
        } else {
            return $this->render('loginForm.php');
        }
    }

    public function logout(Request $request): Response
    {

        if ($request->getSession()->has('user')) {
            $request->getSession()->remove('user');
        }
        return $this->redirectToRoute('display');
    }

    public function register(Request $request): Response
    {
        $userRepo = $this->getOrm()->getRepository(User::class);
        $manager = $this->getOrm()->getManager();
        $erroMsg = Null;

        if ($request->request->has('pseudo') && $request->request->has('password') && $request->request->has('passwordRetype')) {
            $usersWithThisPseudo = $userRepo->findBy(['pseudo' => $request->request->get('pseudo')]);
            if (count($usersWithThisPseudo) > 0) {
                $errorMsg = "Pseudo already used.";
            } else if ($request->request->get('password') != $request->request->get('passwordRetype')) {
                $errorMsg = "Passwords are not the same.";
            } else if (strlen(trim($request->request->get('password'))) < 8) {
                $errorMsg = "Your password should have at least 8 characters.";
            } else if (strlen(trim($request->request->get('pseudo'))) < 4) {
                $errorMsg = "Your pseudo should have at least 4 characters.";
            }
            if ($errorMsg) {
                return $this->render('registerForm.php');
            } else {
                $newUser = new User;
                $newUser->pseudo = $request->request->get('pseudo');
                $newUser->password = $request->request->get('password');
                // $manager = $orm->getManager();
                $manager->persist($newUser);
                $manager->flush();
                $request->getSession()->set('user', $newUser);
                return $this->redirectToRoute('display');
            }
        } else {
            return $this->render('registerForm.php');
        }
    }
}
