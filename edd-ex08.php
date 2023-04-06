<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Calculadora de peso ideal</title>
	</head>
	<body style="font: normal 15pt Arial;">
		<h1>Peso ideal:</h1>
		<?php
			$sexo=$_POST["sexo"];
			$altura=$_POST["altura"];
			if ($sexo == "masc") {
				$pesoIdeal=(72*$altura)-58;
				$gen="homem";
			} else {
				$pesoIdeal=(62.1*$altura)-44;
				$gen="mulher";
			}
			echo "<p>O peso ideal para $gen é $pesoIdeal kg.</p>";
		?>
	</body>
</html>