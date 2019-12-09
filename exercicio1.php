<?php
    echo "<h1>Tabuada</h1>";

    $num1 = $_GET["num"];

    for($x=1; $x<=10; $x++){
        echo "$num1 x $x = ";
        echo $num1 * $x;
        echo "<br>";
    }
    echo "<hr>";