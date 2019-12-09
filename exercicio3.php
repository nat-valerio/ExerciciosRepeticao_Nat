<?php  
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $numeros = array($num1, $num2);

    echo "<h1>Números</h1>";
    echo "<hr>";

    for($i = 0; $i <= ($num2 - $num1); $i++){
        echo array_sum($numeros)."\n";
    break;
    }

?>