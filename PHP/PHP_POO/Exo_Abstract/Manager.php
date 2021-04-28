<?php

include_once("PersonneABS.php");

class Manager extends PersonneABS{

    private string $service;

    public function __construct()
    {
        parent::$counter++;
    }

    public function afficher() : void
    {
        echo "Le salaire du manager " .$this->nom. " " .$this->prenom. " est : " .$this->calculerSalaire(). "€, son service : " .$this->service;
    }

    public function calculerSalaire(): float
    {
        return $this->salaire * 1.35;
    }

    /**
     * Get the value of service
     */ 
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */ 
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }
}

?>