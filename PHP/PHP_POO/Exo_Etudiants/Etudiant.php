<?php

include_once("Personne.php");

class Etudiant extends Personne{

    private string $cne;

    public function __construct(int $id, string $nom, string $prenom, string $cne)
    {
        parent::__construct($id, $nom, $prenom);
        $this->cne = $cne;
    }

    public function __toString()
    {
        return parent::__toString(). " Mon CNE est le : " .$this->cne. ".";
    }

    /// GETTERS
    public function getCne() : string
    {
        return $this->cne;
    }
    /// SETTERS
    public function setCne($newCne) : self
    {
        $this->cne = $newCne;
        return $this;
    }
}

?>