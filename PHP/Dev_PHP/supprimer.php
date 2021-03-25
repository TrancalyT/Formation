<?php

    $_REQUEST['id'] = 7;

    if(isset($_REQUEST['id'])){

        $id = $_REQUEST['id'];
        $agenda = fopen("AGENDA.txt", "r");

        $ligneTrouvee = "";
        while (!feof($agenda)) {
            $ligne = fgets($agenda);
            $tabLigne = explode(";", $ligne);
            if ($_REQUEST["id"] == $tabLigne[0]) {
                $ligneTrouvee = $ligne;
                break;
            }


        }
        fclose($agenda);

        $actualContent = file_get_contents("AGENDA.txt");

        $newLine = "" . preg_replace( "/ +/", ' ', str_replace( "", ' ', ob_get_clean() ) );
        

        $newContent = str_replace($ligneTrouvee, $newLine, $actualContent);

        // substr($newContent, 0, -1);

        echo ($newContent);
    
        // $agenda = fopen("AGENDA.txt", "w");
        // fwrite($agenda, $newContent);
        // fclose($agenda);
        // header("Location: http://127.0.0.1/afficher_HTML.php");

    }

?> 
Gérer le cas du dernier avec un backspace
POUR MODIF AVEC REPARTITION DES ID ordre Numérique faire une boucle qui écrit la valeur de X à chaque début de ligne avec un strreplace genre