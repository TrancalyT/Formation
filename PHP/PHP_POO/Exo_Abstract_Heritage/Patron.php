<?php

include_once("EmployeABS.php");

class Patron extends EmployeABS{

    private int $pourcentageSurCA;
    private static int $chiffreAffaire = 50000;
    
    public function getSalaire() : float
    {
        if ($this->pourcentageSurCA != NULL){
            $salaire = self::$chiffreAffaire * $this->pourcentageSurCA /100;
            return $salaire;
        } else {
            return 0;
        }
       
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