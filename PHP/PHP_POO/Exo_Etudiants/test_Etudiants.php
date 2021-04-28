<?php

include_once('Etudiant.php');
include_once('Professeur.php');

$etudiant1 = new Etudiant (1, "NICOLAS", "Nicolas", "741852");
$etudiant2 = new Etudiant (2, "BOURTHOUMIEUX", "Alfred", "963852");

$employe1 = new Employe (3, "BOLERO", "Hakim", 2500.21);
$employe2 = new Employe (4, "ZIGZAG", "Carlita", 14.30);

$prof1 = new Professeur (5, "DEFORCENET", "Berangère", 78954.23, "Le coaching ultra mentale");
$prof2 = new Professeur (6, "KENPOWELL", "Edmund", 540.00, "Les massages cardiaques en milieu hostile");

echo $etudiant1. "\n";
echo $etudiant2. "\n";

echo $employe1. "\n";
echo $employe2. "\n";

echo $prof1. "\n";
echo $prof2. "\n";

?>