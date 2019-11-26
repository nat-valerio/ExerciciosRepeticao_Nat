<?php  
    /*$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

    for($i=count($numeros)-1; $i>=0; $i--){
        echo "Numeros: $numeros[$i] <br>";
    }
    echo "<hr>";

    do{
        echo "Número: $x <br>";
        $x++;
    }while($x<=10);
            
    if($x > $num1 | $x < $num2){
    echo "Números: $x,";
    }*/

    echo "<hr>";
    echo "<h1>Numeros</h1>";

    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    $numeros = array($num1, $num2);
    
    for($i=count($numeros)-1; $i>=0; $i--){
        echo "Numeros: $numeros[$i] <br>";
    }
    echo "<hr>";

