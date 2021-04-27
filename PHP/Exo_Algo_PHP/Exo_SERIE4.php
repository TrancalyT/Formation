<!-- EXO 4.2 -->

<?php

    $heure = 0;
    $minute = 0;

    $heure = readline("Veuillez saisir l'heure : ");
    $minute = readline("Veuillez saisir les minutes : ");

    if ($minute == 59){
        $minute = 00;
        $heure = $heure + 1;
    }
    else {
        $minute++;
    }

    if ($heure > 23){
        $heure = 00;
    }

    echo ("Il sera " . $heure . " heures " . $minute);

?>

<!-- EXO 4.3 -->

<?php

    $heure = 0;
    $minute = 0;
    $seconde = 0;

    $heure = readline("Veuillez saisir l'heure : ");
    $minute = readline("Veuillez saisir les minutes : ");
    $seconde = readline("Veuillez saisir les secondes : ");

    if ($seconde == 59){
        $minute++;
        $seconde = 00;
    }
    else {
        $seconde++;
    }

    if ($minute == 59 && $seconde == 00){
        $heure++;
        $minute = 00;
    }

    if ($heure > 23){
        $heure = 00;
    }

    echo ("Il sera " . $heure . " heures " . $minute . " minutes et " . $seconde . " secondes");

?>

<!-- EXO 4.4 -->

<?php

    $quantite = 0;
    $facture = 0;

    $quantite = readline("Veuillez saisir la quantité souhaitée : ");

    if ($quantite > 30){
        $facture = (0.10 * 10) + (0.09 * 20) + (0.08 * ($quantite - 30));
    }
    else if ($quantite > 10 && $quantite <= 30){
        $facture = (0.10 * 10) + (0.09 * ($quantite - 10));
    }
    else {
        $facture = 0.10 * $quantite;
    }

    echo ("La facture sera de " . $facture . " €");
    
?>

<!-- EXO 4.5 -->

<?php

    function imposable ($age , $sexe){
       
        if ($sexe = "H" && $age > 20){
            echo ("Vous êtes imposable");
        }
        else if ($sexe = "F" && $age >= 18 && $age < 36){
            echo ("Vous êtes imposable");
        }
        else {
            echo ("Vous n'êtes pas imposable");
        }
    }

    $age = readline("Veuillez entrer votre âge : ");
    $sexe = readline("Veuillez entrer votre sexe (H/F) : ");

    imposable($age, $sexe)
?>
