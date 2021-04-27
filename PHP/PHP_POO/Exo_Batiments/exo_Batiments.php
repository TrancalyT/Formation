<?php

include_once("Maison.php");

    $maison = new Maison ("93 Rue Solférino, Lille", 43.5, 2);
    $batiment = new Batiment ("20 Rue Nationale, Lille");

    // SI ATTRIBUT MAISON PAS PROTECTED, PASSER PAR LES SETTERS OU DIRECTEMENT DANS LE CONSTRUCT DE MAISON EXEMPLE : $this->setSuperficie($superficie);
    // $maison->setAdresse("93 Rue Solférino, Lille")->setSuperficie(43.5)->setNbPieces(8);

    echo $maison->getNbPieces(). " pièces.\n";
    echo $maison;

    // echo $batiment."\n";

    var_dump($maison);
?>