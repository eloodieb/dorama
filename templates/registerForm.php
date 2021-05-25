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

    <div class="container">
        <div class="row">
            <h1 class="display-4">Dorama</h1>
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <form class="form-signin" method="POST" action="/register">
                    <h2 class="form-signin-heading text-center">Inscription</h2>
                    <?php
                    if (isset($errorMsg)) {
                        echo "<div class='alert alert-warning' role='alert'>$errorMsg</div>";
                    }
                    ?>
                    <input type="text" class="form-control my-3" name="pseudo" placeholder="Pseudo (4 characters)" required="" autofocus="" />
                    <input type="password" class="form-control" name="password" placeholder="Password (8 characters)" required="" />
                    <label class="my-2">Retapez votre mot de passe</label>
                    <input type="password" class="form-control" name="passwordRetype" placeholder="Password" required="" />
                    <button class="btn btn-lg btn-primary btn-block my-3" type="submit">S'incrire</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>