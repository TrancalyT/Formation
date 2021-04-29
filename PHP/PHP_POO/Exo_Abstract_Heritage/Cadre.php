<?php

include_once("EmployeABS.php");

class Cadre extends EmployeABS{

    private int $indice;
    
    public function getSalaire() : float
    {
        switch ($this->indice) {
            case 1 :  
                return 13000;
            case 2 :
                return 15000;
            case 3 :
                return 17000;
            case 4 :
                return 20000;
            default :
                return 0; 
        }
    }

    public function __construct($matricule, $nom, $prenom,$ddn, $indice)
    {
        parent::__construct($matricule, $nom, $prenom, $ddn);
        $this->indice = $indice;
    }

    public function __toString()
    {
        return parent::__toString(). " A l'indice " .$this->indice. " son salaire est de " .$this->getSalaire(). "€.";
    }
}

?>