<?php

    $array = array();
    $range = readline("Veuillez préciser le nombre de valeurs à fournir au tableau : ");

    for ($i = 0; $i < $range; $i++){

        $array[$i] = [$i];
    }
    
    foreach($array as &$value){

        $value = readline("Veuillez entrer une valeur : ");
    }

    for ($i = 0; $i < $range; $i++){
        if ($i > 0 && $array[$i] == $array[$i-1] + 1){
            $isConsecutiv = true;
        } else {
            $isConsecutiv = false;
        }
    }

    if ($isConsecutiv){
        echo("C'est une suite consécutive !");
    } else {
        echo("Ce n'est pas une suite consécutive :(");
    }

?>