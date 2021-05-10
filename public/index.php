<?php

require "../vendor/autoload.php";

use Entity\User;
use Entity\Genre;
use Entity\Drama;

$userElodie = new User();
$userElodie->id = 1;
$userElodie->pseudo = "EloodieB";
$userElodie->password = "soleil1234";

$genreRomance = new Genre();
$genreRomance->id = 1;
$genreRomance->name = "Romance";

$dramaHanaKimi = new Drama();
$dramaHanaKimi->id = 1;
$dramaHanaKimi->title = "Hana Kimi";
$dramaHanaKimi->shortDescription = "Ashiya Mizuki, une jeune fille de 16 ans décide de se travestir et d'intégrer un internat pour garçon afin de faire reprendre le saut en hauteur à Sano Izumi";
$dramaHanaKimi->longDescription = "Ashiya Mizuki est une jeune fille de 16 ans d'origine japonaise installée avec sa famille en Californie aux États-Unis. À cause d'elle, Sano Izumi, un jeune champion de saut en hauteur japonais se blesse et arrête le saut Se sentant alors responsable Ashiya décide d'intégrer le même lycée que lui pour l'encourager à reprendre le saut en hauteur. Mais l'établissement se révèle être en fait un internat pour garçon, elle décide donc de se travestir en garçon. C'est sous ce déguisement qu'elle intègre l'école et qu'elle s'installe, par une étrange coïncidence, dans la même chambre que Sano Izumi. Malgré le mauvais caractère du jeune homme, elle en tombe amoureuse et est bien décidée à lui faire reprendre le saut en hauteur.";
$dramaHanaKimi->url_img1 = "http://www.anime-ultime.net/images/img20701.jpg";
$dramaHanaKimi->country = "Japon";
$dramaHanaKimi->genreId = $genreRomance;
$dramaHanaKimi->userId = $userElodie;
// $dramaHanaKimi->url_img2 = ;
// $dramaHanaKimi->url_trailer = ;
// $dramaHanaKimi->nbVote = ;
// $dramaHanaKimi->yearRelease = ;
// $dramaHanaKimi->create_at = time();

$dramaHanaYoriDango = new Drama();
$dramaHanaYoriDango->id = 2;
$dramaHanaYoriDango->title = "Hana Yori Dango";
$dramaHanaYoriDango->shortDescription = "Makino Tsukushi, issue d'un milieu modeste, intègre le milieu des étudiants riches à la prestigieuse école Eitoku Gakuen. Peu de temps après cependant, Makino découvre que l'école est dirigée par le F4 ou Quatre Fleurs, composé des playboys Nishikado Sôjiro et Mimasaka Akira, de l'introverti Hanazawa Rui, et du violent leader Domyôji Tsukasa.";
$dramaHanaYoriDango->longDescription = "Makino Tsukushi, issue d'un milieu modeste, intègre le milieu des étudiants riches à la prestigieuse école Eitoku Gakuen. Initialement, elle voulait y entrer parce que son idole, une mannequin de renommée internationale nommée Todô Shizuka, était une ancienne élève de l'école. Peu de temps après cependant, Makino découvre le caractère superficiel de ses camarades de classe. Leur arrogance et son incapacité à s'identifier à eux à cause de son statut social limitent ses chances de se faire des amis. Pire encore, l'école est dirigée par le F4 ou Quatre Fleurs, composé des playboys Nishikado Sôjiro et Mimasaka Akira, de l'introverti Hanazawa Rui, et du violent leader du F4 Domyôji Tsukasa. Le F4, formé des fils de magnats riches et les plus puissants du Japon, intimide les autres étudiants jusqu'à ce qu'ils soient expulsés ou cessent les cours.";
$dramaHanaYoriDango->url_img1 = "https://www.stellarsisters.com/wp-content/uploads/2012/07/hana-yori-dango-final-img-une.jpg";
$dramaHanaYoriDango->country = "Japon";
$dramaHanaYoriDango->genreId = $genreRomance;
$dramaHanaYoriDango->userId = $userElodie;

