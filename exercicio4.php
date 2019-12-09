<?php  
    echo "<h1>Fatorial</h1>";
    echo "<hr>";

    $valor = $_GET["valor"];
    echo "<br>";

    for($i = 1; $i <= $valor; $i++){
        $fat = array_product(range($valor, $i));
        echo($fat)."<br>";
    break;
    }
?>