<!-- EXO 6.8 -->

<?php

    $userArray = array();
    $range = readline("Veuillez préciser le nombre de valeur à fournir au tableau : ");

    for ($i = 0; $i < $range; $i++){
        
        $userArray[$i] = $i;
    }

    $negativValue = 0;
    $positivValue = 0;

    foreach ($userArray as &$value){

        $value = readline ("Veuillez entrer une valeur : ");

        if ($value < 0){
            $negativValue = $negativValue + 1;
        } else if ($value >= 0){
            $positivValue = $positivValue + 1;
        }
    }

    echo ("Il y a " .$positivValue. " valeurs positives dans le tableau.");
    echo ("Il y a " .$negativValue. " valeurs négatives dans le tableau.");

?>

<!-- EXO 6.9 -->

<?php

    function addArray($array){
        
        $sommeArray = 0;

        foreach ($array as &$value1){
            
            $sommeArray = $sommeArray + $value1;
        }

        return $sommeArray;
    }

    $testArray = array(2, 5, 7, 8, -3);
    echo (addArray($testArray));

?>

<!-- EXO 6.10 -->

<?php

    $array1 = array(4, 8, 7, 9, 1, 5, 4, 6);
    $array2 = array(7, 6, 5, 2, 1, 3, 7, 4);
    
    function add2Array($array1, $array2){

        $addArray = array();

        for ($i = 0; $i < count($array1); $i++){
        
            $addArray[$i] = $array1[$i] + $array2[$i];
        }

        return $addArray;
    }
    
    $resultArray = add2array($array1, $array2);

    for ($i = 0 ; $i < count($resultArray) ; $i++){
        
        echo($resultArray[$i] . " ");
    }

?>

<!-- EXO 6.11 -->

<?php

    $array3 = array(4, 8, 7, 12);
    $array4 = array(3, 6);
    $schtroumpf = 0;

    for ($i = 0; $i < count($array4); $i++){
        for ($k = 0; $k < count($array3); $k++){
            $schtroumpf = $schtroumpf + ($array4[$i] * $array3[$k]);
        }
    }

    echo($schtroumpf);

?>

<!-- EXO 6.12 -->

<?php

$userArray2 = array();
$range2 = readline("Veuillez préciser le nombre de valeur à fournir au tableau : ");

for ($i = 0; $i < $range2; $i++){
    
    $userArray2[$i] = $i;
}

foreach ($userArray2 as &$value2){

    $value2 = readline ("Veuillez entrer une valeur : ");
    $value2 = $value2 + 1;
}

for ($i = 0; $i < count($userArray2); $i++){
    
    echo($userArray2[$i]. " ");
}

?>

<!-- EXO 6.13 -->

<?php

$userArray3 = array();
$range3 = readline("Veuillez préciser le nombre de valeur à fournir au tableau : ");

for ($i = 0; $i < $range3; $i++){
    
    $userArray3[$i] = $i;
}

foreach ($userArray3 as $indexKey => &$value3){

    $value3 = readline ("Veuillez entrer une valeur : ");
    if ($indexKey == 0){
        $valueMax = $value3;
        $indexValueMax = $indexKey;
    }
    if ($valueMax < $value3){
        $valueMax = $value3;
        $indexValueMax = $indexKey;
    }
}

echo("La plus grande valeur du tableau est " .$valueMax. " et sa position dans le tableau est à l'index numéro " .$indexValueMax. ".");

?>

<!-- EXO 6.14 -->

<?php

    $userArray4 = array();
    $range4 = readline("Veuillez préciser le nombre de notes à fournir au tableau : ");

    for ($i = 0; $i < $range4; $i++){
        
        $userArray4[$i] = $i;
    }

    $sommeClasse = 0;

    foreach ($userArray4 as &$value4){

        $value4 = readline ("Veuillez entrer la note : ");
        $sommeClasse = $sommeClasse + $value4;
    }

    $moyenne = $sommeClasse / $range4;
    $counterStudent = 0;

    foreach ($userArray4 as $value4){

        if ($value4 > $moyenne){
            $counterStudent++;
        }
    }

    echo("Il y a " .$counterStudent. " élève(s) qui est/sont au dessus de la moyenne.");

?>