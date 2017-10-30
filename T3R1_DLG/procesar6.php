<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>procesar6</title>
	</head>
	
	<body>
		<?php
		$altura = $_POST["altura"];
		$radio = $_POST["radio"];

		$volumen = (3.14 * 0.3) * ($radio * $radio) * $altura;

		echo "<p>El volumen de un cono con un radio $radio y con una altura $altura es: $volumen.</p>";
		?>
	</body>
</html>