<?php

    $selectedUser = [];
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $agenda = fopen("AGENDA.txt", "r") or die ("Impossible d'ouvrir le fichier AGENDA");

        while (!feof($agenda)){
    
            $ligne = fgets($agenda);
            $tabLigne = explode(";", $ligne);

            if ($id == $tabLigne[0]){
                $selectedUser = $tabLigne;
                break;
            }
        }

        fclose($agenda);
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.css">
    <title>Formulaire</title>
</head>
<body>
    <h1 class="row justify-content-center"> Modifier vos informations </h1>
    <form action="ajouter_modif.php" method="post" class="col g-3 justify-content form-info">
        <div class="container-lg">
                <input type=hidden id="ID" name="id" value="<?php echo$selectedUser[0]?>" readonly>
            <div class="mb-3">
                <label for="Nom" class="form-label">Nom : </label>
                <input id="Nom" size="50" maxlength="100" type="text" placeholder="Entrez votre nom ici" name="nom" class="form-control" value="<?php echo$selectedUser[1]?>" required>
            </div>
            <div class="mb-3">
                <label for="Prénom" class="form-label">Prénom : </label>
                <input id="Prénom" size="50" maxlength="100" type="text" placeholder="Entrez votre prénom ici" name="prenom" class="form-control" value="<?php echo$selectedUser[2]?>" required>
            </div>
            <div class="mb-3">
                <label for="E-Mail" class="form-label">E-Mail : </label>
                <input id="E-Mail" size="50" maxlength="100" type="mail" placeholder="Entrez votre adresse e-mail ici" name="mail" class="form-control" value="<?php echo$selectedUser[3]?>" required>
            </div>
            <div class="mb-3">
                <label for="Téléphone" class="form-label">Téléphone : </label>
                <input id="Téléphone" size="50" maxlength="10" type="tel" placeholder="Entrez votre numéro de téléphone ici" name="telephone" class="form-control" value="<?php echo$selectedUser[4]?>" required>
            </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
                <a href="http://127.0.0.1/afficher_HTML.php"><button class="btn btn-outline-secondary" type="button">Retour à l'agenda</button></a>
        </div>
    </form>
</body>
</html>