<?php

// $bdd = mysqli_init();
// mysqli_real_connect($bdd, "localhost", "toodle", "zincbigleux5906", "exo_emp_serv");
// $result = mysqli_query($bdd, "SELECT * FROM Employes;");
// $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

$bdd = mysqli_init();
mysqli_real_connect($bdd, "localhost", "toodle", "zincbigleux5906", "exo_emp_serv");
$result = mysqli_query($bdd, "SELECT nom, prenom, emploi, sup, service FROM Employes inner join Services on employes.noserv = services.noserv;");
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

var_dump($data);

?>

<!-- EXO :

- Utiliser la BDD gestion employé
- Afficher les employés dans un tableau HTML (Bootstrap) : nom, prénom, emploi, sup, service
- Pour chaque ligne du tableau, il faut un bouton : détail, supprimer, modifier
- En haut du tableau, un bouton ajouter un employé

- Même chose pour les services -->