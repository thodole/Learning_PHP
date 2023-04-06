<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="UTF-8">
	    <title>Peso Ideal de uma Mulher</title>
	</head>
	<body>
	    <h1>Peso Ideal de uma Mulher</h1>
	    <?php
	        $altura=$_POST["altura"];
	        $pesoIdeal=(62.1*$altura)-44;
	        echo "O peso ideal para mulher, na altura informada é: $pesoIdeal kg.";
	    ?>
	</body>
</html>