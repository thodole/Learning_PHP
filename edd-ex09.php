<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="UTF-8">
	    <title>Classificação de nadador</title>
	</head>
	<body>
		<h1>Classificação do nadador</h1>
	    <?php
	        $idade=$_POST["idade"];
	        if ($idade >= 5 && $idade <= 7) {
	            $classif="Infantil A";
	        } elseif ($idade >= 8 && $idade <= 10) {
	            $classif="Infantil B";
	        } elseif ($idade >= 11 && $idade <= 13) {
	            $classif="Juvenil A";
	        } elseif ($idade >= 14 && $idade <= 17) {
	            $classif="Juvenil B";
	        } elseif ($idade >= 18) {
	            $classif="Sênior";
	        } else {
	            $classif="Idade não entra na classificação.";
	        }
	        echo "Classificação do nadador: $classif";
	    ?>
	</body>
</html>