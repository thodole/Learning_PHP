<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Folha de pagamentos</title>
		<style>
			table {
				max-width: 90%;
			}
			th, td {
				width: 50%;
			}
		</style>
	</head>
	<body>
		<h1>Folha de pagamentos</h1>
		<p>Salários dos professores, calculados com base em suas respectivas classes e horas trabalhadas:</p>
		<table border="2">
		 	<thead>
		    	<tr style="text-align: left;">
		    		<th>&nbsp;Professor(a)</th>
		    		<th>&nbsp;Horas trabalhadas</th>
		    	</tr>
		  	</thead>
			<?php
				$valor_hr_aula=0;
				for ($i=1; $i<=$_POST["qtd"]; $i++) {
					if ($_POST["classe$i"] == "A") {
						$valor_hr_aula=10.1;
					} elseif ($_POST["classe$i"] == "B") {
						$valor_hr_aula=12.2;
					} else {
						$valor_hr_aula=15.3;
					}	
					echo "
						<tbody>
					    	<tr>
					      		<td>
					      			&nbsp;Professor(a) $i (Classe ",$_POST["classe$i"],")&nbsp;
					      		</td>
					      		<td>&nbsp;R$ ",$_POST["horas$i"]*$valor_hr_aula,",00</td>
					    	</tr>
					  	</tbody>
					";
				}
			?>			  	
		</table>
	</body>
</html>