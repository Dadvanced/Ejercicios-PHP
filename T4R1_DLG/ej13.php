<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej13</title>

		<style>

			body {
			background-color: #F3C74E;
		}

		</style>
	</head>
	
	<body>
		<h1>Contador de dígitos</h1>
		<br/>
		<p>Se va a contar el número de dígitos que tiene un número introducido por el usuario (de hasta 5 dígitos).</p>
		<form method="POST">
			<input type="number" name="num">
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php
			$num = $_POST["num"];
			$numAux = $num;
			$contador = 0; //se usará para saber cuántos dígitos tiene el número introducido
			

			if ($num != "") {

				if ($num < 0) { //si el número es negativo lo pasamos a positivo
					$num = $num * (-1);
				}

				while ($num > 1) {
					$num = $num / 10;
					$contador++;
				}
				echo "<h2>El número de dígito de $numAux es de $contador.</h2>";
			}

			?>
	</body>
</html>