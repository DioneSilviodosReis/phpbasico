<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    
    <div>
        <form action="exercicio02back.php" method="get">
            <label for="num">Selecione a tabuada</label>
            <select name="num" id="num">
                <?php
                    for($i=0;$i<=10;$i++)
                    {
                        echo "<option value='$i'>$i</option>";
                    }
                ?>
            <input type="submit" value="Calcular">
            </select>
        </form>
        
    </div>
    
</body>
</html>