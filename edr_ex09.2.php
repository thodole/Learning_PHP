<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Checa números</title>
	</head>
	<body>
		<h1>Checagem de números:</h1>
		<?php
			$menor=$_POST["menor"];
			$maior=$_POST["maior"];
			echo "<p>O menor número digitado foi: $menor.
				  <p>O maior número digitado foi: $maior.";
		?>
		<p><a href="edr_ex09.html">Voltar</a></p>
	</body>
</html>