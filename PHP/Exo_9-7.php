<?php

$phrase = readline ("Veuillez saisir votre phrase à crypté : ");
$decalage = readline ("Veuillez saisir le décalage que vous souhaitez appliqué au cryptage ? : ");
$alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

for ($i = 0; $i < strlen($phrase); $i++){
    for ($j = 0; $j < strlen($alphabet); $j++){
        if ($phrase[$i] == $alphabet[$j]){
            $indexAlphabet = $j;
        }
    }

    $indexPostDecalage = $indexAlphabet + $decalage;
    if($phrase[$i] == " "){
        $phrase[$i] = " ";
    // } else if ($phrase[$i] == "z"){
    //     $phrase[$i] = $alphabet[0 + $indexPostDecalage % strlen($alphabet) - 1];
    // } else if ($phrase[$i] == "Z"){
    //     $phrase[$i] = $alphabet[(strlen($alphabet) / 2) + $indexPostDecalage % strlen($alphabet) - 1];
    } else {
        $phrase[$i] = $alphabet[$indexPostDecalage % strlen($alphabet)];
    }


}

echo($phrase);

?>