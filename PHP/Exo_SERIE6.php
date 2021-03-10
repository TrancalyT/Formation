<!-- EXO 6.1 -->

<?php

    $array7 = array(1 => 0 , 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0);

    // echo $array7[1].", " .$array7[2].", " .$array7[3].", " .$array7[4].", " .$array7[5].", " .$array7[6].", " .$array7[7];
    for ($i = 1 ; $i < (count($array7) + 1)  ; $i++){
        
        echo ($array7[$i] . " ");
    }

?>

<!-- EXO 6.2 -->

<?php

$arrayAlphabet = array(1 => "A" , 2 => "E", 3 => "I", 4 => "O", 5 => "U", 6 => "Y");

for ($i = 1 ; $i < (count($arrayAlphabet) + 1)  ; $i++){
        
    echo ($arrayAlphabet[$i] . " ");
}

?>

<!-- EXO 6.3 -->

<?php

$arrayMark = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($arrayMark as &$value){
    
    $mark = readline("Veuillez saisir la note : ");
    $value = $mark;
}

for ($i = 0 ; $i < count($arrayMark)  ; $i++){
        
    echo ($arrayMark[$i] . " ");
}

?>

<!-- EXO 6.4 -->

<?php

$array5 = array(0, 1, 2, 3, 4, 5);

foreach ($array5 as &$value1){

    $newValue = $value1 * $value1;
    $value1 = $newValue;
}

for ($i = 0; $i < count($array5) ; $i++){

    echo ($array5[$i] . " ");
}

?>

<!-- EXO 6.5 -->

<?php

$array6 = array(1, 1, 2, 3, 4, 5);
// $array6 = array(0 => 1);

for ($k = 1; $k < count($array6); $k++){
    $array6[$k] = $array6[$k - 1] + 2;
}

for ($i = 0; $i < count($array6) ; $i++){

    echo ($array6[$i] . " ");
} 

?>

<!-- EXO 6.7 -->

<?php

$arrayMark1 = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

foreach ($arrayMark1 as &$value){
    
    $mark = readline("Veuillez saisir la note : ");
    $value = $mark;
}

for ($i = 0 ; $i < count($arrayMark1)  ; $i++){
    
    echo ($arrayMark1[$i] . " ");
}

function moyenne ($arrayMark1){

    $totalMark = 0;

    for ($i = 0 ; $i < count($arrayMark1)  ; $i++){
    
        $totalMark = $totalMark + $arrayMark1[$i];
    }
    
    $moyenne = $totalMark / count($arrayMark1);
    
    return $moyenne;
}

echo ("La moyenne est de " . moyenne($arrayMark1));

?>