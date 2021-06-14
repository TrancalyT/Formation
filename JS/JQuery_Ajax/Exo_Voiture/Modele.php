<?php

class Modele
{

    public $marque;
    public $modele;

    public function __construct($marque, $modele)
    {
        $this->modele = $modele;
        $this->marque = $marque;
    }
}
