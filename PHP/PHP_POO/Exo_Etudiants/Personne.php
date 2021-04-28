<?php

class Personne {

    protected int $id;
    protected string $nom;
    protected string $prenom;

    public function __construct(int $id, string $nom, string $prenom)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    public function __toString()
    {
        return "[ID " .$this->id. "] -> Je suis " .$this->nom. " " .$this->prenom. ".";
    }

    /// GETTERS
    public function getId() : int
    {
        return $this->id;
    }
    public function getNom() : string
    {
        return $this->nom;
    }
    public function getPrenom() : string
    {
        return $this->prenom;
    }
    /// SETTERS
    public function setId(int $newId) : self
    {
        $this->id = $newId;
        return $this;
    }
    public function setNom(string $newNom) : self
    {
        $this->nom = $newNom;
        return $this;
    }
    public function setPrenom(string $newPrenom) : self
    {
        $this->prenom = $newPrenom;
        return $this;
    }
}

?>