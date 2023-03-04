<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado (cálculos diversos)</title>
</head>
<body>
    <h2>Resultado (diversos)</h2>
    <?php
        $numero1=$_POST["num1"];
        $numero2=$_POST["num2"];
        $soma=$numero1+$numero2;
        $diff=$numero1-$numero2;
        $prod=$numero1*$numero2;
        $quoc=$numero1/$numero2;
        echo"<fieldset>A soma entre os dois números informados é: $soma<p>A diferença entre os dois números informados é: $diff<p>O produto entre os dois números informados é: $prod<p>O quociente entre os dois números informados é: $quoc<p></fieldset>";
    ?>
</body>
</html>