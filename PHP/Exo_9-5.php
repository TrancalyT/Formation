<?php

    $phrase = readline("Veuillez entrer votre phrase : ");
    $toDelete = readline("Quelle lettre souhaitez vous supprimer ? : ");
    $toDeleteArray = array($toDelete, strtoupper($toDelete));

    $phrase = str_replace($toDeleteArray, "", $phrase);

    echo ($phrase);

?>