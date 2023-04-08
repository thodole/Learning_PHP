<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cruzamento de dados</title>
	</head>
	<body>
		<h1>Cruzamento dos dados</h1>
		<p>
			Pessoas do sexo feminino com idade acima de 17 anos: 
			<?php
				for ($i=1; $i <= $_POST["qtd"]; $i++) { 
					if ($_POST["sexo$i"] == 2 && $_POST["idade$i"]>17) {
						echo "<br>", $_POST["nome$i"];
					}
				}
			?>
		</p>
	</body>
</html>