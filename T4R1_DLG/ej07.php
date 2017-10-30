<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej07</title>
	</head>
	
	<body>
		<?php
			echo "Hoy es: " . date("Y/m/d") . "<br>";
			$dia = date("d");

			if ($dia >= 10) {
				echo "<h2>El sitio esta fuera de servicio</h2>";
			} else {
				echo "<h2>El sitio está online</h2>";
			}
		?>
	</body>
</html>