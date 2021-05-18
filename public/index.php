<?php

use ludk\Persistence\ORM;
use Entity\Drama;

require __DIR__ . '/../vendor/autoload.php';

session_start();

$orm = new ORM(__DIR__ . '/../Resources'); //permet de récupérer les éléments de la bdd

$manager = $orm->getManager();

$dramaRepo = $orm->getRepository(Drama::class);

// $dramaRunOn->shortDescription = "Dans la ville fictive de Jungjin, un groupe de quatre chasseurs de démons appelés les Compteurs porte la tâche ardue de rechercher et de bannir les mauvais esprits qui s'échappent de l'au- delà pour gagner l'immortalité";
// $dramaRunOn->longDescription = "Dans la ville fictive de Jungjin, un groupe de quatre chasseurs de démons appelés les Compteurs porte la tâche ardue de rechercher et de bannir les mauvais esprits ( akgwi ) qui s'échappent de l'au- delà pour gagner l'immortalité. Ces esprits maléfiques possèdent des hôtes humains locaux qui ont commis un meurtre ou ont un fort désir d'assassiner, encouragent le désir de leur hôte de tuer et consomment l'esprit de la victime. Les compteurs étaient autrefois dans le coma lorsqu'un esprit partenaire de Yung, la frontière entre l'au-delà et le monde des vivants, possèdeet leur donner un corps et une conscience parfaitement sains avec une force surhumaine et des capacités surnaturelles. Trois des compteurs - Ga Mo-tak ( Yoo Jun-sang ), Do Ha-na ( Kim Se-jeong ) et Choo Mae-ok ( Yeom Hye-ran ) - sont employés à Eonni's Noodles, un restaurant de nouilles qui sert comme leur cachette.
// Un jour, le quatrième Counter Jang Cheol-joong ( Sung Ji-ru ) est tué dans une bataille contre un puissant esprit maléfique de «niveau 3» [c] . Alors que son esprit est consumé par son tueur, son partenaire Yung Wi-gen (Moon Sook) a du mal à trouver un nouvel humain comateux à posséder. Malheureusement, elle est rapidement attirée par le lycéen So Mun ( Jo Byung-gyu) qui, malgré son handicap, est néanmoins en parfaite santé et en vie. Dès que Wi-gen l'a possédé, le Mun inconscient commence à remarquer des changements bizarres dans son corps et commence à voir Wi-gen dans ses rêves. Bientôt, Mun trouve les réponses dans Eonni's Noodles, et alors qu'il devient le remplaçant du regretté Cheol-joong, il se retrouve dans un voyage passionnant de lutte contre des démons assoiffés de sang, de se reconnecter à son passé et de découvrir la triste vérité derrière un réaménagement majeur. projet à Jungjin.";
// $dramaRunOn->url_img1 = "https://www.nautiljon.com/images/more/02/69/215196.jpg";
// $dramaRunOn->country = "Corée";
// $dramaRunOn->genreId = $genreRomance;
// $dramaRunOn->userId = $userElodie;

// $items = array($dramaHanaKimi, $dramaHanaYoriDango, $dramaDemonCatcher, $dramaRunOn);

$action = $_GET["action"] ?? "display";
switch ($action) {
  case 'register':
    include "../models/UserManager.php";
    if (isset($_POST['pseudo']) && isset($_POST['password']) && isset($_POST['passwordRetype'])) {
      $errorMsg = NULL;
      if (!IsPseudoFree($_POST['pseudo'])) {
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
        $userId = CreateNewUser($_POST['pseudo'], $_POST['pseudo']);
        $_SESSION['userId'] = $userId;
        header('Location: ?action=display');
      }
    } else {
      include "../templates/registerForm.php";
    }
    break;
  case 'logout':
    if (isset($_SESSION['userId'])) {
      unset($_SESSION['userId']);
    }
    break;
  case 'login':
    include "../models/UserManager.php";
    if (isset($_POST['pseudo']) && isset($_POST['password'])) {
      $userId = GetUserIdFromUserAndPassword($_POST['pseudo'], $_POST['password']);
      if ($userId > 0) {
        $_SESSION['userId'] = $userId;
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
