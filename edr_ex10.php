<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Algoritmo de crescimento</title>
	</head>
	<body>
		<h1>Algoritmo de prospecção de crescimento</h1>
		
		<?php
			$anos=0;
			$idadef=$_POST["idadef"];
			$idadec=$_POST["idadec"];
			$alturaf=$_POST["alturaf"];
			$alturac=$_POST["alturac"];
			while ($alturac <= $alturaf) { 
				if ($_POST["sexof"]==1 && $idadef<16 || $_POST["sexof"]==2 && $idadef<19) {
					$alturaf += $_POST["fcf"];
				}
				if ($_POST["sexoc"]==1 && $idadec<16 || $_POST["sexoc"]==2 && $idadec<19) {
					$alturac += $_POST["fcc"];
				}
				$idadef++;
				$idadec++;
				$anos++;
				if (($_POST["sexof"]==1 && $idadef>15 || $_POST["sexof"]==2 && $idadef>18) && ($_POST["sexoc"]==1 && $idadec>15 || $_POST["sexoc"]==2 && $idadec>18)) {
					break;
				}
			}
			$fulano=$_POST["fulano"];
			$ciclano=$_POST["ciclano"];
			if ($alturac > $alturaf) {
				echo "Tempo necessário para que $ciclano seja maior que $fulano: $anos ano(s).";
			} else {
				echo "Segundo os dados informados, a prospecção é de que $ciclano jamais será maior que $fulano.";
			}
		?>
	</body>
</html>