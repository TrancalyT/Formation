<?php

function setConnexion(){

}

function displayCompteur(){

    $bdd = mysqli_init();
    mysqli_real_connect($bdd, "localhost", "toodle", "zincbigleux5906", "exo_emp_serv");
  
    $nbAjout = mysqli_query($bdd, "SELECT COUNT(*) FROM EMP2 WHERE DATE_AJOUT = DATE(SYSDATE());");
  
    $dataNbAjout = mysqli_fetch_array($nbAjout);
    $compteur = $dataNbAjout[0];

    return $compteur;
}
