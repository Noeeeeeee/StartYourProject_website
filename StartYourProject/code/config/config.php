<?php
$rep = __DIR__ . '/../';
$erreur = '';

//BD
$login = 'root';
$mdp = "";
$dsn = 'mysql:host=localhost;port=3307;dbname=startyourproject;charset=utf8';

//Vues

$vues['pageErreur']='vues/pageErreur.php';
$vues['pageAccueil']='vues/pageAccueil.php';
$vues['pageConnexion']='vues/pageConnexion.php';
$vues['pageMesProjets']='vues/pageMesProjets.php';
$vues['pageProjet']='vues/pageProjet.php';
$vues['pageCreationTache']='vues/pageCreationTache.php';
$vues['pageCreationProjet']='vues/pageCreationProjet.php';
$vues['pageMenu']='vues/pageMenu.php';
$vues['inscription']='vues/pageInscription.php';
