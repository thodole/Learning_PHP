<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Inserção - Folha de pagamentos</title>
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
		<p>A seguir, insira os dados dos professores a serem incluídos em folha:</p>
		<form method="POST" action="edr_ex14.2.php">
			<table border="2">
			 	<thead>
			    	<tr style="text-align: left;">
			    		<th>Professor(a)</th>
			    		<th>Classe</th>
			    		<th>Horas trabalhadas</th>
			    	</tr>
			  	</thead>
				<?php
					for ($i=1; $i<=$_POST["qtd"]; $i++) {	
						echo "
							<tbody>
						    	<tr>
						      		<td>Professor(a) $i</td>
						      		<td>
						      			<input type=\"radio\" id=\"classea\" name=\"classe$i\" value=\"A\">
						      			<label for=\"classea\">Classe A</label>
						      			<input type=\"radio\" id=\"classeb\" name=\"classe$i\" value=\"B\">
						      			<label for=\"classeb\">Classe B</label>
						      			<input type=\"radio\" id=\"classec\" name=\"classe$i\" value=\"C\">
						      			<label for=\"classec\">Classe C</label>
						      		</td>
						      		<td>
						      			<input type=\"number\" step=\".5\" name=\"horas$i\" min=\".5\" placeholder=\"Ex.: 42.5 horas\">
						      		</td>
						    	</tr>
						  	</tbody>
						";
					}
				?>			  	
			</table><br><br>
		<input hidden type="number" name="qtd" value="<?php echo $_POST["qtd"] ?>">
		<input type="submit" value="Solicitar folha de pagamentos">
		</form>
	</body>
</html>