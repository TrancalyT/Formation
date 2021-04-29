<?php

abstract class Personne_User{

    protected int $id;
    protected string $nom;
    protected string $prenom;
    protected string $mail;
    protected string $tel;
    protected float $salaire;

    abstract public function calculerSalaire() : float;
    abstract public function afficher() : void;

    public function __construct($id, $nom, $prenom, $mail, $tel, $salaire)
    {
        
        $this->id = $id;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->tel = $tel;
        $this->salaire = $salaire;
    }

    public function __toString()
    {
        return "[ID] " .$this->id. " | Je suis " .$this->nom. " " .$this->prenom. ". Mon mail est " .$this->mail. ", et mon numéro de téléphone est le " .$this->tel. ". Mon salaire est de " .$this->salaire. "€.";
    }
}

?>