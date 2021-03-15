<?php

    $voyelles = "aeiouyAEIOUY";
    $phrase = readline ("Veuillez entrer votre phrase : ");
    $counter = 0;

    for ($i = 0; $i < strlen($phrase); $i++){
        for ($j = 0; $j < strlen($voyelles); $j++){
            if ($phrase[$i] == $voyelles[$j]){
                $counter++;
            }
        }
    }

    echo("Il y a " .$counter. " voyelles dans votre phrase.");

?>