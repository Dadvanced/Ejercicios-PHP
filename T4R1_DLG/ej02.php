<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej02</title>
	</head>
	
	<body>
		<form method="POST">
			Introduzca un día de la semana en forma de número: <input type="number" name="dia">
			<br/>
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php
			$dia = $_POST["dia"];

			if ($dia != "") {
				switch ($dia) {
					case 1:
					echo "<p>El Lunes tenemos: 3 horas de empresas y 3 horas de inglés.</p>";
					break;

					case 2:
					echo "<p>El Martes tenemos: 3 horas de diseño y 3 horas de despliegue.</p>";
					break;

					case 3:
					echo "<p>El Miércoles tenemos: 3 horas de entorno en desarrollo cliente, 
					2 horas de entorno en desarollo servidor y 1 hora de empresas.</p>";
					break;

					case 4:
					echo "<p>El Jueves tenemos: 3 horas de entorno en desarrollo servidor y 
					3 horas de desarollo cliente.</p>";
					break;

					case 5:
					echo "<p>El Viernes tenemos: 3 horas de interfaces y 3 horas de entorno servidor.</p>";
					break;

					default:
					echo "<p>El número introducido no es válido</p>";
				}
			}
		?>
	</body>
</html>