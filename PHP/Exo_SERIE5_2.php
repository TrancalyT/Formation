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