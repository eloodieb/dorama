<?php

namespace Controller;

use Entity\User;

class AuthController
{
    public function login()
    {
        global $userRepo;
        global $errorMsg;
        if (isset($_POST['pseudo']) && isset($_POST['password'])) {
            $criteriaWithLoginAndPassword = [
                "pseudo" => $_POST['pseudo'],
                "password" => $_POST['password'],
            ];
            $userWithPseudoAndPassword = $userRepo->findBy($criteriaWithLoginAndPassword);
            if (count($userWithPseudoAndPassword) == 1) {
                $_SESSION['user'] = $userWithPseudoAndPassword[0];
                header('Location:/display');
            } else {
                $errorMsg = "Wrong login and/or password.";
                include "../templates/loginForm.php";
            }
        } else {
            include "../templates/loginForm.php";
        }
    }

    public function logout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }
        header('Location:/display');
    }

    public function register()
    {
        global $userRepo;
        global $manager;
        global $errorMsg;
        global $orm;

        if (isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['passwordRetype'])) {
            $usersWithThisPseudo = $userRepo->findBy(['pseudo' => $_POST['pseudo']]);
            if (count($usersWithThisPseudo) > 0) {
                $errorMsg = "Pseudo already used.";
            } else if ($_POST['password'] != $_POST['passwordRetype']) {
                $errorMsg = "Passwords are not the same.";
            } else if (strlen(trim($_POST['password'])) < 8) {
                $errorMsg = "Your password should have at least 8 characters.";
            } else if (strlen(trim($_POST['pseudo'])) < 4) {
                $errorMsg = "Your pseudo should have at least 4 characters.";
            }
            if ($errorMsg) {
                include "../templates/registerForm.php";
            } else {
                $newUser = new User;
                $newUser->pseudo = $_POST['pseudo'];
                $newUser->password = $_POST['password'];
                $manager = $orm->getManager();
                $manager->persist($newUser);
                $manager->flush();
                $_SESSION['user'] = $newUser;
                header('Location:/display');
            }
        } else {
            include "../templates/registerForm.php";
        }
    }
}
