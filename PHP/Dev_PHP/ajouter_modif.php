<?php

    $_POST = ['id' => 7, 'nom' => 'Raoul', 'prenom'=> 'Raoul', 'mail' => 'ango@lol.com', 'telephone' => '0664521456'];
    
    print_r($_POST);

    $agenda = fopen("AGENDA.txt", "r+") or die ("Impossible d'ouvrir le fichier AGENDA");



    while (!feof($agenda)){

        $ligne = fgets($agenda);
        $tabLigne = explode(";", $ligne);

        if ($_POST['id'] === $tabLigne[0]){
            // fwrite($agenda, "\n" .$_POST['id']. ";" .strtoupper($_POST['nom']). ";" .ucwords($_POST['prenom']). ";" .$_POST['mail']. ";" .$_POST['telephone']);
            $tabLigne[0] = $_POST['id'];
            $tabLigne[1] = $_POST['nom'];
            $tabLigne[2] = $_POST['prenom'];
            $tabLigne[3] = $_POST['mail'];
            $tabLigne[4] = $_POST['telephone'];
        }
        fwrite($agenda, $tabLigne[0]. ";" .strtoupper($tabLigne[1]). ";" .ucwords($tabLigne[2]). ";" .$tabLigne[3]. ";" .$tabLigne[4]. "\n");
    }

    print_r($tabLigne);

    // $testFileSize = "AGENDA.txt";
    // $size = filesize($testFileSize);

    // $number = $_POST['telephone'];
    // $telClear = sprintf("%s.%s.%s.%s.%s",
    //         substr($number, 0, 2),
    //         substr($number, 2, 2),
    //         substr($number, 4, 2),
    //         substr($number, 6, 2),
    //         substr($number, 8, 2));

    // $contenuFichier = file_get_contents("AGENDA.txt");
    // $nbrLigne = substr_count($contenuFichier, "\n");
    // $id = $nbrLigne + 2;

    // if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['telephone']) && $size == 0){
    //     fwrite($agenda, $_POST['id']. ";" .strtoupper($_POST['nom']). ";" .ucwords($_POST['prenom']). ";" .$_POST['mail']. ";" .$telClear);
    // } else if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['telephone'])) {
    //     fwrite($agenda, "\n" .$_POST['id']. ";" .strtoupper($_POST['nom']). ";" .ucwords($_POST['prenom']). ";" .$_POST['mail']. ";" .$telClear);
    // }
    
    fclose($agenda);

    // header("Location: http://127.0.0.1/afficher_HTML.php");
?>