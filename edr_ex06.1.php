<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Soma de dez números</title>
		<style>
			p input {
				width: 60px;
			}
			p ~ input {
				height: 25px;
			}
		</style>
	</head>
	<body>
		<p style="font: bold 18pt;">A seguir, informe 10 números, para saber a média entre eles:</p>
		<form action="edr_ex06.2.php" method="POST">
			<?php
				for ($i=1; $i <= 10; $i++) {
					$j=$i<10?"0$i":$i;
					echo "<p>Informe o $j","° número: <input type=\"number\" name=\"num$i\"></p>";
				}
			?>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>