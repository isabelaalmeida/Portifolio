<!DOCTYPE html>
<html>
	<head>
    	<meta charset="UTF-8" >
		<title>ínicio</title>
		<link rel="stylesheet"  type="text/css" href="port.css">
	</head>
	<body>
		<?php
			include "cabecalho.inc";
			
		?>
		<form method="post" action="cadastro.php">
			<fieldset>
				<label>Nome atividade: </label>
				<input type="text" name="atividade"/>
				<br/>
				<br/>
				<label>Link:</label>
				<input type="text" name="linkp"/>
				<br/>
				<br/>
				<label>Data:</label>
				<input type="date" name="data" />
				<br/>
				<br/>
				<label>Arquivo:</label>
				<input type="file" name="arquivo" />
				<br/>
				<br/>
				<input type="submit" value="Mandar" class="b"/>
				
			</fieldset>
		</form>
	</body>
</html>