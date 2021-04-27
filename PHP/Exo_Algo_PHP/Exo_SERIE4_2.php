<!-- EXO 4.6 -->

<?php

    function election ($score1, $score2, $score3, $scoreCandid){

        if ($score1 > 50 || $score2 > 50 || $score3 >50){
            echo("Votre candidat est battu :( ");
        }
        else if ($scoreCandid > 50){
            echo("Votre candidat est élu dès le premier tour ! Bravo la politique !");
        }
        else if ($scoreCandid > 12.5 && $scoreCandid > $score1 && $scoreCandid > $score2 && $scoreCandid > $score3){
            echo("Votre candidat passe le second tour et est favorable !");
        }
        else{
            echo("Votre candidat passe le second tour et est défavorable, try again !");
        }

    }

    $scoreCandid = readline("Veuillez entrer le score de votre candidat (en %) : ");
    $score1 = readline("Veuillez entrer le score du candidat numéro 2 (en %) : ");
    $score2 = readline("Veuillez entrer le score du candidat numéro 3 (en %) : ");
    $score3 = readline("Veuillez entrer le score du candidat numéro 4 (en %) : ");

    election($score1, $score2, $score3, $scoreCandid);

    ?>

<!-- EXO 4.7 -->

<?php

    function tarifAssurance ($age, $permis, $accident, $fidelité){

        $bareme = 0;

        if ($age >= 25){
            $bareme++;
        }
        
        if ($permis >= 2){
            $bareme++;
        }

        if ($age >= 25 && $permis >= 2 && $accident == 0 && $fidelité >= 1){
            $bareme++;
        }

        if ($accident >=2){
            $bareme = 0;
        } else if ($accident == 1){
            $bareme--;
        } else {
            $bareme++;
        }

        switch($bareme){
            case 0 :
                echo ("Refusé");
                break;
            case 1 :
                echo ("Tarif Rouge");
                break;
            case 2 :
                echo ("Tarif Orange");
                break;
            case 3 :
                echo ("Tarif Vert");
                break;
            case 4 :
                echo ("Tarif Bleu");
                break;
        }
    }

    $age = readline("Veuillez saisir l'âge : ");
    $permis = readline("Veuillez saisir l'ancienneté du permis : ");
    $accident = readline("Veuillez saisir le nombre d'accident où le propriétaire du véhicule était responsable : ");
    $fidelité = readline("Veuillez saisir l'ancienneté du client au sein de notre compagnie : ");

    tarifAssurance($age, $permis, $accident, $fidelité);

    ?>

<!-- EXO 4.8 -->

<?php

    function dateValide ($jour, $mois, $année){

        $estBissextile = ($année % 4 == 0 && $année % 100 != 0) || $année % 400 == 0;
        $estInvalide = $jour > 31 || $mois > 12 || ($mois == 2 && (($estBissextile && $jour > 29) || (!$estBissextile && $jour > 28))) || ($jour > 30 && ($mois == 4 || $mois == 6 || $mois == 8 || $mois == 10 || $mois == 12));

        if ($estInvalide){
            echo("Wrong way my friend, ceci est une date invalide ...");
        } else {
            echo("C'est une date valide ! Elle existe ou a existé ou existera !");
        }	
     }

        $jour = readline ("Entrez le jour : ");
        $mois = readline ("Entrez le mois : ");
        $année = readline ("Entrez l'année : ");

        dateValide($jour, $mois, $année);
?>