<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado (soma)</title>
</head>
<body>
    <h2>Resultado (soma)</h2>
    <?php
        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $soma=$numero1+$numero2;
        echo"<fieldset>A soma dos dois números informados é: $soma</fieldset>";
    ?>
</body>
</html>