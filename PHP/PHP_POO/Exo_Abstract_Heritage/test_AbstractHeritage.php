<?php

include_once('Ouvrier.php');
include_once('Cadre.php');
include_once('Patron.php');

$ouvrier1 = new Ouvrier ("Ouvrier", "DURANT", "Paul", "1995-12-17", new DateTime("2012-04-12"));
$ouvrier2 = new Ouvrier ("Ouvrier", "JOUBERT", "Frederico", "1992-04-25", new DateTime("1994-04-12"));
$cadre1 = new Cadre ("Cadre", "PERSEVAL", "Mozart", "2000-12-17", 4);
$cadre2 = new Cadre ("Cadre", "DUFLOUZ", "Bertrand", "2004-01-01", 3);
$patron1 = new Patron ("Patron", "MICHEL", "Leboss", "1970-12-10", 50);

echo$ouvrier1;
echo"\n ----------------- \n";
echo$ouvrier2;
echo"\n ----------------- \n";
echo$cadre1;
echo"\n ----------------- \n";
echo$cadre2;
echo"\n ----------------- \n";
echo$patron1;
echo"\n ----------------- \n";