<?php

    $array = array(5, 7, 10, 3, 2, 7, 9);

    for ($i = 0; $i < count($array); $i++){

        $position = $i + 1;
        echo("Position numéro " .$position. " --> " .$array[$i]. " \n");
    }

    $i = readline("Veuillez préciser quelle est la position de la valeur que vous souhaitez supprimer : ");
    $i = $i - 1;
    unset($array[$i]);
    $array = array_values(array_filter($array));

    echo("Nouveau tableau : \n");

    for ($i = 0; $i < count($array); $i++){

        $position = $i + 1;
        echo("Position numéro " .$position. " --> " .$array[$i]. " \n");
    }

?>