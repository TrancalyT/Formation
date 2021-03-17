<?php

    $agenda = fopen("AGENDA.txt", "a+") or die ("Impossible d'ouvrir le fichier AGENDA");

    $testFileSize = "AGENDA.txt";
    $size = filesize($testFileSize);

    // $nom = readline ("Veuillez entrer votre NOM (en MAJ) : ");
    // $prenom = readline ("Veuillez entrer votre Prénom : ");
    // $mail = readline ("Veuillez saisir votre adresse E-Mail : ");
    // $telephone = readline ("Veuillez entrer votre numéro de téléphone (tel que 00.00.00.00.00) : ");

    // if ($size == 0){
    //     fwrite($agenda, strtoupper($nom). ";" .ucwords($prenom). ";" .$mail. ";" .$telephone);
    // } else {
    //     fwrite($agenda, "\n" .strtoupper($nom). ";" .ucwords($prenom). ";" .$mail. ";" .$telephone);
    // }

    if ($size == 0){
        fwrite($agenda, strtoupper($_POST['nom']). ";" .ucwords($_POST['prenom']). ";" .$_POST['mail']. ";" .$_POST['telephone']);
    } else {
        fwrite($agenda, "\n" .strtoupper($_POST['nom']). ";" .ucwords($_POST['prenom']). ";" .$_POST['mail']. ";" .$_POST['telephone']);
    }
    
    fclose($agenda);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv='refresh' content='0; url=http://127.0.0.1/afficher_HTML.php'>
    <title>Redirection</title>
</head>
<body>
    
</body>
</html>