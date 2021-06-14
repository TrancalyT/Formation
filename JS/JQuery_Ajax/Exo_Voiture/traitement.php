<?php

include_once('Voiture.php');
include_once('Modele.php');

$v1 = new Voiture();
$v1->marque = "RENAULT";

$v2 = new Voiture();
$v2->marque = "OPEL";

$v3 = new Voiture();
$v3->marque = "FIAT";

$marques = [$v1, $v2, $v3];

$m1 = new Modele("RENAULT", "CLIO");
$m2 = new Modele("RENAULT", "TWINGO");
$m3 = new Modele("RENAULT", "SCENIC");

$m11 = new Modele("OPEL", "ASTRA");
$m22 = new Modele("OPEL", "ZAFIRA");
$m33 = new Modele("OPEL", "CORSA");

$m111 = new Modele("FIAT", "PUNTO");
$m222 = new Modele("FIAT", "PANDA");
$m333 = new Modele("FIAT", "500");

$allModeles = [$m1, $m2, $m3, $m11, $m22, $m33, $m111, $m222, $m333];

if (isset($_GET['marque'])){
    $modeles = [];
    foreach($allModeles as $modele){

        if ($modele->marque === $_GET['marque']){
            $modeles[] = $modele;
        }
    }
    echo json_encode ($modeles);
} else {
    echo json_encode($marques);
}

