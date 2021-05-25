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
            <a class="navbar-brand" href="index.php">Dorama</a>
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
                    <?php
                    if (isset($_SESSION['user'])) {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/newDrama" role="button">Ajouter un drama</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout" role="button">Déconnexion</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Créer un compte</a>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>