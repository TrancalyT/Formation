<?php

include_once('Profil_User.php');

$manager = new Profil_User(1, "MN", "Manager");
$dg = new Profil_User(2, "DG", "Directeur General");
$chefprojet = new Profil_User(3, "CP", "Chef de Projet");

$utilisateur1 = new User_User(1, "DUPONT", "David", "DUPONT@David.com", "060000000", 1000.0, "ddd", "ddd", "DIRECTION", $manager);
$utilisateur2 = new User_User(2, "DURAN", "René", "DUPONT@David.com", "060000000", 2000.0, "ddd", "ddd", "DIRECTION", $dg);
$utilisateur3 = new User_User(3, "POLO", "Copola", "DUPONT@David.com", "060000000", 5000.0, "ddd", "ddd", "DIRECTION", $chefprojet);
$utilisateur4 = new User_User(4, "ZARBU", "Sophie", "DUPONT@David.com", "060000000", 1050.0, "ddd", "ddd", "DIRECTION", $manager);
$utilisateur5 = new User_User(5, "WOLOT", "Fredo", "DUPONT@David.com", "060000000", 2500.0, "ddd", "ddd", "DIRECTION", $manager);

$users = [
    $utilisateur1, $utilisateur2, $utilisateur3, $utilisateur4, $utilisateur5
];

echo "Affichage de la liste des utilisateurs : \n";
foreach ($users as $user) {
    echo $user->afficher();
}

echo "Affichage de la liste des managers : \n";
foreach ($users as $user) {
    if ($user->getProfil()->getCode() == "MN") {
        echo $user->afficher();
    }
}

?>