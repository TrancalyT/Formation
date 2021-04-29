<?php
    session_start();
    include 'fonctions.php';

if(isset($_REQUEST['noemp'])){

    $noemp = intval($_REQUEST['noemp']);

    foreach(displayDetails($noemp) as $key => $value){
        if(is_array($value)){
        foreach($value as $key => $value){
            if ($key == 'NOEMP'){
                $dnoemp = $value;
            } else if ($key == 'NOM'){
                $dnom = $value;
            } else if ($key == 'PRENOM'){
                $dprenom = $value;
            } else if ($key == 'EMPLOI'){
                $demploi = $value;
            } else if ($key == 'SUP'){
                $dsup = $value;
            } else if ($key == 'EMBAUCHE'){
                $demb = $value;
            } else if ($key == 'SAL'){
                $dsal = $value;
            } else if ($key == 'COMM'){
                $dcom = $value;
            } else if ($key == 'NOSERV'){
                $dnoserv = $value;
            } else if ($key == 'SERVICE'){
                $dserv = $value;
            } else if ($key == 'VILLE'){
                $dville = $value;
            } else if ($key == 'NOPROJ'){
                $dnoproj = $value;
            } else if ($key == 'NOMPROJ'){
                $dnomproj = $value;
            } else if ($key == 'BUDGET'){
                $dbudget = $value;
            }
        }
        }
    }

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
    <script src="js/bootstrap.bundle.js"></script>
    <title>Détail employé</title>
</head>
<body>

<?php
    if (isset($_SESSION['user_profil']) && $_SESSION['user_profil'] == "ADMIN" || $_SESSION['user_profil'] == "SIMPLE USER" ) {
?>

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

<?php
    } else {
        header("Location:http://127.0.0.1/tableau.php?connexionRequired=true");
    }
?>

</body>
</html>