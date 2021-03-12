<?php

$array = array();
$range = readline("Veuillez préciser le nombre de valeurs à fournir au tableau : ");

for ($i = 0; $i < $range; $i++){

    $array[$i] = [$i];
}

foreach($array as &$value){

    $value = readline("Veuillez entrer une valeur : ");
}

function triParInsertion ($array){
    for ($i = 0; $i < count($array) - 1; $i++){
        $min = $array[$i];
        $indexMin = $i;
        for ($j = $i + 1; $j < count($array); $j++){
            if ($array[$j] < $min){
                $indexMin = $j;
            }
        }
        if ($i != $indexMin){
            $temp = $array[$i];
            $array[$i] = $array[$indexMin];
            $array[$indexMin] = $temp;
        }
    }
    return $array;
}

function triParBulle ($array){
    $yaEuPermut = true;

    while ($yaEuPermut){
        $yaEuPermut = false;
        for ($i = 0; $i < count($array) - 1; $i++){
            if($array[$i+1] < $array[$i]){
                $temp = $array[$i];
                $array[$i] = $array[$i + 1];
                $array[$i + 1] = $temp;
                $yaEuPermut = true;
            }
        }
    }
    return $array;
}

print_r(triParInsertion($array));
print_r(triParBulle($array));

// Fonction triParBulle ne marche pas, elle ne resitute pas toutes les valeurs du tableau

?>
