<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercício 6</title>
    <style>
        div{
            text-align: center;
        }
    </style>
</head>
<body>

    <form action="">
        <div>
            <?php
                $valor = $_GET['valor'];

                switch($valor){
                    case "pepino":
                        echo "<img src='img/pepino.jpg'>";
                        break;
                    case "goiaba":
                        echo "<img src='img/goiaba.jpg'>";
                        break;
                    case "batata":
                        echo "<img src='img/charlinho.jpg'>";
                        break;
                    default:
                        echo "<h1>Insira um valor válido: Pepino, goiaba ou batata.</h1><br>";
                        echo "<img src='img/fail.png'>";
                        break;
                }
            ?>
        </div>
    
    </form>
    
</body>
</html>