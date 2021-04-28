<?php

include_once("EmployeABS.php");

class Ouvrier extends EmployeABS{

    private DateTime $dateEntree;
    public static int $smic = 2500;
    
    public function getSalaire() : float
    {
        $today = new DateTime();
        $interval = $today->diff($this->dateEntree);
        $anciennete = $interval->y;
        $maximumSalaire = self::$smic * 2;

        $salaire = self::$smic + ($anciennete * 100);
        
        if ($salaire > $maximumSalaire){
            return $maximumSalaire;
        } else {
            return $salaire;
        } 
    }

    public function __construct($matricule, $nom, $prenom,$ddn, $dateEntree)
    {
        parent::__construct($matricule, $nom, $prenom, $ddn);
        $this->dateEntree = $dateEntree;
    }

    public function __toString()
    {
        return parent::__toString(). " Son salaire est de " .$this->getSalaire(). "€.";
    }
}

?>