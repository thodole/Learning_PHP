<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Menor número informado</title>
		<style>
			p input.num {
				width: 60px;
			}
			p ~ input {
				height: 25px;
			}
		</style>
	</head>
	<body>
		<h2>A seguir, informe 10 números diferentes:</h2>
		<form action="edr_ex08.2.php" method="POST">
			<?php
				for ($i=1; $i < 11; $i++) {
					$j=$i<10?"0$i":$i;
					echo "<p>Informe o $j", "º número: <input class=\"num\" type=\"number\" name=\"num$i\"></p><hr>";
				}
			?>
			<input type="submit" value="Enviar" style="margin-top: 10px; margin-bottom: 10px;">
		</form>
	</body>
</html>