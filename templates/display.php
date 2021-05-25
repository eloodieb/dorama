{% include 'inc/header.php' %}

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