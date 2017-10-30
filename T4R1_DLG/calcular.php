<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej11</title>
	</head>
	<style>
		h1 {
			text-align: center;
		}

		body {
			background-color: #F3C74E;
		}
	</style>
	
	<body>
		<?php
			$figura = $_POST["figura"];
			$base = $_POST["base"];
			$altura = $_POST["altura"];
			$radio = $_POST["radio"];

			switch ($figura) {
				case "cuadrado":
					$area = $base * $altura;
					echo "El área de un cuadrado de base $base y de altura $altura es: $area";
					break;

				case "triangulo":
					$area = $base * $altura;
					echo "El área de un triangulo de base $base y de altura $altura es: $area";
					break;

				case "circulo":
					$area = 3.14 * pow($radio, 2);
					echo "El área de un círculo con radio $radio es: $area";
					break;
				
				default:
					echo "Lo has roto...";
					break;
			}
		?>
	</body>
</html>