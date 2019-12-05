<?php  
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $numeros = array();
    //$tamanho = count($numeros);

    echo "<h1>Numeros</h1>";
    echo "<hr>";

    for($i = 0; $i <= ($num2 - $num1); $i++){
        $numeros[$i] = $i + $num1;
    }

    for($i = 0; $i <= ($num2 - $num1); $i++){
        echo "<p>" . $numeros[$i] . "</p>";
    }
?>