<?php

function setConnexionBDD()
{
    $bdd = mysqli_init();
    mysqli_real_connect($bdd, "localhost", "toodle", "azerty", "exo_emp_serv");

    return $bdd;
}

function displayCompteur()
{
    $bdd = setConnexionBDD();
    $nbAjout = mysqli_query($bdd, "SELECT COUNT(*) FROM EMP2 WHERE DATE_AJOUT = DATE(SYSDATE());");
  
    $dataNbAjout = mysqli_fetch_array($nbAjout);
    $compteur = $dataNbAjout[0];
    mysqli_close($bdd);

    return $compteur;
}

function checkCo($mailCo)
{
  $bdd = setConnexionBDD();
  $checkID = mysqli_query($bdd, "SELECT * FROM USER WHERE USER_MAIL = '$mailCo'");
  $dataID = mysqli_fetch_all($checkID, MYSQLI_ASSOC);
  mysqli_close($bdd);

  return $dataID;
}

function displayArrayTableau()
{
    $bdd = setConnexionBDD();
    $result = mysqli_query($bdd, "SELECT E1.NOEMP AS NOEMP, E1.NOM AS NOM, E1.PRENOM AS PRENOM, E1.EMPLOI AS EMPLOI, E1.SUP AS SUP, E1.NOSERV AS NOSERV, SERVICE, E2.NOM AS NOMSUP, E2.PRENOM AS PRENOMSUP
    FROM EMP2 AS E1 INNER JOIN SERV2 ON E1.noserv = SERV2.noserv
                    LEFT JOIN EMP2 AS E2 ON E1.SUP = E2.NOEMP;");
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($bdd);

    return $data;
}

function displayArraySup()
{
    $bdd = setConnexionBDD();
    $searchSup = mysqli_query($bdd, "SELECT DISTINCT SUP FROM EMP2;");
    $dataSup = mysqli_fetch_all($searchSup, MYSQLI_ASSOC);
    mysqli_close($bdd);

    return $dataSup;
}

function displayDetails($noemp)
{
    $bdd = setConnexionBDD();
    $searchDetails = mysqli_query($bdd, "SELECT NOEMP, NOM, PRENOM, EMPLOI, SUP, EMBAUCHE, SAL, COMM, SERV2.*, PROJ.* FROM EMP2 
                                inner join serv2 on emp2.noserv = serv2.noserv 
                                inner join proj on emp2.noproj = proj.noproj 
                                where NOEMP = $noemp;");
    $dataDetails = mysqli_fetch_all($searchDetails, MYSQLI_ASSOC);
    mysqli_close($bdd);

    return $dataDetails;
}

function checkDoublon()
{
    $bdd = setConnexionBDD();
    $checkDoublon = mysqli_query($bdd, "SELECT * FROM USER;");
    $dataDoublon = mysqli_fetch_all($checkDoublon, MYSQLI_ASSOC);
    mysqli_close($bdd);

    return $dataDoublon;
}