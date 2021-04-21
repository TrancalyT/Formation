<?php

$noemp = intval($_REQUEST['noemp']);
$nom = strtoupper($_REQUEST['nom']);
$prenom = strtoupper($_REQUEST['prenom']);
$emploi = strtoupper($_REQUEST['emploi']);
$sup = ($_REQUEST['sup']);
$noserv = intval($_REQUEST['noserv']);

$query = "UPDATE EMP2
SET NOM = '$nom',
    PRENOM = '$prenom',
    EMPLOI = '$emploi',
    SUP = $sup,
    NOSERV = '$noserv'
WHERE NOEMP = $noemp;"; 

$bdd = mysqli_init();
mysqli_real_connect($bdd, "localhost", "toodle", "zincbigleux5906", "exo_emp_serv");
mysqli_query($bdd, $query);

mysqli_close($bdd);

header("Location:http://127.0.0.1/tableau.php");

?>