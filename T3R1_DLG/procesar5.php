<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>procesar5</title>
	</head>
	
	<body>
		<?php
		$horas = $_POST["horas"];
		$base = 12;

		$salario = $base * $horas;

		echo "<p>Esta semana has trabajado $horas horas, con lo que te corresponde: $salario €.</p>";
		?>
	</body>
</html>