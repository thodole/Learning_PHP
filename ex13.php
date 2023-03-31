<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Prestação atrasada</title>
	</head>
	<body>
		<h2>Prestação em atraso:</h2>
		<fieldset>
			<p>O soldo deste funcionário, neste mês será:</p>
			<?php
				$sal=$_POST["bruto"];
				$tdv=$_POST["totalVendas"];
				$soldo=$sal+($tdv*15/100);
				echo number_format($soldo, 2);
			?>
		</fieldset>
	</body>
</html>