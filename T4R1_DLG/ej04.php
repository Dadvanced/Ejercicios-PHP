<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej04</title>
	</head>
	
	<body>
		<form method="POST">
			Introduzca un número e indicaremos el día de la semana que es: <input type="number" name="dia">
			<br/>
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php
			$dia = $_POST["dia"];

			if ($dia != "") {
				switch ($dia) {
					case 1:
					echo "<p>Lunes</p>";
					break;

					case 2:
					echo "<p>Martes</p>";
					break;

					case 3:
					echo "<p>Miércoles</p>";
					break;

					case 4:
					echo "<p>Jueves</p>";
					break;

					case 5:
					echo "<p>Viernes</p>";
					break;

					case 6:
					echo "<p>Sábado</p>";
					break;

					case 7:
					echo "<p>Domingo</p>";
					break;

					default:
					echo "<p>El número introducido no es válido</p>";
				}
			}
		?>
	</body>
</html>