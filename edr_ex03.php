<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contador</title>
	</head>
	<body>
		<?php
			echo "<h3>Valores ímpares entre 2 e 50 (inclusive)</h3>";
			for($i=2;$i<51;$i++)
			{
				if ($i%2==1)
				{
					echo "$i<br>";
				}
			}
		?>
	</body>
</html>