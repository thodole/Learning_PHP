<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cruzamento de dados</title>
	</head>
	<body>
		<h1>Censo - Região X</h1>
		<p>Cruzamento dos dados cadastrados:</p>
		<p>Maior idade dos habitantes:
			<?php
				echo $_POST["idademaior"];
			?>
		</p>
		<p>A percentagem de indivíduos cuja idade está entre 18 e 35 anos (inclusive) e que tenham olhos verdes e cabelos louros:
			<?php
				echo $_POST["galegos"];
			?>
		</p>
	</body>
</html>