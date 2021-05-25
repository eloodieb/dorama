{% include 'inc/header.php' %}

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <form class="form-signin" method="POST" action="/newDrama">
                <h2 class="form-signin-heading text-center my-4">Ajouter un Drama</h2>
                <?php
                if (isset($errorMsg)) {
                    echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
                }
                ?>
                <label for="">Titre</label>
                <input type="text" class="form-control" name="title" required="" autofocus="" />
                <label for="shortDescription">Résumer</label>
                <textarea class="form-control" id="shortDescription" rows="2" name="shortDescription" required="" /></textarea>
                <label for="longDescription">Description</label>
                <textarea class="form-control" id="longDescription" rows="5" name="longDescription" required="" /></textarea>
                <label for="">Images</label>
                <input type="text" class="form-control" name="url_img1" placeholder="URL de l'image" required="" />
                <input type="text" class="form-control mt-2" name="url_img2" placeholder="URL de l'image" />
                <label for="">Trailer</label>
                <input type="text" class="form-control" name="url_trailer" placeholder="URL du trailer" />
                <label for="genre" class="form-label">Genre</label>
                <select name="genreId" class="form-select" required="">
                    <option value="0">Choisir un genre</option>
                    <?php
                    foreach ($genres as $oneGenre) {
                    ?>
                        <option value="<?= $oneGenre->id ?>"><?= $oneGenre->name ?></option>
                    <?php
                    }
                    ?>
                </select>
                <label for="country" class="form-label">Pays</label>
                <select name="country" id="country" class="form-select" required="">
                    <option value="coree">Corée</option>
                    <option value="japon">Japon</option>
                </select>
                <label for="">Année de sortie</label>
                <input type="text" class="form-control" name="yearRelease" required="" />
                <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>