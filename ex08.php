<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade futura</title>
</head>
<body>
    <h2>Resultado (idade futura)</h2>
    <?php
        $nome=$_POST["nome"];
        $idade=$_POST["idade"];
        echo"<fieldset>Daqui a 30 anos, a idade de $nome será ", $idade+30, " anos.</fieldset>";
    ?>
</body>
</html>