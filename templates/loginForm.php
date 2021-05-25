<?php
include __DIR__ . '/inc/header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <form class="form-signin" method="POST" action="/login">
                <h2 class="form-signin-heading text-center my-4">Heureux de vous revoir</h2>
                <?php
                if (isset($errorMsg)) {
                    echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
                }
                ?>
                <input type="text" class="form-control" name="pseudo" placeholder="Pseudo" required="" autofocus="" />
                <input type="password" class="form-control mt-2" name="password" placeholder="Password" required="" />
                <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Connexion</button>
            </form>
        </div>
    </div>
</div>
</body>

</html>