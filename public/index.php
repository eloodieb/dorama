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
          <div class="col-md-3">
            <div class="card h-100 shadow-sm">
              <img src="img/hanakimi.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Hana kimi<span class="badge bg-secondary mx-2">Japonais</span></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="badge bg-secondary h-100">Romance</span><a href="#" class="btn btn-primary px-4">Voir</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
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
        </div>

        <div class="row">
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
        </div>

        
      </section>

      <footer>

      </footer>

    
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</html>