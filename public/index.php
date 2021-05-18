<?php

use ludk\Persistence\ORM;
use Entity\Drama;
use Entity\User;

require __DIR__ . '/../vendor/autoload.php';

session_start();

$orm = new ORM(__DIR__ . '/../Resources'); //permet de récupérer les éléments de la bdd

$manager = $orm->getManager();

$dramaRepo = $orm->getRepository(Drama::class);
$userRepo = $orm->getRepository(User::class);

$action = $_GET["action"] ?? "display";
switch ($action) {
  case 'register':

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
        header('Location: ?action=display');
      }
    } else {
      include "../templates/registerForm.php";
    }
    break;
  case 'logout':
    if (isset($_SESSION['user'])) {
      unset($_SESSION['user']);
    }
    header('Location: ?action=display');
    break;
  case 'login':
    if (isset($_POST['pseudo']) && isset($_POST['password'])) {
      $criteriaWithLoginAndPassword = [
        "pseudo" => $_POST['pseudo'],
        "password" => $_POST['password'],
      ];
      $userWithPseudoAndPassword = $userRepo->findBy($criteriaWithLoginAndPassword);
      if (count($userWithPseudoAndPassword) == 1) {
        $_SESSION['user'] = $userWithPseudoAndPassword[0];
        header('Location: ?action=display');
      } else {
        $errorMsg = "Wrong login and/or password.";
        include "../templates/loginForm.php";
      }
    } else {
      include "../templates/loginForm.php";
    }
    break;
  case 'new':
    break;
  case 'display':
    $items = array();

    if (isset($_GET['search'])) {
      $items = $dramaRepo->findBy(array("shortDescription" => '%' . $_GET['search'] . '%'));
    } else {
      $items = $dramaRepo->findAll();
    }
    include '../templates/display.php';
  default:
    break;
}
