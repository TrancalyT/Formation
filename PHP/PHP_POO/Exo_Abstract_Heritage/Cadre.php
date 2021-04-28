<?php

include_once("EmployeABS.php");

class Cadre extends EmployeABS{

    private int $indice;
    
    public function getSalaire() : float
    {
        if ($this->indice == 1){
            return 13000;
        } else if ($this->indice == 2){
            return 15000;
        } else if ($this->indice == 3){
            return 17000;
        } else if ($this->indice == 4){
            return 20000;
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