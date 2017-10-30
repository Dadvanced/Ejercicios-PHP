<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>procesar4</title>
	</head>
	
	<body>
		<?php
		$altura = $_POST["altura"];
		$base = $_POST["base"];

		$area = ($base * $altura) / 2;

		echo "<p>El área del triángulo de base $base y altura $altura, es: $area</p>";
		?>
	</body>
</html>