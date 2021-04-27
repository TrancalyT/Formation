<?php

class Personne {

    //Cas constructeur par défaut :

    private $nom;
    private $prenom;
    private $dateNaissance;

    //Cas constructeur spécifique :

    // public function __construct(string $nom, $prenom, $dateNaissance){
    //     $this->nom = $nom;
    //     $this->prenom = $prenom;
    //     $this->dateNaissance = $dateNaissance;
    // }

    //GETTERS :

    public function getNom() : string{
        return $this->nom;
    }
    public function getPrenom() : string{
        return $this->prenom;
    }
    public function getDateNaissance() : string{
        return $this->dateNaissance;
    }

    //SETTERS (sans return $this = on ne peut écrire de façon optimisé) :

    public function setNom(string $newNom) : Personne{
        $this->nom = $newNom;
        return $this;
    }
    public function setPrenom(string $newPrenom) : Personne{
        $this->prenom = $newPrenom;
        return $this;
    }
    public function setDateNaissance(string $newDateNaissance) : Personne{
        $this->dateNaissance = $newDateNaissance;
        return $this;
    }

    //__TOSTRING (pour echo $personne1)

    public function __toString (){
        return "Nom : " .$this->nom. ", Prénom : " .$this->prenom. ", Date de naissance : " .$this->dateNaissance. ".\n";
    }
}

?>