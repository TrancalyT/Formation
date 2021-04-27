<?php

include("Batiment.php");

class Maison extends Batiment {

    private $nbPieces;

    public function __construct(string $adresse, float $superficie, int $nbPieces){
        parent::__construct($adresse);
        $this->superficie = $superficie;
        $this->nbPieces = $nbPieces;
    }

    public function getNbPieces() : int{
        return $this->nbPieces;
    }

    public function setNbPieces(int $newNbPieces) : self{
        $this->nbPieces = $newNbPieces;
        return $this;
    }

    public function __toString (){
        // return "Le batiment à l'adresse suivante : " .$this->adresse. ", possède une superficie de " .$this->superficie. "m² et " .$this->nbPieces. " pièces.\n";
        return parent::__toString(). " et " .$this->nbPieces. " pièces.\n";
    }
}

?>