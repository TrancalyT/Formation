<?php

    $agenda = fopen("AGENDA.txt", "a+") or die ("Impossible d'ouvrir le fichier AGENDA");

    $testFileSize = "AGENDA.txt";
    $size = filesize($testFileSize);

    $number = $_POST['telephone'];
    $telClear = sprintf("%s.%s.%s.%s.%s",
            substr($number, 0, 2),
            substr($number, 2, 2),
            substr($number, 4, 2),
            substr($number, 6, 2),
            substr($number, 8, 2));

    $contenuFichier = file_get_contents("AGENDA.txt");
    $nbrLigne = substr_count($contenuFichier, "\n");
    $id = $nbrLigne + 2;

    if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['telephone']) && $size == 0){
        fwrite($agenda, $id. ";" .strtoupper($_POST['nom']). ";" .ucwords($_POST['prenom']). ";" .$_POST['mail']. ";" .$telClear. ";");
    } else if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['telephone'])) {
        fwrite($agenda, "\n" .$id. ";" .strtoupper($_POST['nom']). ";" .ucwords($_POST['prenom']). ";" .$_POST['mail']. ";" .$telClear. ";");
    }
    
    fclose($agenda);

    header("Location: http://127.0.0.1/afficher_HTML.php");

?>