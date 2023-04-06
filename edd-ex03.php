<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Dobro do número é 48?</title>
</head>
<body style="font: normal 15pt Arial;">
	<h1>Verificação:</h1>
	<?php
		$num=$_POST["num"];
		$dobro=$num*2;
		if ($dobro == 48) {
			echo "<p>O dobro do número <strong>$num</strong> é igual a 48.</p>";
		} else {
			echo "<p>O dobro do número <strong>$num</strong> não é igual 48.</p>";
		}
	?>
</body>
</html>