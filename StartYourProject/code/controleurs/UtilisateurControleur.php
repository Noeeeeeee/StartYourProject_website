<?php


class UtilisateurControleur
{
    function __construct()
    {
        global $rep, $vues, $erreur;
        try {
            if (isset($_REQUEST["action"])) {
                $action = $_REQUEST["action"];
            } else {
                $action = NULL;
            }
            switch ($action) {
                case "Deconnecter" :
                    $this->seDeconnecter();
                    break;
                case "PageMesProjet":
                    $this->afficherPageMesProjet();
                    break;
                case "AjouterProjet":
                    $this->ajouterProjet();
                    break;
                case "afficherPageProjet":
                    $this->afficherPageProjet();
                    break;
                case "creerTache":
                    $this->creerTache();
                    break;
                case "AffichePageCreationTache":
                    $this->affichePageCreationTache();
                    break;
                case "AfficherPageCreationProjet":
                    $this->afficherPageCreationProjet();
                    break;
                default:
                    throw new \Exception('Unexpected value');
            }
        } catch (PDOException $e) {
            $erreur = "Erreur PDO";
            require($rep . $vues['pageErreur']);
        } catch (Exception $e2) {
            $erreur = "Erreur";
            require($rep . $vues['pageErreur']);
        }
    }

    private function seDeconnecter(){
        session_destroy();
        header('Refresh:0;url=index.php');
    }

    private function afficherPageMesProjet(){
        global $rep, $vues;
        if(isset($_SESSION['email'])){
            $email = $_SESSION['email'];
        }
        else $email = null;
        if($email != null) {
            $tabProjets = ModelProjet::getAllProjetByMail($email);
            require($rep . $vues['pageMesProjets']);
        }
    }

    private function ajouterProjet()
    {
        global $rep, $vues;

        $nomProjet = $_REQUEST['nomProjet'];
        $descriptionProjet = $_REQUEST['descriptionProjet'];
        $budgetProjet = $_REQUEST['budgetProjet'];
        $createur = $_SESSION['email'];
        ModelProjet::ajouterProjet($nomProjet, $createur, $descriptionProjet, $budgetProjet);
        self::afficherPageMesProjet();
    }

    private function afficherPageProjet()
    {

        global $rep, $vues;
        $idProjet = $_POST['idprojet'];
        if (isset($idProjet)) {
            $projet = ModelTache::displayTache($idProjet, "test");
            require($rep . $vues['pageProjet']);
        }
    }

    /**
     * Fonction de création de tâches qui crée une tâche en récupèrant les données saisies par l'utilisateur
     */
    private function creerTache()
    {

        global $rep, $vues;
        // $email= $_POST['email'];
        $email = "meriem@gmail.com";
        $idProjet = $_POST['idProjet'];
        $nomTache = $_POST['nomtache'];
        $description = $_POST['description'];
        $cout = $_POST['cout'];
        $dateDebut = $_POST['datedebut'];
        $duree = $_POST['duree'];
        ModelTache::ajouterTache($email, $idProjet, $nomTache, $description, $cout, $dateDebut, $duree);
//        self::afficherAccueil(); // a faire

    }

    private function affichePageCreationTache()
    {
        global $rep, $vues;
        $idProjet = $_REQUEST['idProjet'];
        require($rep . $vues['pageCreationTache']);

    }

    private function afficherPageCreationProjet()
    {
        global $rep, $vues;
        require($rep . $vues['pageCreationProjet']);
    }
}