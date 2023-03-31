<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Soma de dez números</title>
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
		<h2>A seguir, informe o nome e a idade de 10 pessoas:</h2>
		<form action="edr_ex07.2.php" method="POST">
			<?php
				for ($i=1; $i <= 10; $i++) {
					$j=$i<10?"0$i":$i;
					echo "<p>Informe o nome da $j", "ª pessoa <input type=\"text\" name=\"nome$i\"></p>",
						 "<p>Informe a idade da $j","ª pessoa: <input class=\"num\" type=\"number\" name=\"num$i\"></p><hr>";
				}
			?>
			<input type="submit" value="Enviar" style="margin-top: 10px; margin-bottom: 10px;">
		</form>
	</body>
</html>