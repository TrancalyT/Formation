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