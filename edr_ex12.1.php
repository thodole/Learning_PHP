<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Calcular notas de alunos</title>
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
		<h1>Inserção de dados</h1>
		<p>A seguir, insira os dados dos alunos:</p>
		<form method="POST" action="edr_ex12.2.php">
			<?php
				for ($i=1; $i<=$_POST["qtd"]; $i++) {	
					$align="float: left;";
					if ($i % 2 == 0) {
						$align="float: center;";
					}
					echo "
					<div style=\"$align\">
						<table border=\"2\">
						 	<thead>
						    	<tr><th colspan=\"2\">Aluno $i </th></tr>
						    	<tr style=\"text-align: left;\"><th>Sexo</th><th>Nota</th></tr>
						  	</thead>
						  	<tbody>
						    	<tr>
						      		<td>
						      			<input type=\"radio\" id=\"sexom\" name=\"sexo$i\" value=\"1\">
						      			<label for=\"sexom\">Mas</label>
						      			<input type=\"radio\" id=\"sexof\" name=\"sexo$i\" value=\"2\">
						      			<label for=\"sexof\">Fem</label>
						      		</td>
						      		<td>
						      			<input type=\"number\" step=\"0.01\" name=\"nota$i\" placeholder=\"Nota. Ex.: 9.75\">
						      		</td>
						    	</tr>
						  	</tbody>
						</table><br><br>
					</div>
					";
				}
			?>	
		<input hidden type="number" name="qtd" value="<?php echo $_POST["qtd"] ?>">
		<input type="submit" value="Enviar dados">
		</form>
	</body>
</html>