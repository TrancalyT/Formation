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

        if (!$ligneTrouvee) {
            echo "<div class='alert alert-danger'>ERROR ! Cette personne n'existe pas dans l'agenda !</div>";
            echo "<div><a href='http://127.0.0.1/afficher_HTML.php'><button class='btn btn-outline-secondary' type='button'>Retour à l'agenda</button></a></div>";
        } else {
            $actualContent = file_get_contents("AGENDA.txt");

            $newLine = "";

            $newContent = str_replace($ligneTrouvee, $newLine, $actualContent);
    
            $agenda = fopen("AGENDA.txt", "w");
            fwrite($agenda, $newContent);
            fclose($agenda);
            header("Location: http://127.0.0.1/afficher_HTML.php");
        }

    }

?>