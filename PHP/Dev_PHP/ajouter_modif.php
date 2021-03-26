<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.css">
    <title>Formulaire</title>
</head>
<body>



<?php

    if (isset($_POST["id"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["mail"]) && isset($_POST["telephone"])) {
        
        $agenda = fopen("AGENDA.txt", "r");

        $ligneTrouvee = "";
        $isLast = false;
        while (!feof($agenda)) {
            $ligne = fgets($agenda);
            $tabLigne = explode(";", $ligne);
            if ($_POST["id"] == $tabLigne[0]) {
                $ligneTrouvee = $ligne;
                $isLast = feof($agenda);
                break;
            }
        }
        fclose($agenda);

        $number = $_POST['telephone'];
        $telClear = sprintf("%s.%s.%s.%s.%s",
                substr($number, 0, 2),
                substr($number, 2, 2),
                substr($number, 4, 2),
                substr($number, 6, 2),
                substr($number, 8, 2));

        if (!$ligneTrouvee) {
            echo "<div class='alert alert-danger container-sm'><p>ERROR ! Cette personne n'existe pas dans l'agenda !</p>
                <div><a href='http://127.0.0.1/afficher_HTML.php'><button class='btn btn-danger' type='button'>Retour à l'agenda</button></a></div></div>";
        } else {
            $actualContent = file_get_contents("AGENDA.txt");

            if ($isLast) {
                $newLine = ($_POST["id"] . ";" .strtoupper($_POST['nom']). ";" .ucwords($_POST['prenom']). ";" .$_POST['mail']. ";" .$telClear. ";");
            } else {
                $newLine = ($_POST["id"] . ";" .strtoupper($_POST['nom']). ";" .ucwords($_POST['prenom']). ";" .$_POST['mail']. ";" .$telClear . ";\n");
            }
            $newContent = str_replace($ligneTrouvee, $newLine, $actualContent);
    
            $agenda = fopen("AGENDA.txt", "w");
            fwrite($agenda, $newContent);
            fclose($agenda);
            header("Location: http://127.0.0.1/afficher_HTML.php");
        }
    }
    
?>

</body>
</html>