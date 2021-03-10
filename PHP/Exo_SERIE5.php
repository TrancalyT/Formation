<!-- EXO 5.1 -->

<?php

    function number ($num){
        
        $estCorrect = $num >= 1  && $num <= 3;  
        while (!$estCorrect){
            $num = readline("Entrez à nouveau un nombre (indice ? Il est compris entre 1 et 10) : ");
            $estCorrect = $num >= 1  && $num <= 3; 
        }
    }

    $num = readline("Entrez un nombre : ");

    number($num);

?>


<!-- EXO 5.2 -->

<?php

    function number2 ($num2){

        $estCorrect2 = $num2 >= 10 && $num2 <= 20;   

        while (!$estCorrect2){
            
            if ($num2 > 20){
                echo("Plus petit ! ");
            } 
            else if ($num2 < 10){
                echo("Plus grand ! ");
            }
            
            $num2 = readline("Entrez à nouveau un nombre : ");
            
            $estCorrect2 = $num2 >= 10 && $num2 <= 20;
        }
    }

    $num2 = readline("Entrez un nombre : ");

    number2($num2);

?>

<!-- EXO 5.3 -->

<?php

    function suiteNombre ($number){

        for($i = $number; $i < ($number +10); $i++){
            
            echo($i . " ");
        }
    }

    $number = readline("Veuillez entrer un nombre : ");

    suiteNombre($number);

?>