<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>procesar8</title>
	</head>
	
	<body>
		<?php
		$v1 = $_POST["v1"];
		$v2 = $_POST["v2"];

		
		echo "<p>Los valores introducidos son: $v1 y $v2.</p><br/>";
		echo "<p>Como número aleatorio hemos obtenido el:</p>";
		echo (rand($v1, $v2));
		?>
	</body>
</html>