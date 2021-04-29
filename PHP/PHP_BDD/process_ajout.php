<?php
    include 'fonctions.php';

    $nom = strtoupper($_GET['nom']);
    $prenom = strtoupper($_GET['prenom']);
    $emploi = strtoupper($_GET['emploi']);
    $sup = ($_GET['sup']);
    $emb = ($_GET['emb']);
    $sal = ($_GET['sal']);
    $comm = ($_GET['comm']);
    $noserv = intval($_GET['noserv']);
    $noproj = intval($_GET['noproj']);
     
    $bdd = setConnexionBDD();

    $recupNoemp = "SELECT MAX(NOEMP)+1 FROM EMP2 WHERE NOSERV = $noserv;";
    $result = mysqli_query($bdd, $recupNoemp);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach($data as $key => $value){
        if(is_array($value)){
            foreach($value as $key => $value){
                if ($key == 'MAX(NOEMP)+1'){
                    $noemp = intval($value);
                }
            }
        }
    }

        if ($noemp == NULL){
            $noemp = 1700;
        }

    $query = "INSERT INTO EMP2 (NOEMP, NOM, PRENOM, EMPLOI, SUP, EMBAUCHE, SAL, COMM, NOSERV, NOPROJ, DATE_AJOUT)
    VALUES
    ($noemp, '$nom', '$prenom', '$emploi', $sup, '$emb', '$sal', '$comm', $noserv, $noproj, DATE(SYSDATE()));";
    $query .= "UPDATE EMP2 SET COMM = NULL WHERE COMM = 0.00;";
    mysqli_multi_query($bdd, $query);
    mysqli_close($bdd);
    
    header("Location:http://127.0.0.1/tableau.php");

?>

    <!-- var_dump($nom);
    var_dump($prenom);
    var_dump($emploi);
    var_dump($sup);
    var_dump($emb);
    var_dump($sal);
    var_dump($comm);
    var_dump($noserv);
    var_dump($noproj); -->

    <!-- Pour créer un compteur sans problème de décompte lors de la suppression :
    - Créer une nouvelle table compteur
    - La colonne compteur gagne +1 lors d'un ajout et la colonne sysdate contient le sysdate lors de l'écriture
    - On créer une variable qui contrôle le sysdate
    - Si le sysdate est le même que le max(compteur) alors on continue d'incrémenter
    - Sinon on reset la valeur du compteur à 0 et on écrit.
    - On renvoit la valeur compteur dans le header qu'on affichera au niveau du tableau -->