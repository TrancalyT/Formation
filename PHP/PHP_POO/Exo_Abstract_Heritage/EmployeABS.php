<?php

abstract class EmployeABS{

    protected string $matricule;
    protected string $nom;
    protected string $prenom;
    protected string $ddn;

    public function __construct($matricule, $nom, $prenom, $ddn)
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->ddn = $ddn;
    }

    public function __toString()
    {
        return "Matricule : " .$this->matricule. ", Nom : " .$this->nom. ", Prénom : " .$this->prenom. ", Date de naissance : " .$this->ddn. ".";
    }

    abstract public function getSalaire() : float;

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of ddn
     */ 
    public function getDdn()
    {
        return $this->ddn;
    }

    /**
     * Set the value of ddn
     *
     * @return  self
     */ 
    public function setDdn($ddn)
    {
        $this->ddn = $ddn;

        return $this;
    }
}

?>