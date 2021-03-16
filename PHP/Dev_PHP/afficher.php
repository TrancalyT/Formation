<?php

    $agenda = fopen("AGENDA.txt", "r") or die ("Impossible d'ouvrir le fichier AGENDA");
    
    while (!feof($agenda)){

        $ligne = fgets($agenda);
        if ($ligne != ""){
            $tabLigne = explode(";", $ligne);
        }
        $j = 0;

        foreach($tabLigne as $value){
    
    
            if ($j == 0){
                echo ("Nom : " .$value. "\n");
            } else if ($j == 1){
                echo ("Prénom : " .$value. "\n");
            } else if ($j == 2){
                echo ("E-Mail : " .$value. "\n");
            } else if ($j == 3){
                echo ("Téléphone : " .$value. "\n");
            }
            $j++;
        }
        // for ($i = 0; $i < 4; $i++){
        //     if ($i == 0){
        //         $nom = $tabLigne[$i];
        //     } else if ($i == 1){
        //         $prenom = $tabLigne[$i];
        //     } else if ($i == 2){
        //         $mail = $tabLigne[$i];
        //     } else if ($i == 3){
        //         $telephone = $tabLigne[$i];
        //     }
        // }

    }
    
    fclose($agenda);

?>