<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Dobro maior que 50?</title>
	</head>
	<body style="font: normal 15pt Arial;">
		<?php
			$num=$_POST["num"];
			$dobro=$num*2;
			echo "<p>Número Informado é: $num</p>";
			if ($dobro > 50) {
				echo "<p>O dobro deste número é maior que 50.</p>";
			}
		?>
	</body>
</html>