<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="exercicio3back.php" method="get">
            <label for="numero">Escolha o numero da tabuada:</label>
            <select name="numero" id="numero">
            <?php
                $num = 1;
                do{

                    echo "<option value='$num'>$num</option>";
                    $num++;

                }while($num <= 10);
            ?>
            </select>
            <input type="submit" value="Calcular">
        
        </form>
    </div>
    
</body>
</html>