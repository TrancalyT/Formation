<!-- EXO 3.1 -->

<?php

    $num = 0;

    $num = readline("Entrez un nombre :");

    if ($num >= 0){
        echo ("$num est positif");
    }
    else {
        echo ("$num est négatif");
    }

?>

<!-- EXO 3.5 -->

<?php

    $num1 = 0;
    $num2 = 0;

    $num1 = readline("Entrez un premier nombre : ");
    $num2 = readline("Entrez un deuxième nombre : ");

    $numProd = $num1 * $num2;

    if ($numProd >= 0){
    echo ("$numProd est positif");
    }
    else {
        echo ("$numProd est négatif");
    }

?>

<!-- EXO 3.6 -->

<?php

    $age = 0;

    $age = readline("Veuillez saisir l'âge de l'enfant : ");

    if ($age >= 12){
        echo ("Cadet");
    }
    else if ($age >= 10){
        echo ("Minime");
    }
    else if ($age >= 8){
        echo ("Pupille");
    }
    else if ($age >= 6){
        echo ("Poussin");
    }
    else echo ("Hors catégorie");

?>
