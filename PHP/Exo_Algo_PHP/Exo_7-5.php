<?php

    $arrayDico = array("Ane", "Bible", "Carré", "Dinde", "Donation", "Feuille", "Jouet", "Limonade", "Melon", "Narvalo", "Pyramide", "Rainette", "Triton", "Velour", "Xylophone", "Zèbre");

    function isIn ($array, $word){

        $toFound = false;
        $startIndex = 0;
        $endIndex = count($array) - 1;

        while (!$toFound && $startIndex <= $endIndex){
            
            $middleIndex = ($startIndex + $endIndex) / 2;
            $middleIndex = intval($middleIndex);
            if($word > $array[$middleIndex]){
                $startIndex = $middleIndex + 1;
            } else if ($word < $array[$middleIndex]){
                $endIndex = $middleIndex - 1;
            } else {
                $toFound = true;
            }
        }
        return $toFound;
    }
    
    $word = readline ("Entrez le mot à rechercher : ");

    if (isIn($arrayDico, $word) == true){
        echo ("Found !");
    } else {
        echo ("Nothing dude !");
    }

?>