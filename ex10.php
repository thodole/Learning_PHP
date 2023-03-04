<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário reajustado</title>
</head>
<body>
    <h2>Valor do salário Reajustado:</h2>
    <?php
        $salario=$_POST["salario"];
        $reajustado=$salario+($salario*0.1);
        echo"<fieldset>Valor do salário sem reajuste: $salario<br><br>Salário com reajuste de 10%: $reajustado</fieldset>";
    ?>
</body>
</html>