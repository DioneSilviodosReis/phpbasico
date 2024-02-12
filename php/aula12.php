<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador Do While</title>
</head>
<body>
    <?php
        $resposta = 1;
        $fatorial = $_GET["num"];
        $count = 1;
        do{
            $resposta = $resposta * $count;
            $count++;
        }while($count <= $fatorial);
        echo "$resposta";
    ?>
    <a href="aula12.html">Voltar</a>
</body>
</html>