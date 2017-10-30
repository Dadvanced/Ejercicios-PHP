<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>procesar9</title>
	</head>
	
	<body>
		<?php
		$radio = $_POST["radio"];
		$area = 3.14 * (pow($radio, 2));

		
		echo "<p>El área de un círculo cuyo radio es $radio es: $area</p>";
		?>
	</body>
</html>