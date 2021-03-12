<?php

    $array = array();
    $range = readline("Veuillez préciser le nombre de valeurs à fournir au tableau : ");

    for ($i = 0; $i < $range; $i++){

        $array[$i] = [$i];
    }

    foreach($array as &$value){

        $value = readline("Veuillez entrer une valeur : ");
    }

	$j = count($array) - 1;

	for($i = 0; $i < $j; $i++ ){
		$temp = $array[$i];
		$array[$i] = $array[$j];
		$array[$j] = $temp;
		$j--;
	}

    print_r($array);

?>