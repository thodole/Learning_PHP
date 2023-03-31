<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Entre 30 e 281</title>
	</head>
	<body>
		<?php
			$num=$_POST["num"];
			if($num > 29 && $num < 282)
			{
				echo "O número informado ($num) está entre 30 e 281";
			}
			else
			{
				echo "O número informado ($num) não está entre 30 e 281";
			}
		?>
		<p><a href="edr_ex01.html">Voltar</a>
	</body>
</html>