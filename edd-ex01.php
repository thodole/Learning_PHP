<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Dobro menor que 35?</title>
	</head>
	<body style="font: normal 15pt Arial;">
		<h1>Verificação</h1>
		<?php
			$num=$_POST["num"];
			$dobro=$num*2;
			if ($dobro < 35) {
				echo "<p>O dobro do número informado (<strong>$num</strong>) é menor que 35.</p>";
			} else {
				echo "<p>O dobro do número informado (<strong>$num</strong>) não é menor que 35.</p>";
			}
		?>
	</body>
</html>