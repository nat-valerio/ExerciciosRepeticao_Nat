<?php  
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $numeros = array();
    
    echo "<h1>Numeros</h1>";
    echo "<hr>";

    for($i = 0; $i <= ($num2 - $num1); $i++){
        echo $numeros[$i] = $i + $num1;
        echo "<p>" . $numeros[$i] . "</p>";
    
    }

?>