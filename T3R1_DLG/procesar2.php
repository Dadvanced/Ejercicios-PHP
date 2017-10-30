<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>procesar2</title>
	</head>
	
	<body>
		<?php
		$num1 = $_POST["numero1"];
		$num2 = $_POST["numero2"];

		$suma = $num1 + $num2;
		$resta = $num1 - $num2;
		$producto = $num1 * $num2;
		$division = $num1 / $num2;

		echo "<p>Los números escritos son: $num1 y $num2</p><br/>";
		echo "<p>Suma: $suma</p><br/>";
		echo "<p>Resta: $resta</p><br/>";
		echo "<p>Multiplicación: $producto</p><br/>";
		echo "<p>División: $division</p><br/>";
		?>
	</body>
</html>