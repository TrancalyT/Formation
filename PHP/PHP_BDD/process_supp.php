<?php

if(isset($_REQUEST['noemp'])){

    $noemp = intval($_REQUEST['noemp']);

    $query = "DELETE FROM EMP2 WHERE NOEMP = $noemp;";

    $bdd = mysqli_init();
    mysqli_real_connect($bdd, "localhost", "toodle", "zincbigleux5906", "exo_emp_serv");
    mysqli_query($bdd, $query);

    mysqli_close($bdd);

    header("Location:http://127.0.0.1/tableau.php");

}

?>