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
			$menor=$_POST["num1"];
			for ($i=2; $i<11; $i++) {
				if ($_POST["num$i"] < $menor) {
					$menor = $_POST["num$i"];
				}
			}
		?>
		<p>O menor número dentre os valores informados é:
			<?php
				echo "$menor";
			?>
		</p>
	</body>
</html>