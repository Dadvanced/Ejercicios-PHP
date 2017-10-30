<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej10</title>
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
		<form method="POST">
			Introduzca la coordenada X: <input type="number" name="x">
			<br/>
			Introduzca la coordenada Y: <input type="number" name="y">
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php
			$x = $_POST["x"];
			$y = $_POST["y"];

			if (($x != "") && ($y != "")) {
				if (($x > 0) && ($y > 0)) {
					echo "($x, $y) pertenece al primer cuadrante";
				} else if (($x < 0) && ($y > 0)) {
					echo "($x, $y) pertenece al segundo cuadrante";
				} else if (($x > 0) && ($y < 0)) {
					echo "($x, $y) pertenece al cuarto cuadrante";
				} else if (($x < 0) && ($y < 0)) {
					echo "($x, $y) pertenece al tercer cuadrante";
				} else {
					echo "ese número probablemente ni exista...";
				}
			}
		?>
	</body>
</html>