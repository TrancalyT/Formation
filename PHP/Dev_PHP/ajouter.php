<?php

    $agenda = fopen("AGENDA.txt", "a+") or die ("Impossible d'ouvrir le fichier AGENDA");

    $testFileSize = "AGENDA.txt";
    $size = filesize($testFileSize);

    $nom = readline ("Veuillez entrer votre NOM (en MAJ) : ");
    $prenom = readline ("Veuillez entrer votre Prénom : ");
    $mail = readline ("Veuillez saisir votre adresse E-Mail : ");
    $telephone = readline ("Veuillez entrer votre numéro de téléphone (tel que 00.00.00.00.00) : ");

    if ($size == 0){
        fwrite($agenda, $nom. ";" .$prenom. ";" .$mail. ";" .$telephone);
    } else {
        fwrite($agenda, "\n" .$nom. ";" .$prenom. ";" .$mail. ";" .$telephone);
    }

    fclose($agenda);
?>