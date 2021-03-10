<!-- EXO 5.4 -->

<?php

    function tableTime ($num){

        for ($i = 1; $i < 11; $i++){

            echo($num . " x " . $i . " = " . $num*$i . " ");
        }
    }

    $num = readline("Entrez le nombre à multiplier : ");

    tableTime($num);

?>

<!-- EXO 5.5 -->

<?php

    function addToNum ($number){

        $result = 0;

        for ($i = 1; $i < ($number + 1); $i++){

            $result = $result + $i;

        }

        return $result;
    }

    $number = readline("Veuillez entrer un nombre : ");

    echo(addToNum($number));

?>

<!-- EXO 5.6 -->

<?php

    function timeToNum ($number){

        $result = 1;

        for ($i = 1; $i < ($number + 1); $i++){

            $result = $result * $i;

        }

        return $result;
    }

    $number2 = readline("Veuillez entrer un nombre : ");

    echo(timeToNum($number2));

?>

<!-- EXO 5.7 -->

<?php

    $numMax = 0;
    $indiceDuMax = 0;

    for ($i = 1; $i < 21; $i++){
        $numm = readline("Entrez le nombre numéro " . $i . " : ");

        if ($numMax < $numm){
               $numMax = $numm;
               $indiceDuMax = $i;
        }
    }

    echo("Le plus grand de ces nombres est : " .$numMax. " et il s'agissait du nombre numéro " .$indiceDuMax);

?>

<!-- EXO 5.8 -->

<?php

    $numMax = 0;
    $indiceDuMax = 0;
    $i = 1;

    do {

        $numm = readline("Entrez le nombre numéro " . $i . " : ");

        if ($numMax < $numm){
            $numMax = $numm;
            $indiceDuMax = $i;
        }

        $i++;

    } while ($numm != 0);

    echo("Le plus grand de ces nombres est : " .$numMax. " et il s'agissait du nombre numéro " .$indiceDuMax);

?>

<!-- EXO 5.9 -->

<?php

    $somme = 0;
    $prix = 0;

    do {
        $prix = readline("Veuillez saisir le prix de l'article : ");
        $somme = $somme + $prix;
    } while ($prix != 0);

    echo ("Vous devez payer " .$somme. " €");

    while ($somme > 0) {
        $rendu = readline("Entrez le montant rendu : ");
        $somme = $somme - $rendu;

        if ($somme >= 10){
            echo("Il reste " .$somme. " €, rendre au moins 10 euros");
        } else if ($somme >= 5){
            echo("Il reste " .$somme. " €, rendre au moins 5 euros");
        } else if ($somme >= 1){
            echo("Il reste " .$somme. " €, rendre au moins 1 euros");
        }
    } 

?>