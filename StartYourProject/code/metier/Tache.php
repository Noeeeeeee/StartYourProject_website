<?php

use Cassandra\Date;

class Tache
{
    private $idTache;
    private $createurTache;
    private $projet;
    private $nomTache;
    private $description;
    private $cout;
    private $dateDeb;
    private $duree;

    public function __construct(int $idTache, string $createurTache, int $idprojet, string $nomTache, string $description, float $cout, $dateDeb, int $duree){
        $this->idTache=$idTache;
        $this->createurTache = $createurTache;
        $this->projet = $idprojet;
        $this->nomTache=$nomTache;
        $this->description = $description;
        $this->cout=$cout;
        $this->dateDeb= new DateTime($dateDeb);
        $this->duree=$duree;
    }
    /**
     * @return int
     */
    public function getIdTache(): int
    {
        return $this->idTache;
    }

    /**
     * @return string
     */
    public function getCreateurTache(): string
    {
        return $this->createurTache;
    }

    /**
     * @return int
     */
    public function getProjet(): int
    {
        return $this->projet;
    }

    /**
     * @return string
     */
    public function getNomTache(): string
    {
        return $this->nomTache;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return float
     */
    public function getCout(): float
    {
        return $this->cout;
    }

    /**
     * @return string
     */
    public function getDateDeb(): string
    {
        return $this->dateDeb->format("Y-m-d");
    }

    /**
     * @return int
     */
    public function getDuree(): int
    {
        return $this->duree;
    }

}