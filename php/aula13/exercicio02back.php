<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada Back</title>
</head>
<body>
    <?php
        $num = $_GET["num"];
        $resultado = 0;
        for($i=0;$i<=10;$i++)
        {
            $resultado = $num * $i;
            echo "$num X $i = $resultado<br>";
        }
    ?>
    <br>
    <a href="exercicio02.php">Voltar</a>
</body>
</html>