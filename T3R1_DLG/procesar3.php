<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>procesar3</title>
	</head>
	
	<body>
		<?php
		$num1 = $_POST["numero1"];

		$pesetas = $num1 * 166.386;

		echo "<p>La cantidad de € introducida es: $num1</p><br/>";
		echo "<p>La cantidad convertida a pesetas es: $pesetas</p>";
		?>
	</body>
</html>