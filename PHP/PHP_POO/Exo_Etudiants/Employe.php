<?php

include_once("Personne.php");

class Employe extends Personne{

    protected float $salaire;

    public function __construct(int $id, string $nom, string $prenom, float $salaire)
    {
        parent::__construct($id, $nom, $prenom);
        $this->salaire = $salaire;
    }

    public function __toString()
    {
        return parent::__toString(). " Mon salaire est de " .$this->salaire. "€.";
    }

    /// GETTERS
    public function getSalaire() : float
    {
        return $this->salaire;
    }
    /// SETTERS
    public function setSalaire($newSalaire) : self
    {
        $this->salaire = $newSalaire;
        return $this;
    }
}

?>