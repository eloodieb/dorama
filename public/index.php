<?php

use Entity\User;
use Entity\Drama;
use Entity\Genre;
use ludk\Persistence\ORM;
use Controller\AuthController;
use Controller\HomeController;
use Controller\ContentController;

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
    $controller = new AuthController();
    $controller->register();
    break;
  case 'logout':
    $controller = new AuthController();
    $controller->logout();
    break;
  case 'login':
    $controller = new AuthController();
    $controller->login();
    break;
  case 'newDrama':
    $controller = new ContentController();
    $controller->create();
    break;
  case 'display':
  default:
    $controller = new HomeController();
    $controller->dislpay();
    break;
}
