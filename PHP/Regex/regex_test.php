<?php

// $testNum = readline("Veuillez saisir un numéro client : ");

// if (preg_match("#^F[1-9]{9}$#", $testNum)){
//     echo "Numéro valide \n";
// } else {
//     echo "Numéro invalide \n";
// }

// $testTel = readline("Veuillez saisir un numéro de téléphone : ");

// if (preg_match("#^0[1-9]{1}([-_.\s]?[0-9]{2}){4}$#", $testTel)){
//     echo "Numéro de télépohne valide \n";
// } else {
//     echo "Numéro de téléphone invalide \n";
// }


// $testMail = readline("Veuillez saisir une adresse mail : ");

// if (preg_match("#^[a-z]{1,}@{1}[a-z]{1,}\.com$|fr$#i", $testMail)){
//     echo "Adresse mail valide \n";
// } else {
//     echo "Adresse mail invalide \n";
// }

$testSecu = readline("Veuillez saisir votre numéro de SS : ");

if (preg_match("#^[1|2][\s][0-9]{2}[\s]([0][0-9]|[1][0-2])[\s][0-9]{2}([\s][0-9]{3}){2}[\s][0-9]{2}$#", $testSecu)){
    echo "Numéro SS valide \n";
} else {
    echo "Numéro SS invalide \n";
}

?>