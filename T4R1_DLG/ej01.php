<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej01</title>
	</head>
	
	<body>
		<form method="POST">
			Introduzca valor 1: <input type="number" name="n1" id="n1">
			<br/>
			Introduzca valor 2: <input type="number" name="n2" id="n2">
			<br/>
			Introduzca valor 3: <input type="number" name="n3" id="n3">
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php
			$num1 = $_POST["n1"];
			$num2 = $_POST["n2"];
			$num3 = $_POST["n3"];

			echo "$num1, $num2, $num3<br/>";
			if (($num1 != "") && ($num2 != "") && ($num3 != "")) {

				if (($num1 == $num2) || ($num2 == $num3)) {
					echo "<h2>VERDADERO</h2>";
				} else {
					echo "<h2>FALSO</h2>";
				}
			} else {
				echo "Introduzca algún número.";
			}

		?>
	</body>
</html>