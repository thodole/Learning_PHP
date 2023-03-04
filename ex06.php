<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado (operações diversas)</title>
</head>
<body>
    <h2>Resultado (diversas operações)</h2>
    <?php
        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $numero3=$_POST["num3"];
        $result=($numero1+$numero2)*$numero3;
        
        echo"<fieldset>A soma dos dois primeiros valores, multiplicada pelo terceiro valor é: $result</fieldset>";
    ?>
</body>
</html>