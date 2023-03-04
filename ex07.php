<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média do aluno</title>
</head>
<body>
    <h2>Resultado (média do aluno)</h2>
    <?php
        $numero1=$_POST["nota1"];
        $numero2=$_POST["nota2"];
        $numero3=$_POST["nota3"];
        $result=($numero1+$numero2+$numero3)/3;
        
        echo"<fieldset>A média deste aluno é: ", number_format($result, round(2)), "</fieldset>";
    ?>
</body>
</html>