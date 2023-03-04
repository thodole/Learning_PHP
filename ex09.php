<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado média Ponderada</title>
</head>
<body>
    
    <?php
        $nome=$_POST["nome"];
        echo"<h2>Resultado (média ponderada do aluno: $nome)</h2>
        <p>Média calculada pelo seguinte critério: A1: peso 1, A2: peso 2 e A3: peso 3.</p>";
        $a1=$_POST["a1"];
        $a2=$_POST["a2"];
        $a3=$_POST["a3"];
        $media_p=($a1+($a2*2)+($a3*3))/6;
        echo"<fieldset>A média ponderada de $nome é: ", number_format($media_p, 2), "<br><br>Clique em voltar para calcular a média de outro aluno.</fieldset>";
    ?>
    <p><a href="ex09.html"><input type="button" value="Voltar"></a></p>
</body>
</html>