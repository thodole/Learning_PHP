<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Prestação atrasada</title>
	</head>
	<body>
		<h2>Prestação em atraso:</h2>
		<fieldset>
			<p>O valor da prestação atrasada, com os dados informados, é:</p>
			<?php
				$val=$_POST["valor"];
				$tax=$_POST["taxa"];
				$tmp=$_POST["tempo"];
				$presta=$val+($val*$tax/100)*$tmp;
				echo number_format($presta, 2);
			?>
		</fieldset>
	</body>
</html>