<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" >
		<title>ínicio </title>
		<link rel="stylesheet" type="text/css" href="port.css">
	</head>
	
	<body>
		<?php
			include "cabecalho.inc";
			
			$atividade = $_POST["atividade"];
			$linkp = $_POST["linkp"];
			$data = $_POST["data"]; 
			
			if(!file_exists("portifolio.xml")){
				
				$fp = fopen("portifolio.xml","w");
				
				$dados = '<?xml version="1.0" encoding="ISO-8859-1"?><portifolios></portifolios>';
				
				fwrite($fp,$dados);
				
				fclose($fp);
				
			
			}
			
			if(isset($_FILES['arquivo'])){
				  date_default_timezone_set("Brazil/East");

				  $ext = strtolower(substr($_FILES['arquivo']['name'],-4)); 
				  $new_name = date("Y.m.d-H.i.s") . $ext; 
				  $dir = 'uploads/'; 

				  move_uploaded_file($_FILES['arquivo']['tmp_name'], $dir.$new_name); 
			   }
			$arquivo = 'portifolio.xml';
			$xml = simplexml_load_file($arquivo);

			$posicao = sizeof($xml->portifolio);
			
			$xml->portifolio[$posicao]->atividade = $_POST["atividade"];
			$xml->portifolio[$posicao]->linkp = $_POST["linkp"];
			$xml->portifolio[$posicao]->data = $_POST["data"];
			$xml->portifolio[$posicao]->arquivo = $new_name;
			
			$xml->asXML($arquivo);
			
			echo "<p>Realizado com sucesso!</p>";
		?>
	</body>
</html>