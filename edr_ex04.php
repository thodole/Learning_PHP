<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contador</title>
	</head>
	<body>
		<?php
			echo "<h3>Valores pares entre 5 e 360 (inclusive)</h3>";
			$j=0;
			for($i=5;$i<361;$i++)
			{
				if ($i%2==0)
				{
					$j++;
				}
			}
			echo "Entre 5 e 360 (inclusive) há $j números pares.";
		?>
	</body>
</html> 