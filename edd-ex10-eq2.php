<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Equação do Segundo Grau</title>
	</head>
	<body>
	    <h1>Equação do Segundo Grau</h1>
	    <?php
	        $a=$_POST["a"];
	        $b=$_POST["b"];
	        $c=$_POST["c"];
	        $delta=$b**2-4*$a*$c;
	        echo "<p>Dados os valores: a=$a, b=$b e c=$c, o valor de delta é: $delta.</p>";
	        if ($a != 0 && $b != 0 && $c != 0) { // Equação do 2º grau completa.
	            if ($delta >= 0) { // Caso delta tenha valor neutro ou positivo.
	                $x1=(-$b+($delta**(1/2)))/(2*$a);
	                $x2=(-$b-($delta**(1/2)))/(2*$a);
	                echo "<p>As raízes da equação são respectivamente $x1 e $x2.</p>";
	            } else { // Caso delta tenha valor negativo.
	                echo "<p>Se delta tiver valor negativo, não é possível calcular as raízes da equação de 2º grau.</p>";
	            }
	        } else { // Caso de equação do 2º grau incompleta.
	            if ($a == 0 && $b == 0 && $c == 0) { // a, b, c == 0
	                echo "Se os valores de a, b e c forem 0, não é possível determinar uma raíz para a equação.";
	            } elseif (($b == 0 && $c == 0) || ($a == 0 && $c == 0)) { // b, c == 0 ou a, c == 0
	                echo "Sendo b e c ou a e c iguais a 0, x também terá valor 0.";
	            } elseif ($a != 0 && $b != 0) { // c == 0
	                $x1=0;
	                $x2=(-$b)/$a;
	                echo "Se c for igual a 0, as raízes da equação serão respectivamente $x1 e $x2.";
	            } elseif ($a != 0 && $c != 0) { // Caso b seja igual a 0
	                $x1=((-$c)/$a)**(1/2);
	                $x2=-((-$c)/$a)**(1/2);
	                if ($delta < 0) { // Raíz quadrada de números negativos
	                    echo "Os valores possíveis resultaram em um raíz quadrada de números negativos, portanto, não é possível determinar a raíz.";
	                } else {
	                    echo "Sendo b igual a 0, as raízes da equação são respectivamente $x1 e $x2.";
	                }
	            } elseif ($b != 0 && $c != 0) { // a == 0
	                $x=(-$c)/$b;
	                echo "Sendo a igual a 0, o valor da raíz possível é $x.";
	            } else { // a, b == 0
	                echo "Sendo a e b igual a 0, a expressão se torna inválida, pois $c != 0.";
	            }
	        }
	    ?>
	</body>
</html>