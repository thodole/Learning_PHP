<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Checa números</title>
	</head>
	<body>
		<h1>Checagem de números:</h1>
		<p>Digite um valor e clique em enviar e repita esse processo várias vezes. Este programa guardará todos os valores informados para fins de comparação. Este programa se encerrará quando você digitar e enviar o número zero.</p>
		<?php
			$menor=$_POST["menor"];
			$maior=$_POST["maior"];
			if ($_POST["num"] > $maior) {
				$maior=$_POST["num"];
			}
			if ($_POST["num"] < $menor) {
				$menor=$_POST["num"];
			}
		?>
		<form method="POST" action="<?php
			if ($_POST["num"]==0) {
				echo "edr_ex09.2.php";
			} else {
				echo "edr_ex09.1.php";
			}
		?>">
			Number: <input type="number" name="num">
			<input hidden type="number" name="menor" value="<?php echo "$menor"; ?>">
			<input hidden type="number" name="maior" value="<?php echo "$maior"; ?>">
			<input type="submit" value="Enviar">
		</Form>
		<?php
			if ($_POST["num"] == 0) {
				echo "<p>Você digitou o número zero e o programa será encerrado.</p>
					  <p>Clique novamente em <strong>Enviar</strong> para saber quais foram o menor e o maior número informados.</p>";
			}
		?>
	</body>
</html>