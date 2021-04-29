<?php
include 'fonctions.php';

if(isset($_REQUEST['noemp'])){

    $noemp = intval($_REQUEST['noemp']);

    $query = "DELETE FROM EMP2 WHERE NOEMP = $noemp;";

    $bdd = setConnexionBDD();
    mysqli_query($bdd, $query);

    mysqli_close($bdd);

    header("Location:http://127.0.0.1/tableau.php");

}

?>