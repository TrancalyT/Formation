<?php

    $phrase = readline("Veuillez entrer votre phrase : ");

    $counter = 1;

    for ($i = 0; $i < strlen($phrase); $i++){

        if ($phrase[$i] == " "){
            $counter++;
        }
    }

    echo ("Il y a " .$counter. " mot(s) dans votre phrase.");

?>