$dramaDemonCatcher = new Drama();
$dramaDemonCatcher->id = 3;
$dramaDemonCatcher->title = "Demon Catcher";
$dramaDemonCatcher->shortDescription = "Dans la ville fictive de Jungjin, un groupe de quatre chasseurs de démons appelés les Compteurs porte la tâche ardue de rechercher et de bannir les mauvais esprits qui s'échappent de l'au- delà pour gagner l'immortalité";
$dramaDemonCatcher->longDescription = "Dans la ville fictive de Jungjin, un groupe de quatre chasseurs de démons appelés les Compteurs porte la tâche ardue de rechercher et de bannir les mauvais esprits ( akgwi ) qui s'échappent de l'au- delà pour gagner l'immortalité. Ces esprits maléfiques possèdent des hôtes humains locaux qui ont commis un meurtre ou ont un fort désir d'assassiner, encouragent le désir de leur hôte de tuer et consomment l'esprit de la victime. Les compteurs étaient autrefois dans le coma lorsqu'un esprit partenaire de Yung, la frontière entre l'au-delà et le monde des vivants, possèdeet leur donner un corps et une conscience parfaitement sains avec une force surhumaine et des capacités surnaturelles. Trois des compteurs - Ga Mo-tak ( Yoo Jun-sang ), Do Ha-na ( Kim Se-jeong ) et Choo Mae-ok ( Yeom Hye-ran ) - sont employés à Eonni's Noodles, un restaurant de nouilles qui sert comme leur cachette.
Un jour, le quatrième Counter Jang Cheol-joong ( Sung Ji-ru ) est tué dans une bataille contre un puissant esprit maléfique de «niveau 3» [c] . Alors que son esprit est consumé par son tueur, son partenaire Yung Wi-gen (Moon Sook) a du mal à trouver un nouvel humain comateux à posséder. Malheureusement, elle est rapidement attirée par le lycéen So Mun ( Jo Byung-gyu) qui, malgré son handicap, est néanmoins en parfaite santé et en vie. Dès que Wi-gen l'a possédé, le Mun inconscient commence à remarquer des changements bizarres dans son corps et commence à voir Wi-gen dans ses rêves. Bientôt, Mun trouve les réponses dans Eonni's Noodles, et alors qu'il devient le remplaçant du regretté Cheol-joong, il se retrouve dans un voyage passionnant de lutte contre des démons assoiffés de sang, de se reconnecter à son passé et de découvrir la triste vérité derrière un réaménagement majeur. projet à Jungjin.";
$dramaDemonCatcher->url_img1 = "https://www.netflix-news.com/wp-content/uploads/2021/02/demon-catchers-netflix-1200x640.jpeg";
$dramaDemonCatcher->country = "Corée";
$dramaDemonCatcher->genreId = $genreRomance;
$dramaDemonCatcher->userId = $userElodie;

$dramaRunOn = new Drama();
$dramaRunOn->id = 4;
$dramaRunOn->title = "Run On";
$dramaRunOn->shortDescription = "Dans la ville fictive de Jungjin, un groupe de quatre chasseurs de démons appelés les Compteurs porte la tâche ardue de rechercher et de bannir les mauvais esprits qui s'échappent de l'au- delà pour gagner l'immortalité";
$dramaRunOn->longDescription = "Dans la ville fictive de Jungjin, un groupe de quatre chasseurs de démons appelés les Compteurs porte la tâche ardue de rechercher et de bannir les mauvais esprits ( akgwi ) qui s'échappent de l'au- delà pour gagner l'immortalité. Ces esprits maléfiques possèdent des hôtes humains locaux qui ont commis un meurtre ou ont un fort désir d'assassiner, encouragent le désir de leur hôte de tuer et consomment l'esprit de la victime. Les compteurs étaient autrefois dans le coma lorsqu'un esprit partenaire de Yung, la frontière entre l'au-delà et le monde des vivants, possèdeet leur donner un corps et une conscience parfaitement sains avec une force surhumaine et des capacités surnaturelles. Trois des compteurs - Ga Mo-tak ( Yoo Jun-sang ), Do Ha-na ( Kim Se-jeong ) et Choo Mae-ok ( Yeom Hye-ran ) - sont employés à Eonni's Noodles, un restaurant de nouilles qui sert comme leur cachette.
Un jour, le quatrième Counter Jang Cheol-joong ( Sung Ji-ru ) est tué dans une bataille contre un puissant esprit maléfique de «niveau 3» [c] . Alors que son esprit est consumé par son tueur, son partenaire Yung Wi-gen (Moon Sook) a du mal à trouver un nouvel humain comateux à posséder. Malheureusement, elle est rapidement attirée par le lycéen So Mun ( Jo Byung-gyu) qui, malgré son handicap, est néanmoins en parfaite santé et en vie. Dès que Wi-gen l'a possédé, le Mun inconscient commence à remarquer des changements bizarres dans son corps et commence à voir Wi-gen dans ses rêves. Bientôt, Mun trouve les réponses dans Eonni's Noodles, et alors qu'il devient le remplaçant du regretté Cheol-joong, il se retrouve dans un voyage passionnant de lutte contre des démons assoiffés de sang, de se reconnecter à son passé et de découvrir la triste vérité derrière un réaménagement majeur. projet à Jungjin.";
$dramaRunOn->url_img1 = "https://www.netflix-news.com/wp-content/uploads/2021/02/demon-catchers-netflix-1200x640.jpeg";
$dramaRunOn->country = "Corée";
$dramaRunOn->genreId = $genreRomance;
$dramaRunOn->userId = $userElodie;

