<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Área do círculo</title>
	</head>
	<body>
		<h2>Área do círculo:</h2>
		<fieldset>
			<p>A área do círculo cujo raio foi informado é:</p>
			<?php
				$PI=3.1415;
				$raio=$_POST["raio"];
				$area=$PI*($raio*$raio);
				echo "$area";
			?>
		</fieldset>
	</body>
</html>