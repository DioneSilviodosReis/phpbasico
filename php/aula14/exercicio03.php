<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedimento</title>
</head>
<body>
    <?php
        function soma ()
        {   
            $num = func_get_args();
            $cont = func_num_args();
            $resultado = 0;

            for($i=0;$i<$cont;$i++)
            {
            $resultado += $num[$i];
            }
            return $resultado;
        }

        $soma = soma(10, 4, 6, 10, 15, 15, 20, 30);
        echo "$soma";
    ?>  
</body>
</html>