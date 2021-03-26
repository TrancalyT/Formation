<?php
    
    if(isset($_REQUEST['id'])){

        $agenda = fopen("AGENDA.txt", "r");

        $ligneTrouvee = "";
        $isLast = false;
        while (!feof($agenda)) {
            $ligne = fgets($agenda);
            $tabLigne = explode(";", $ligne);
            if ($_REQUEST["id"] == $tabLigne[0]) {
                $ligneTrouvee = $ligne;
                $isLast = feof($agenda);
                break;
            }


        }
        fclose($agenda);

        $actualContent = file_get_contents("AGENDA.txt");

        if ($isLast){
            
        $newLine = "";
        $newContent = str_replace($ligneTrouvee, $newLine, $actualContent);
        $newContent = backslashes($newContent, 1);

        } else {
            $newLine = "";
            $newContent = str_replace($ligneTrouvee, $newLine, $actualContent);
        }

    
        $agenda = fopen("AGENDA.txt", "w");
        fwrite($agenda, $newContent);
        fclose($agenda);

        $newId = 1;
        $finalContent = "";

        $agenda = fopen("AGENDA.txt", "r");
        while (!feof($agenda)) {
            $ligne = fgets($agenda);
            $tabLigne = explode(";", $ligne);
            $tabLigne[0] = $newId;
            $newId++;
            $contenu = implode(";", $tabLigne);
            $finalContent = ($finalContent. $contenu);
            
        }
            
        fclose($agenda);

        $agenda = fopen("AGENDA.txt", "w");
        fwrite($agenda, $finalContent);
        fclose($agenda);
        
        header("Location: http://127.0.0.1/afficher_HTML.php");

    }

    function backslashes($string, $nb_backslashes) {

        $nb_caractere = strlen($string);
        $i = $nb_caractere - $nb_backslashes;
        $new_string = substr($string, 0, $i);
        return $new_string;
    }
?> 