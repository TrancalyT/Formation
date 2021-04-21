<?php

$messageErrNom = "";
$messageErrPrenom = "";
$messageErrEmploi = "";
$messageErrSal = "";
$messageErrComm = "";
$messageError = "";

$regNom = "#[a-z]{1,20}#i";
$regPrenom = "#[a-z]{1,20}#i";
$regEmploi = "#[a-z]{1,20}#i";
$regSal = "#[0-9]{0,7}\.[0-9]{2}#";
$regComm = "#[0-9]{0,7}\.[0-9]{2}#";

@$nom = $_REQUEST['nom'];
@$prenom = $_REQUEST['prenom'];
@$emploi = $_REQUEST['emploi'];
@$sup = $_REQUEST['sup'];
@$emb = $_REQUEST['emb'];
@$sal = str_replace(",",".",($_REQUEST['sal']));
@$comm = str_replace(",",".",($_REQUEST['comm']));
@$noserv = $_REQUEST['noserv'];
@$noproj = $_REQUEST['noproj'];
@$valider = $_REQUEST["valider"];

if (isset($valider)){

    if(isset($nom) && !empty($nom) 
    && isset($prenom) && !empty($prenom) 
    && isset($emploi) && !empty($emploi) 
    && isset($sup) && !empty($sup)
    && isset($emb) && !empty($emb)
    && isset($sal) && !empty($sal)
    && isset($comm) && !empty($comm)
    && isset($noserv) && !empty($noserv)
    && isset($noproj) && !empty($noproj)){

        if (!preg_match($regNom, $nom)){
            $messageErrNom = "Veuillez saisir un nom correct";
        }
        if (!preg_match($regPrenom, $prenom)){
            $messageErrPrenom = "Veuillez saisir un prénom correct";
        }
        if (!preg_match($regEmploi, $emploi)){
            $messageErrEmploi = "Veuillez saisir un emploi correct";
        }
        if (!preg_match($regSal, $sal)){
            $messageErrSal = "Veuillez saisir un salaire correct (au moins 2 décimales)";
        }
        if (!preg_match($regComm, $comm)){
            $messageErrComm = "Veuillez saisir une commission correct (au moins 2 décimales)";
        }
        if (preg_match($regNom, $nom) && preg_match($regPrenom, $prenom) && preg_match($regEmploi, $emploi) && preg_match($regSal, $sal) && preg_match($regComm, $comm)){
            header("Location:http://127.0.0.1/process_ajout.php?nom=$nom&prenom=$prenom&emploi=$emploi&sup=$sup&emb=$emb&sal=$sal&comm=$comm&noserv=$noserv&noproj=$noproj");
        }
    } else {
        $messageError = "Veuillez saisir et remplir les informations manquantes";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <title>Ajout</title>
</head>
<body>
    <h1 class="row justify-content-center text-secondary shadow-lg p-3 mb-5 bg-body rounded"> Ajouter un employé </h1>
    <form action="ajouter.php" method="post" class="col g-3 justify-content form-info">
        <div class="container-lg">
        <span class="fs-6 fst-italic text-danger"><?php echo$messageError?></span>
            <div class="mb-3">
                <label for="Nom" class="form-label">Nom : </label>
                <input id="Nom" size="50" maxlength="20" type="text" placeholder="Entrez le nom" name="nom" class="form-control" value="<?php echo$nom?>" required>
                <span class="fs-6 fst-italic text-danger"><?php echo$messageErrNom?></span>
            </div>
            <div class="mb-3">
                <label for="Prénom" class="form-label">Prénom : </label>
                <input id="Prénom" size="50" maxlength="20" type="text" placeholder="Entrez le prénom" name="prenom" class="form-control" value="<?php echo$prenom?>" required>
                <span class="fs-6 fst-italic text-danger"><?php echo$messageErrPrenom?></span>
            </div>
            <div class="mb-3">
                <label for="Emploi" class="form-label">Emploi : </label>
                <input id="Emploi" size="50" maxlength="20" type="text" placeholder="Entrez l'emploi" name="emploi" class="form-control" value="<?php echo$emploi?>" required>
                <span class="fs-6 fst-italic text-danger"><?php echo$messageErrEmploi?></span>
            </div>
            <div class="mb-3">
                <label for="Sup" class="form-label">Numéro du supérieur : </label>
                <select class ="form-select form-select-mb mb-3" id="Sup" name="sup">
                    <option value="NULL"<?php echo ($sup == 'NULL')?'selected':''; ?>>Pas de supérieur</option>
                    <option value="1000"<?php echo ($sup == '1000')?'selected':''; ?>>1000 - Leroy Paul</option>
                    <option value="1200"<?php echo ($sup == '1200')?'selected':''; ?>>1200 - Lemaire Guy</option>
                    <option value="1300"<?php echo ($sup == '1300')?'selected':''; ?>>1300 - Lenoir Gerard</option>
                    <option value="1500"<?php echo ($sup == '1500')?'selected':''; ?>>1500 - Dupont Jean</option>
                    <option value="1600"<?php echo ($sup == '1600')?'selected':''; ?>>1600 - Lavare Paul</option>
                    <option value="1700"<?php echo ($sup == '1700')?'selected':''; ?>>1700 - Kimble Arnold</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Embauche" class="form-label">Date d'embauche : </label>
                <input id="Embauche" type="date" placeholder="Entrez la  date d'embauche" name="emb" class="form-control" value="<?php echo$emb?>" required>
            </div>
            <div class="mb-3">
                <label for="Salaire" class="form-label">Salaire : </label>
                <input id="Salaire" size="50" maxlength="9" type="tel" placeholder="Entrez le salaire" name="sal" class="form-control" value="<?php echo$sal?>" required>
                <span class="fs-6 fst-italic text-danger"><?php echo$messageErrSal?></span>
            </div>
            <div class="mb-3">
                <label for="Commission" class="form-label">Commission : </label>
                <input id="Commission" size="50" maxlength="9" type="tel" placeholder="Entrez le salaire" name="comm" class="form-control" value="<?php echo$comm?>" required>
                <span class="fs-6 fst-italic text-danger"><?php echo$messageErrComm?></span>
            </div>
            <div class="mb-3">
                <label for="Service" class="form-label">Service : </label>
                <select class ="form-select form-select-mb mb-3" id="Service" name="noserv">
                    <option value="1"<?php echo ($noserv == '1')?'selected':''; ?>>Direction</option>
                    <option value="2"<?php echo ($noserv == '2')?'selected':''; ?>>Logistique</option>
                    <option value="3"<?php echo ($noserv == '3')?'selected':''; ?>>Ventes</option>
                    <option value="4"<?php echo ($noserv == '4')?'selected':''; ?>>Formation</option>
                    <option value="5"<?php echo ($noserv == '5')?'selected':''; ?>>Informatique</option>
                    <option value="6"<?php echo ($noserv == '6')?'selected':''; ?>>Comptabilité</option>
                    <option value="7"<?php echo ($noserv == '7')?'selected':''; ?>>Technique</option>
                </select>    
            </div>
            <div class="mb-3">
                <label for="Projet" class="form-label">Projet : </label>
                <select class ="form-select form-select-mb mb-3" id="Projet" name="noproj">
                    <option value="101"<?php echo ($noproj == '101')?'selected':''; ?>>ALPHA</option>
                    <option value="102"<?php echo ($noproj == '102')?'selected':''; ?>>GAMMA</option>
                    <option value="103"<?php echo ($noproj == '103')?'selected':''; ?>>BETA</option>
                </select>   
            </div>
                <button type="submit" name="valider" value="valider" class="btn btn-primary">Envoyer</button>
                <a href="http://127.0.0.1/tableau.php"><button class="btn btn-outline-secondary" type="button">Retour à l'agenda</button></a>
        </div>
    </form>
</body>
</html>