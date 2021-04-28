<?php

include_once("Employe.php");

class Professeur extends Employe{
    
    protected string $specialite;

    public function __construct(int $id, string $nom, string $prenom, float $salaire, string $specialite)
    {
        parent::__construct($id, $nom, $prenom, $salaire);
        $this->specialite = $specialite;
    }

    public function __toString()
    {
        return parent::__toString(). " J'enseigne " .$this->specialite. ".";
    }

    /// GETTERS
    public function getSpecialite() : string
    {
        return $this->specialite;
    }
    /// SETTERS
    public function setSpecialite($newSpecialite) : self
    {
        $this->specialite = $newSpecialite;
        return $this;
    }
}

?>