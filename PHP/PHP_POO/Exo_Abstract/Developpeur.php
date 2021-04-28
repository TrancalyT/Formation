<?php

include_once("PersonneABS.php");

class Developpeur extends PersonneABS{

    private string $specialite;

    public function __construct()
    {
        parent::$counter++;
    }

    public function afficher() : string
    {
        return "Le salaire du développeur " .$this->nom. " " .$this->prenom. " est : " .$this->salaire. "€, sa spécialité : " .$this->specialite;
    }

    public function calculerSalaire(): float
    {
        return $this->salaire * 1.20;
    }

    /**
     * Get the value of specialite
     */ 
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set the value of specialite
     *
     * @return  self
     */ 
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }
}

?>