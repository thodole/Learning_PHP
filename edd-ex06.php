<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>1° maior, menor ou igual ao 2°?</title>
	</head>
	<body style="font: normal 15pt Arial;">
		<h1>Verificação:</h1>
		<?php
			$num1=$_POST["num1"];
			$num2=$_POST["num2"];
			if ($num1 > $num2) {
				echo "<p>O primeiro número é maior que o segundo.</p>";
			} elseif ($num1 < $num2) {
				echo "<p>O primeiro número é menor que o segundo.</p>";
			} else {
				echo "<p>O primeiro número é igual ao segundo.</p>";
			}
		?>
	</body>
</html>