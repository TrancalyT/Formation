<?php

$agenda = fopen("AGENDA.txt", "r") or die ("Impossible d'ouvrir le fichier AGENDA");
 
// $counter = 0;

while(!feof($agenda)){

//     for ($i = $counter; $i < $counter + 1; $i++){
//         $j = 0;
//         $ligne[$j] = fgets($agenda);
//         $j++;
//     }
//     $counter = $counter + 1;
// }
    $i = 0;
    $i++;
    $$i = fgets($agenda);
    echo($$i);
}

fclose($agenda);

?>