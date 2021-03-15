<?php

    $myFile = fopen("test.txt", "a+") or die ("Tu galère à ouvrir ton fichier ou quoi mec ?");
    $newPhrase = "\nTrop fort, tu as réussi à ajouter cette phrase au fichier !";
    fwrite($myFile, $newPhrase);
    // while (!feof($myFile)){
    //     echo fgets($myFile) . "\n";
    // }
    fclose($myFile);
    $myFile = fopen("test.txt", "r") or die ("Tu galère à ouvrir ton fichier ou quoi mec ?");
    $contenu = fread($myFile, filesize("test.txt"));
    fclose($myFile);

    echo($contenu);
?>