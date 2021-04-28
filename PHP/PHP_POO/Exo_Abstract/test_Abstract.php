<?php

include_once("Developpeur.php");
include_once("Manager.php");

$dev = (new Developpeur())->setId(1)
                          ->setNom("DAVID")
                          ->setPrenom("Martin")
                          ->setMail("jojo@lolo.fr")
                          ->setTelephone("06-66-66-66-66")
                          ->setSalaire(10000.0)
                          ->setSpecialite("PHP");

$manager = (new Manager())->setId(2)
                          ->setNom("PAUL")
                          ->setPrenom("Jacobin")
                          ->setMail("lolo@jojo.fr")
                          ->setTelephone("06-99-99-99-99")
                          ->setSalaire(10000.0)
                          ->setService("Informatique");


echo "\n----------------\n";
echo $dev->afficher();
echo "\n----------------\n";
$manager->afficher();
echo "\n----------------\n";
echo "Vous avez crée " .PersonneABS::$counter. " personne(s).";
echo "\n----------------\n";

?>