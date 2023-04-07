<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Coleta de dados</title>
		<style>
			th {
				width: 20%;
				text-align: left;
			}
			td {
				width: 50%;
			}
		</style>
	</head>
	<body>
		<h1>Censo - Região X</h1>
		<p>Informe os seguintes dados referentes a cada habitante:</p>
		<form method="POST", action="
			<?php
				if ($_POST["idade"]!=-1) {
					echo "edr_ex11.1.php";
				} else {
					echo "edr_ex11.2.php";
				}
			?>">
			<table border="1">
				<tr>
					<th>Sexo</th>
					<td>
						<input type="radio" id="sexomas" name="sexo">
						<label for="sexomas">Masculino&nbsp;</label>
						<input type="radio" id="sexofem" name="sexo">
						<label for="sexofem">Feminino&nbsp;</label>
					</td>
				</tr>
				<tr>
					<th>Cor dos olhos</th>
					<td>
						<input type="radio" id="olhoa" name="olhos" value="1">
						<label for="olhoa">Azuis&nbsp;</label>
						<input type="radio" id="olhov" name="olhos" value="2">
						<label for="olhov">Verdes&nbsp;</label>
						<input type="radio" id="olhoc" name="olhos" value="3">
						<label for="olhoc">Castanhos&nbsp;</label>
					</td>
				</tr>
				<tr>
					<th>Cor dos cabelos</th>
					<td>
						<input type="radio" id="cabelol" name="cabelos" value="1">
						<label for="cabelol">Louros&nbsp;</label>
						<input type="radio" id="cabeloc" name="cabelos" value="2">
						<label for="cabeloc">Castanhos&nbsp;</label>
						<input type="radio" id="cabelop" name="cabelos" value="3">
						<label for="cabelop">Pretos&nbsp;</label>
					</td>
				</tr>
				<tr>
					<th>Idade</th>
					<td>
						<input type="number" min="-1" max="130" name="idade">
					</td>
				</tr>
			</table>
			
			<input hidden type="number" name="counter"
				value="<?php echo $_POST["counter"]+1; ?>">
			
			<input hidden type="number" name="galegos"
				value="<?php
					if ($_POST["idade"]>17 && $_POST["idade"]<36 && $_POST["olhos"]==2 && $_POST["cabelos"]==1) {
								echo $_POST["galegos"]+1;
							} else {
								echo $_POST["galegos"];
							}
					   ?>">
			
			<input hidden type="number" name="idademaior"
				value="<?php
							if ($_POST["idade"]>$_POST["idademaior"]) {
								echo $_POST["idade"];
							} else {
								echo $_POST["idademaior"];
							}
					   ?>">
			
			<p><input type="submit" value="Adicionar"></p>

			<?php
				$contador_de_habitantes=$_POST["counter"];
				$contador_de_galegos=$_POST["galegos"];

				if ($_POST["idade"]==-1) {
					$contador_de_habitantes -= 1;
					echo "<p>ATENÇÃO!</p>Você informou <strong>-1</strong> no campo <strong>Idade</strong>. A coleta de dados foi encerrada.<br>Clique em <strong>Adicionar</strong> novamente, para ver as demais informações.";
				} else {
					echo "<p>Para finalizar a coleta de dados, informe <strong>-1</strong> no campo <strong>Idade</strong></p>";
				}
				echo "<p>Habitantes cadastrados: $contador_de_habitantes.</p>";
				echo "<p>Galegos já cadastrados: $contador_de_galegos.</p>";
			?>
		</form>
	</body>
</html>