$dramaFullHouse = new Drama();
$dramaFullHouse->id = 5;
$dramaFullHouse->title = "Full House";
$dramaFullHouse->shortDescription = "Dans la ville fictive de Jungjin, un groupe de quatre chasseurs de démons appelés les Compteurs porte la tâche ardue de rechercher et de bannir les mauvais esprits qui s'échappent de l'au- delà pour gagner l'immortalité";
$dramaFullHouse->longDescription = "Dans la ville fictive de Jungjin, un groupe de quatre chasseurs de démons appelés les Compteurs porte la tâche ardue de rechercher et de bannir les mauvais esprits ( akgwi ) qui s'échappent de l'au- delà pour gagner l'immortalité. Ces esprits maléfiques possèdent des hôtes humains locaux qui ont commis un meurtre ou ont un fort désir d'assassiner, ";
$dramaFullHouse->url_img1 = "https://www.netflix-news.com/wp-content/uploads/2021/02/demon-catchers-netflix-1200x640.jpeg";
$dramaFullHouse->country = "Corée";
$dramaFullHouse->genreId = $genreRomance;
$dramaFullHouse->userId = $userElodie;

$items = array($dramaHanaKimi, $dramaHanaYoriDango, $dramaDemonCatcher, $dramaRunOn, $dramaFullHouse);
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

        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Rechercher" aria-label="Search">
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
    <!-- <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="img/theheirs.webp" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">The heirs<span class="badge bg-secondary mx-2">Coréen</span></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge bg-secondary h-100">Romance</span><a href="#" class="btn btn-primary px-4">Voir</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="img/hanayoridango.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hana yori dango<span class="badge bg-secondary mx-2">Japonais</span></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge bg-secondary h-100">Romance</span><a href="#" class="btn btn-primary px-4">Voir</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card h-100 shadow-sm">
          <img src="img/demoncatchers.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Demon catchers <span class="badge bg-secondary mx-2">Coréen</span></h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <div class="d-flex justify-content-between align-items-center">
              <span class="badge bg-secondary h-100">Action</span><a href="#" class="btn btn-primary px-4">Voir</a>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <!-- <div class="row">
        <h2 class="my-3">Les nouveautés</h2>
        <div class="col-md-3">
          <div class="card h-100 shadow-sm">
            <img src="img/runon.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Run On<span class="badge bg-secondary mx-2">Coréen</span></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="badge bg-secondary h-100">Romance</span><span class="badge bg-secondary h-100">Sport</span><a href="#" class="btn btn-primary px-4">Voir</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100 shadow-sm">
            <img src="img/theking.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">The king<span class="badge bg-secondary mx-2">Coréen</span></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="badge bg-secondary h-100">Romance</span><a href="#" class="btn btn-primary px-4">Voir</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100 shadow-sm">
            <img src="img/drromantic.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Romantic Doctor<span class="badge bg-secondary mx-2">Coréen</span></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="badge bg-secondary h-100">Romance</span><a href="#" class="btn btn-primary px-4">Voir</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card h-100 shadow-sm">
            <img src="img/itaewonclass.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Itaewon class<span class="badge bg-secondary mx-2">Coréen</span></h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="d-flex justify-content-between align-items-center">
                <span class="badge bg-secondary h-100">Drame</span><a href="#" class="btn btn-primary px-4">Voir</a>
              </div>

            </div>
          </div>
        </div>
      </div> -->

  </section>

  <footer>

  </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>