<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Soma de dez números</title>
		<style>
			p input {
				width: 60px;
			}
			p ~ input {
				height: 25px;
			}
		</style>
	</head>
	<body>
		<?php
			$result=0;
			for ($i=1; $i<11; $i++) {
				$result += $_POST["num$i"];
			}
			$result /= 10;
		?>
		<p style="font: bold 18pt;">A média das idades informadas é:
			<?php
				echo "$result";
			?>
		</p>
	</body>
</html>