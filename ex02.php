<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado (metade)</title>
</head>
<body>
    <h2>Resultado (metade)</h2>
    <?php
        $num=$_POST["numero"];
        $metade=$num/2;
        echo"<fieldset>A metade do número informado é: $metade</fieldset>";
    ?>
</body>
</html>