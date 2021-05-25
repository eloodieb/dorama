<?php

use ludk\Persistence\ORM;
use Entity\Drama;
use Entity\User;
use Entity\Genre;

require __DIR__ . '/../vendor/autoload.php';

session_start();

$orm = new ORM(__DIR__ . '/../Resources'); //permet de récupérer les éléments de la bdd

$manager = $orm->getManager();

$dramaRepo = $orm->getRepository(Drama::class);
$userRepo = $orm->getRepository(User::class);
$genreRepo = $orm->getRepository(Genre::class);

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
  case 'newDrama':
    $genres = $genreRepo->findAll();
    if (
      isset($_SESSION['user'])
      && isset($_POST['title'])
      && isset($_POST['shortDescription'])
      && isset($_POST['longDescription'])
      && isset($_POST['url_img1'])
      && isset($_POST['url_img2'])
      && isset($_POST['url_trailer'])
      && isset($_POST['country'])
      && isset($_POST['yearRelease'])
      && isset($_POST['genreId'])
    ) {
      $errorMsg = NULL;
      $dramaWithThisTitle = $dramaRepo->findBy(['title' => $_POST['title']]);
      if ($dramaWithThisTitle == $_POST['title']) {
        $errorMsg = "Drama already exists.";
      }
      if ($errorMsg) {
        include "../templates/newDrama.php";
      } else {
        $genre = $genreRepo->find($_POST['genreId']);
        $newDrama = new Drama;
        $newDrama->title = trim($_POST['title']); //trim permet d'enlever les espaces inutiles au début et à la fin
        $newDrama->shortDescription = trim($_POST['shortDescription']);
        $newDrama->longDescription = trim($_POST['longDescription']);
        $newDrama->url_img1 = trim($_POST['url_img1']);
        $newDrama->url_img2 = trim($_POST['url_img2']);
        $newDrama->url_trailer = trim($_POST['url_trailer']);
        $newDrama->country = $_POST['country'];
        $newDrama->yearRelease = $_POST['yearRelease'];
        $newDrama->create_at = date('d-m-Y');
        $newDrama->genreId = $genre;
        $newDrama->userId = $_SESSION['user'];
        $manager->persist($newDrama);
        $manager->flush();
        header('Location: ?action=display');
      }
    } else {
      include "../templates/newDrama.php";
    }
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
