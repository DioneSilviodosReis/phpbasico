<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedimento</title>
</head>
<body>
    <?php
        function soma ($num1, $num2)
        {
            $resultado = $num1 + $num2;
            return $resultado;
        }

        $soma = soma(10, 4);
        echo "$soma";
    ?>  
</body>
</html>