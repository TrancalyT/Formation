<?php

if(isset($_REQUEST['noemp'])){

    $noemp = intval($_REQUEST['noemp']);

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = mysqli_connect("localhost", "toodle", "zincbigleux5906", "exo_emp_serv");

    $query = "SELECT NOEMP, NOM, PRENOM, EMPLOI, SUP, EMBAUCHE, SAL, COMM, SERV2.*, PROJ.* FROM EMP2 
    inner join serv2 on emp2.noserv = serv2.noserv 
    inner join proj on emp2.noproj = proj.noproj 
    where NOEMP = $noemp;";


    $result = mysqli_query($mysqli, $query);

    while ($row = mysqli_fetch_row($result)) {

        $dnoemp = $row[0];
        $dnom = $row[1];
        $dprenom = $row[2];
        $demploi = $row[3];
        $dsup = $row[4];
        $demb = $row[5];
        $dsal = $row[6];
        $dcom = $row[7];
        $dnoserv = $row[8];
        $dserv = $row[9];
        $dville = $row[10];
        $dnoproj = $row[11];
        $dnomproj = $row[12];
        $dbudget = $row[13];

        if($dcom == NULL){
            $dcom = 0;
        }

        if($dsup == NULL){
            $dsup = "Pas de supérieur";
        }
        
    }

    mysqli_close($mysqli);

    // header("Location: http://127.0.0.1/tableau.php/#staticBackdrop?dnoemp=$dnoemp&dnom=$dnom&dprenom=$dprenom&demploi=$demploi&dsup=$dsup&demb=$demb&dsal=$dsal&dcom=$dcom&dnoserv=$dnoserv&dserv=$dserv&dville=$dville&dnoproj=$dnoproj&dnomproj=$dnomproj&dbudget=$dbudget");

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Détail employé</title>
</head>
<body>
<h1 class="row justify-content-center text-secondary shadow-lg p-3 mb-5 bg-body rounded"><?php echo"$dnom $dprenom" ?></h1>
<div class="row justify-content-center">
    <div class="col-sm-3">
    <div class="accordion accordion-flush border border-secondary" id="accordionFlushExample">
    <div class="accordion-item border border-light">
        <h2 class="accordion-header" id="flush-headingOne">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            Employé
        </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <?php echo 
                "Numéro d'employé : $dnoemp<br /> 
                Nom : $dnom<br />
                Prénom : $dprenom<br />
                Emploi : $demploi<br />
                Numéro supérieur : $dsup<br />
                Date d'embauche : $demb<br />
                Salaire : $dsal<br />
                Commission : $dcom <br />
                Numéro de Service : $dnoserv <br />
                Numéro de projet : $dnoproj" ?>
        </div>
        </div>
    </div>
    <div class="accordion-item border border-light">
        <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Service
        </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
        <?php echo 
                "Numéro de service : $dnoserv<br /> 
                Service : $dserv<br />
                Ville : $dville" ?>
        </div>
        </div>
    </div>
    <div class="accordion-item border border-light">
        <h2 class="accordion-header" id="flush-headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            Projet
        </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
        <?php echo 
                "Numéro de projet : $dnoproj<br /> 
                Nom du projet : $dnomproj<br />
                Budget : $dbudget" ?>
        </div>
        </div>
    </div>
    </div>
    <br/>
    <div class="row justify-content-center">
    <div class="col-sm-5">
    <a href="http://127.0.0.1/tableau.php"><button class="btn btn-outline-secondary" type="button">Retour à l'agenda</button></a>
    </div>
    </div> 
    </div>
    
</div>



</body>
</html>