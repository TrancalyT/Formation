<?php

    $phrase = readline ("Veuillez saisir votre phrase à crypté : ");
    $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    for ($i = 0; $i < strlen($phrase); $i++){
        for ($j = 0; $j < strlen($alphabet); $j++){
            if ($phrase[$i] == $alphabet[$j]){
                $indexAlphabet = $j;
            }
        }
        
        if ($phrase[$i] == "z"){
            $phrase[$i] = "a";
        } else if ($phrase[$i] == "Z"){
            $phrase[$i] = "A";
        } else if ($phrase[$i] == " "){
            $phrase[$i] = " ";
        } else {
            $phrase[$i] = $alphabet[$indexAlphabet + 1];
        }
    }

    echo($phrase);

?>