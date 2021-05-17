<?php

use ludk\Persistence\ORM;
use Entity\Drama;

require __DIR__ . '/../vendor/autoload.php';

session_start();

$orm = new ORM(__DIR__ . '/../Resources');
$dramaRepo = $orm->getRepository(Drama::class);
$items = array();

if (isset($_GET['search'])) {
  $items = $dramaRepo->findBy(array("shortDescription" => '%' . $_GET['search'] . '%'));
} else {
  $items = $dramaRepo->findAll();
}

// $dramaRunOn->shortDescription = "Dans la ville fictive de Jungjin, un groupe de quatre chasseurs de démons appelés les Compteurs porte la tâche ardue de rechercher et de bannir les mauvais esprits qui s'échappent de l'au- delà pour gagner l'immortalité";
// $dramaRunOn->longDescription = "Dans la ville fictive de Jungjin, un groupe de quatre chasseurs de démons appelés les Compteurs porte la tâche ardue de rechercher et de bannir les mauvais esprits ( akgwi ) qui s'échappent de l'au- delà pour gagner l'immortalité. Ces esprits maléfiques possèdent des hôtes humains locaux qui ont commis un meurtre ou ont un fort désir d'assassiner, encouragent le désir de leur hôte de tuer et consomment l'esprit de la victime. Les compteurs étaient autrefois dans le coma lorsqu'un esprit partenaire de Yung, la frontière entre l'au-delà et le monde des vivants, possèdeet leur donner un corps et une conscience parfaitement sains avec une force surhumaine et des capacités surnaturelles. Trois des compteurs - Ga Mo-tak ( Yoo Jun-sang ), Do Ha-na ( Kim Se-jeong ) et Choo Mae-ok ( Yeom Hye-ran ) - sont employés à Eonni's Noodles, un restaurant de nouilles qui sert comme leur cachette.
// Un jour, le quatrième Counter Jang Cheol-joong ( Sung Ji-ru ) est tué dans une bataille contre un puissant esprit maléfique de «niveau 3» [c] . Alors que son esprit est consumé par son tueur, son partenaire Yung Wi-gen (Moon Sook) a du mal à trouver un nouvel humain comateux à posséder. Malheureusement, elle est rapidement attirée par le lycéen So Mun ( Jo Byung-gyu) qui, malgré son handicap, est néanmoins en parfaite santé et en vie. Dès que Wi-gen l'a possédé, le Mun inconscient commence à remarquer des changements bizarres dans son corps et commence à voir Wi-gen dans ses rêves. Bientôt, Mun trouve les réponses dans Eonni's Noodles, et alors qu'il devient le remplaçant du regretté Cheol-joong, il se retrouve dans un voyage passionnant de lutte contre des démons assoiffés de sang, de se reconnecter à son passé et de découvrir la triste vérité derrière un réaménagement majeur. projet à Jungjin.";
// $dramaRunOn->url_img1 = "https://www.nautiljon.com/images/more/02/69/215196.jpg";
// $dramaRunOn->country = "Corée";
// $dramaRunOn->genreId = $genreRomance;
// $dramaRunOn->userId = $userElodie;

// $items = array($dramaHanaKimi, $dramaHanaYoriDango, $dramaDemonCatcher, $dramaRunOn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="style/style.css">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700&display=swap" rel="stylesheet">

  <title>Dorama</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
    <div class="container">
      <a class="navbar-brand" href="#">Dorama</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Pays
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Drama Coréen</a></li>
              <li><a class="dropdown-item" href="#">Drama Japonais</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Genres
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Romance</a></li>
              <li><a class="dropdown-item" href="#">Drame</a></li>
              <li><a class="dropdown-item" href="#">Policier</a></li>
              <li><a class="dropdown-item" href="#">Fantastique</a></li>
              <li><a class="dropdown-item" href="#">Historique</a></li>
              <li><a class="dropdown-item" href="#">Sport</a></li>
            </ul>
          </li>
        </ul>

        <form class="d-flex" action="/">
          <input class="form-control me-2" type="text" placeholder="Rechercher" aria-label="Search" name="search">
          <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Créer un compte</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="drama-header">
    <div class="container">
      <h1 class="text-left pt-4 text-light">Découvrez notre drama<br>à la une !</h1>
      <div class="">
        <a href="#" class="btn btn-light mt-5">En savoir plus</a>
      </div>
    </div>
  </header>

  <section class="container my-4">

    <div class="row mt-4">
      <h2 class="my-3">Les plus populaires</h2>
      <?php
      foreach ($items as $oneItem) {
      ?>
        <div class="col-md-3">
          <div class="card h-100 shadow-sm">
            <img src="<?= $oneItem->url_img1 ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $oneItem->title ?><span class="badge bg-secondary mx-2"><?= $oneItem->country ?></span></h5>
              <p class="card-text"><?= $oneItem->shortDescription ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="badge bg-secondary h-100"><?= $oneItem->genreId->name ?></span><a href="#" class="btn btn-primary px-4">Voir</a>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    <div class="row mt-4">
      <h2 class="my-3">Les nouveautés</h2>
      <?php
      foreach ($items as $oneItem) {
      ?>
        <div class="col-md-3">
          <div class="card h-100 shadow-sm">
            <img src="<?= htmlentities($oneItem->url_img1) ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= htmlentities($oneItem->title) ?><span class="badge bg-secondary mx-2"><?= htmlentities($oneItem->country)  ?></span></h5>
              <p class="card-text"><?= htmlentities($oneItem->shortDescription) ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="badge bg-secondary h-100"><?= htmlentities($oneItem->genreId->name) ?></span><a href="#" class="btn btn-primary px-4">Voir</a>
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

  </section>

  <footer>

  </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>