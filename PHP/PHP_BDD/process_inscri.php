<?php

    $pseudo = ($_GET['pseudo']);
    $mail = ($_GET['mail']);
    $password = password_hash($_GET['mdp'], PASSWORD_DEFAULT);
     
    $bdd = mysqli_init();
    mysqli_real_connect($bdd, "localhost", "toodle", "zincbigleux5906", "exo_emp_serv");

    $query = "INSERT INTO USER (USER_ID, USER_NAME, USER_MAIL, USER_PASSWORD, USER_PROFIL)
    VALUES
    (NULL, '$pseudo', '$mail', '$password', 'SIMPLE USER');";
    mysqli_query($bdd, $query);
    mysqli_close($bdd);
    
    header("Location:http://127.0.0.1/tableau.php");

?>