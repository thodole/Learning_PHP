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
			A média dos alunos de sexo masculino é: 
			<?php
				$machos=0;
				$somanotas=0;
				for ($i=1; $i <= $_POST["qtd"]; $i++) { 
					if ($_POST["sexo$i"] == 1) {
						$machos++;
						$somanotas += $_POST["nota$i"];
					}
				}
				echo $somanotas / $machos;
			?>
		</p>
	</body>
</html>