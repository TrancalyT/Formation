<?php

include_once("Personne_User.php");

class User_User extends Personne_User{

    private string $login;
    private string $password;
    private string $service;
    private Profil_User $profil;

    public function calculerSalaire(): float
    {
        if ($this->profil->getCode() == "MN"){
            return $this->salaire * 1.1;
        } else if ($this->profil->getCode() == "DG"){
            return $this->salaire * 1.4;
        } else {
            return 0;
        }
    }

    public function afficher() : void
    {
        if ($this->profil->getCode() == "MN"){
            echo "Le salaire du manager " .$this->nom. " " .$this->prenom. " est : " .$this->calculerSalaire(). "€, son service : " .$this->service. " son profil étant " .$this->profil->getLibelle(). "\n";
        } else if ($this->profil->getCode() == "DG"){
            echo "Le salaire du directeur " .$this->nom. " " .$this->prenom. " est : " .$this->calculerSalaire(). "€, son service : " .$this->service. " son profil étant " .$this->profil->getLibelle(). "\n"; 
        }
        
    }

    public function __construct($id, $nom, $prenom, $mail, $tel, $salaire, $login, $password, $service, Profil_User $profil)
    {
        parent::__construct($id, $nom, $prenom, $mail, $tel, $salaire);
        $this->login = $login;
        $this->password = $password;
        $this->service = $service;
        $this->profil = $profil;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
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

    /**
     * Get the value of profil
     */ 
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */ 
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }
}

?>