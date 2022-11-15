<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Start Your Project</title>

    <!-- CSS Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library Bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- JavaScript Bootstrap-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!--CSS -->
    <link href="vues/css/style.css" rel="stylesheet">
    <link href="vues/css/pageMesprojet.css" rel="stylesheet">

</head>

<body class="bg-white">
<nav class="navbar navbar-expand navbar-primary flex-column flex-md-row bd-navbar bg-primary">
    <a class="navbar-brand mr-0 mr-md-2" href="index.php"> <img src="vues/media/logo.png" style="width: 75px;"></a>
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
<div class="d-inline-flex m-5">
    <h2>Mes projets :</h2>
    <select name="tri" class="custom-select ml-3" id="selectTri">
        <option selected>Tri...</option>
        <option value="">A-Z</option>
        <option value="">Date</option>
        <option value="">Favoris</option>
    </select>

    <a href="index.php?action=AfficherPageCreationProjet" class="btn btn-primary rounded-pill justify-content-end">Nouveau
        projet</a>

</div>
<div class="ml-5 p-3 row justify-content-start">
    <?php
    $i = 0;
    foreach ($tabProjets as $projet) {
        if ($i == 10) {
            $i = 0;
            echo "</div><div class=\"ml-5 p-3 row justify-content-start\">";
        } ?>
        <div class="col-1 ml-5">
            <form action="index.php?action=afficherPageProjet" method="post">
                <input type="hidden" name="idprojet" value="<?php echo $projet->getIdProjet() ?>">
                <Button class="btn border-primary" id="sizeProjet" type="submit">
                    <img src="vues/media/logo-projet.png" width="100%"/>
                    <?php echo $projet->getNomProjet() ?>
                    <br>
                    <span class="badge badge-warning" id="badge-projet">En cours</span>
                </Button>
            </form>
        </div>
        <?php $i++;
    }
    ?>
</div>

<hr>

<div class="d-inline-flex ml-5 mt-3">
    <h2>Mes projets terminés:</h2>
</div>
<!--<div class="ml-5 mt-5">-->
<!--    <a class="btn border-primary" id="sizeProjet" href="#">-->
<!--        <img src="vues/media/logo-projet.png" width="100%"/>-->
<!--        </br>Projet 1</br>-->
<!--        <span class="badge badge-success" id="badge-projet">Terminé</span>-->
<!--    </a>-->
<!--    <a class="btn border-primary" id="sizeProjet" href="#">-->
<!--        <img src="vues/media/logo-projet.png" width="100%"/>-->
<!--        </br>Projet 2</br>-->
<!--        <span class="badge badge-success" id="badge-projet">Terminé</span>-->
<!--    </a>-->
<!--    <a class="btn border-primary" id="sizeProjet" href="#">-->
<!--        <img src="vues/media/logo-projet.png" width="100%"/>-->
<!--        </br>Projet 3</br>-->
<!--        <span class="badge badge-success" id="badge-projet">Terminé</span>-->
<!--    </a>-->
<!--</div>-->

</body>
</html>