<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Eleições Online</title>
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
		<h1>Eleições Online</h1>
		<form method="POST" action="
			<?php
				if ($_POST["cont"]>$_POST["qtd"]) {
					echo "edr_ex15.2.php";
				} else {
					echo "edr_ex15.1.php";
				}
			?>">
			
			<input hidden type="number" name="qtd" value="
				<?php echo $_POST["qtd"] ?>">
			<input hidden type="number" name="cont" value="
				<?php echo $_POST["cont"]+1 ?>">
			
			<?php
				for ($i=0; $i < 6 ; $i++) { 
					if ($_POST["voto"]==$i) {
						echo "
							<input hidden type=\"number\" name=\"can$i\" value=\"
							",$_POST["can$i"]+1,"\"
						";
					} else {
						echo "
							<input hidden type=\"number\" name=\"can$i\" value=\"
							",$_POST["can$i"],"\"
						";
					}
				}
			?>
			
			<table border="2">
			 	<thead>
			    	<tr>
		    			<th colspan="2"><?php echo $_POST["cont"] ?>º Voto</th>
		    		</tr>
		  		</thead>
		  		<tbody>
		    		<tr>
		      			<td>
		      				<input type="number" name="voto" min="0" max="5" placeholder="Digite somente o número" required>
			      		</td>
			      		<td>
			      			<input type="submit" value="Confirmar">
		    	  		</td>
		    		</tr>
		  		</tbody>
			</table><br><br>
			<?php
				if ($_POST["cont"]>$_POST["qtd"]) {
					echo "VOTAÇÃO ENCERRADA! <p>Clique em <strong>Confirmar</strong> para ver o resultado da eleição.</p>";
				}
			?>
		</form>
				<p>Faltam <?php echo $_POST["qtd"]-$_POST["cont"]; ?> votos.</p>
				<p> <?php echo $_POST["cont"]; ?> </p>

		<h2>Tabela de candidatos</h2>
		<table border="2">
			<thead>
				<th>Número do voto</th><th>Candidato</th>
			</thead>
			<tbody style="text-align: center;">
				<tr><td>Voto = 0</td><td>Nulo</td></tr>
				<tr><td>Voto = 1</td><td>Candidato A</td></tr>
				<tr><td>Voto = 2</td><td>Candidato B</td></tr>
				<tr><td>Voto = 3</td><td>Candidato C</td></tr>
				<tr><td>Voto = 4</td><td>Candidato D</td></tr>
				<tr><td>Voto = 5</td><td>Candidato E</td></tr>
			</tbody>
		</table>
	</body>
</html>