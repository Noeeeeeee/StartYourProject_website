<?php


class  Projet
{    private $idProjet;
    private $nomProjet;
    private $chefDeProjet;
    private $listeUtilisateur;
    private $listeTaches;


    public function __construct( $idProjet,  $nomProjet){
        $this->setIdProjet($idProjet);
        $this->setNomProjet($nomProjet);
    }

    /**
     * @return Utilisateur
     */
    public function getChefDeProjet(): Utilisateur
    {
        return $this->chefDeProjet;
    }

    /**
     * @param Utilisateur $chefDeProjet
     */
    public function setChefDeProjet(Utilisateur $chefDeProjet): void
    {
        $this->chefDeProjet = $chefDeProjet;
    }

    /**
     * @return array
     */
    public function getListeUtilisateur(): array
    {
        return $this->listeUtilisateur;
    }

    /**
     * @param array $listeUtilisateur
     */
    public function setListeUtilisateur(array $listeUtilisateur): void
    {
        $this->listeUtilisateur = $listeUtilisateur;
    }

    /**
     * @return array
     */
    public function getListeTaches(): array
    {
        return $this->listeTaches;
    }

    /**
     * @param array $listeTaches
     */
    public function setListeTaches(array $listeTaches): void
    {
        $this->listeTaches = $listeTaches;
    }

    /**
     * @return string
     */
    public function getNomProjet(): string
    {
        return $this->nomProjet;
    }

    /**
     * @param string $nomProjet
     */
    public function setNomProjet( $nomProjet): void
    {
        $this->nomProjet = $nomProjet;
    }

    /**
     * @return mixed
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * @param mixed $idProjet
     */
    public function setIdProjet($idProjet): void
    {
        $this->idProjet = $idProjet;
    }
}