<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Metade do número é 92?</title>
	</head>
	<h1>Verificação:</h1>
	<body style="font: normal 15pt Arial;">
		<?php
			$num=$_POST["num"];
			$metade=$num/2;
			if ($metade == 92) {
				echo "<p>A metade do número <strong>$num</strong> é igual a 92.</p>";
			} else {
				echo "<p>A metade do número <strong>$num</strong> não é igual a 92.</p>";
			}
		?>
	</body>
</html>