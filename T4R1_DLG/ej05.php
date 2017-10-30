<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej05</title>
	</head>
	
	<body>
		<form method="POST">
			Introduzca el número de horas trabajadas ésta semana: <input type="number" name="horas">
			<br/>
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php
		$horas = $_POST["horas"];

		if ($horas != "") {
			echo "<p>Horas trabajadas: $horas</p><br/>";
			if ($horas <= 41) {
				$salario = $horas * 12;
				echo "<p>Lo que usted ha ganado ésta semana ha sido: $salario</p>";
			} else {
				//41 horas * 12 €/h = 492 €
				$salarioPlus = (($horas - 41) * 16) + 492;
				echo "<p>Lo que usted ha ganado ésta semana ha sido: $salarioPlus</p>";
			}
		}
		?>
	</body>
</html>