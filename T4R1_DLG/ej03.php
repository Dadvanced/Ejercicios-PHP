<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej03</title>
	</head>
	
	<body>
		<form method="POST">
			Introduzca la hora actual (sin minutos): <input type="number" name="hora">
			<br/>
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php
			$hora = $_POST["hora"];

			if ($hora != "") {
				echo "$hora";
				switch ($hora) {					
					case 6:
					case 7:
					case 8:
					case 9:
					case 10:
					case 11:
					case 12:
					echo "<h2>Buenos días!</h2>";
					break;

					case 13:
					case 14:
					case 15: 
					case 16:
					case 17:
					case 18:
					case 19:
					case 20:
					echo "<h2>Buenas tardes!</h2>";
					break;

					case 21:
					case 22:
					case 23:
					case 24:
					case 1:
					case 2:
					case 3:
					case 4:
					case 5:
					echo "<h2>Buenas noches!</h2>";
					break;

					default: 
					echo "<h3>Esa hora no es válida</h3>";
				}
			}
		?>
	</body>
</html>