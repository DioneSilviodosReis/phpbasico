<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procedimento</title>
</head>
<body>
    <?php
        function soma (&$numero)
        {   
            $numero += 30;
            return $numero;
        }

        $num = 4;
        $res = soma($num);
        echo "$res<br>";
        echo "$num";
        
    ?>  
</body>
</html>