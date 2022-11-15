<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Start Your Project</title>

  <!-- CSS Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library Bootstrap-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- JavaScript Bootstrap-->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="vues/css/style.css" rel="stylesheet">
  <link href="vues/css/pageProjet.css" rel="stylesheet">


  <!--ICONS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  </head>

  <body class="bg-white">
    <nav class="navbar navbar-expand navbar-primary flex-column flex-md-row bd-navbar bg-primary">
      <a class="navbar-brand mr-0 mr-md-2" href="index.php" > <img src="vues/media/logo.png" id="logo"></a>
      <div class="navbar-nav" id="navbarNav">
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
         <li class="nav-item">
          <a class="nav-link"  href="#">Projet<span class="sr-only">(current)</span></a>
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
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar">
      <div class="sidebar-sticky pt-3 bg-primary">
        <ul class="nav flex-column ml-3">
          <li class="nav-item bg-warning m-1">

            <a class="nav-link active" href="index.php?action=PageMesProjet">
              <i class="fa fa-chevron-circle-left" aria-hidden="true"></i>
              Mes projets<span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item bg-warning m-1">

            <a class="nav-link" href="index.php?action=AffichePageCreationTache&idProjet=<?php echo $projet->getIdProjet()?>">
              <i class="fa fa-plus" aria-hidden="true"></i>
              Tache
            </a>
          </li>
          <li class="nav-item bg-warning m-1">
            <a class="nav-link" href="#">
              <i class="fa fa-commenting-o" aria-hidden="true"></i>
              Conversation
            </a>
          </li>
          <li class="nav-item bg-warning m-1">
            <a class="nav-link" href="#">
              <i class="fa fa-calendar" aria-hidden="true"></i>
              Calendrier
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="col-sm">
      <table class="table">
        <thead class=" text-center">
          <tr>
            <th scope="col">Lundi</th>
            <th scope="col">Mardi</th>
            <th scope="col">Mercredi</th>
            <th scope="col">Jeudi</th>
            <th scope="col">Vendredi</th>
            <th scope="col">Samedi</th>
            <th scope="col">Dimanche</th>
          </tr>
        </thead>
        <tbody>


        <?php
            foreach ($projet->getListeTaches() as $tache) { ?>
                <tr>
                    <td class="bg-primary"><?php echo $tache->getNomTache()?></td>
                    <td class="bg-primary"><?php echo $tache->getDateDeb()?></td>
                </tr>
        <?php }
            ?>
        </tbody>
      </table>
      <table class="table" id="tableMembres">
        <thead>
          <tr>
            <th scope="col">Nom</th>
            <th scope="col">Rôle</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <i class="fa fa-user-circle-o" id="iconMembre"></i>
              Esteban OCON
            </td>
            <td>Podium</td>
          </tr>
          <tr>
            <td>
                <i class="fa fa-user-circle-o" id="iconMembre"></i>       
                Romain GROSJEAN           
            </td>
            <td>blessé</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>