<?php

    class Batiment {

        protected $adresse;
        protected $superficie;

        public function __construct(string $adresse){
            $this->adresse = $adresse;
        }

        public function getAdresse() : string{
            return $this->adresse;
        }
        public function getSuperficie() : float{
            return $this->superficie;
        }

        public function setAdresse(string $newAdresse) : self{
            $this->adresse = $newAdresse;
            return $this;
        }
        public function setSuperficie(float $newSuperficie) : self{
            $this->superficie = $newSuperficie;
            return $this;
        }

        public function __toString (){
            return "Le batiment à l'adresse suivante : " .$this->adresse. ", possède une superficie de " .$this->superficie. "m²";
        }
    } 

?>