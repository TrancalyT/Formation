<?php

include_once("Personne.php");

//Cas constructeur par défaut :

// $personne1 = new Personne();
// $personne1->setNom("Polo");
// $personne1->setPrenom("Fredo");
// $personne1->setDateNaissance("1988");

// $personne2 = new Personne();
// $personne2->setNom("Delafissurette");
// $personne2->setPrenom("Paul");
// $personne2->setDateNaissance("2001");

// $personne3 = new Personne();
// $personne3->setNom("Grololo");
// $personne3->setPrenom("Patricia");
// $personne3->setDateNaissance("1975");

// Cas constructeur par défaut, syntaxe optimisée :

$personne1 = new Personne ();
$personne1->setNom("Polo")->setPrenom("Fredo")->setDateNaissance("1988");
// OU
$personne1 = (new Personne())->setNom("Polo")->setPrenom("Fredo")->setDateNaissance("1988");

$personne2 = new Personne();
$personne2->setNom("Delafissurette")->setPrenom("Paul")->setDateNaissance("2001");

$personne3 = new Personne();
$personne3->setNom("Grololo")->setPrenom("Patricia")->setDateNaissance("1975");

//Cas constructeur spécifique :

// $personne1 = new Personne("Polo", "Fredo", "1988");
// $personne2 = new Personne("Delafissurette", "Paul", "2001");
// $personne3 = new Personne("Grololo", "Patricia", "1975");


echo("Le prénom de la personne 1 est : ".$personne1->getPrenom(). " !\n");
echo("Le nom de la personne 2 est : ".$personne2->getNom(). " !\n");
echo("La date de naissance de la personne 3 est : ".$personne3->getDateNaissance(). " !\n");

echo $personne1;
echo $personne2;
echo $personne3;

?>