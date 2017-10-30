<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>procesar7</title>
	</head>
	
	<body>
		<?php
		$kilobytes = $_POST["kb"];

		$mb = $kilobytes / 1024;

		echo "<p>$kilobytes Kilobytyes son: $mb Megabytes</p>";
		?>
	</body>
</html>