<?php

include_once("EmployeABS.php");

class Patron extends EmployeABS{

    private int $pourcentageSurCA;
    public int $chiffreAffaire = 100000000;
    
    public function getSalaire() : float
    {
        $salaire = ($this->chiffreAffaire * $this->pourcentageSurCA) /100;
        return $salaire;
    }

    public function __construct($matricule, $nom, $prenom,$ddn, $pourcentageSurCA)
    {
        parent::__construct($matricule, $nom, $prenom, $ddn);
        $this->pourcentageSurCA = $pourcentageSurCA;
    }

    public function __toString()
    {
        return parent::__toString(). " Son salaire est de " .$this->getSalaire(). "€.";
    }
}

?>