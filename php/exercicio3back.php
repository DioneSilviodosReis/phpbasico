<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = $_GET["numero"];
        $dem = 0;
        $resposta = 0;
        do{
            $resposta = $num * $dem;
            echo "$num X $dem = $resposta<br>";
            $dem++;
        }while($dem <= 10);
    ?>
    <br>
    <a href="exercicio3.php">Voltar</a>
</body>
</html>