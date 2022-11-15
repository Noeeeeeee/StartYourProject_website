<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Start Your Project</title>

    <!-- CSS Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library Bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- JavaScript Bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="vues/css/connexion.css">
    <link href="vues/css/style.css" rel="stylesheet">

</head>
<body class="text-center" id="img-background">
<?php
if (isset($data) && !empty($data)) { ?>
    <div class="alert alert-warning div-alert-inscription-perso" role="alert" style="text-align: center">
        <?php foreach ($data as $d) {
            echo $d;
        } ?>
    </div>
    <?php
}
?>
<nav class="navbar navbar-expand navbar-primary flex-column flex-md-row bd-navbar bg-primary">
    <a class="navbar-brand mr-0 mr-md-2" href="index.php"> <img src="vues/media/logo.png" id="logo"></a>
    <div class="navbar-nav" id="navbarNav">
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
            <li class="nav-item">
                <a class="nav-link" href="#">Projet<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Aide<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">Credit<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>
<div class="container card mt-5 p-3" id="size-container">
    <h1 class="mb-3">Connectez-vous</h1>
        <div class="form-group mb-3 mx-auto">
            <form action="index.php?action=SeConnecter" method="post">
                <input type="email" class="form-control mt-3 mb-3" placeholder="Adresse email" required autofocus name="email">
                <input type="password" class="form-control mt-3 mb-3" placeholder="Mot de passe" required name="mdp">
                <button class="btn btn-primary" type="submit">Me connecter</button>
            </form>
        </div>
        <div>
            <a id="creer" href="index.php?action=AfficherInscription"> Pas de compte ? Créez en un !</a>
        </div>
</div>
</body>