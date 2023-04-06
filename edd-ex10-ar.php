<!DOCTYPE html>
<html lang="pt-br">
	<head>
	    <meta charset="UTF-8">
	    <title>Área Retângulo / Tipo Triângulo</title>
	</head>
	<body>
	    <?php
	        $escolha=$_POST["escolha"];
	        if ($escolha == "ret") {
	            echo "<h1>Área Retângulo</h1>";
	            $b=$_POST["b"];
	            $h=$_POST["h"];
	            $area=$b*$h;
	            if ($area != 0) {
	                echo "A área do retângulo é equivalente a $area m<sup>2</sup>.";
	            } else {
	                echo "Não foi possível definir a área do retangulo pois um dos valores informados foi 0.";
	            }
	        } elseif ($escolha == "tri") {
	            echo "<h1>Tipo Triângulo</h1>";
	            $a=$_POST["a"];
	            $b=$_POST["b"];
	            $c=$_POST["c"];
	            if ($a<$b+$c && $b<$a+$c && $c<$b+$a) {
	                if ($a == $b && $a == $c) { // todos os lados iguais
	                    echo "Tipo de triângulo: Equilátero";
	                } elseif ($a != $b && $a != $c && $b != $c) { // todos os lados diferentes
	                    echo "Tipo de triângulo: Escaleno";
	                } else {
	                    echo "Tipo de triângulo: Isósceles";
	                }
	            } else {
	                echo "As medidas não formam um triângulo.";
	            }
	        }
	    ?>
	</body>
</html>