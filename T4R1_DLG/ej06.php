<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej06</title>
	</head>
	
	<body>
		<form method="POST">
			Vamos a resolver una función del tipo <i>ax + b = 0</i>:<br/>
			Para ello introduzca <i>a</i> y <i>b</i> 
			<br/>
			a = <input type="number" name="a">
			<br/>
			b = <input type="number" name="b">
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php
			$a = $_POST["a"];
			$b = $_POST["b"];

			if (($a != "") && ($b != "")) {
				$x = -$b / $a;
				echo "<p>El valor de <i>x</> es: $x</p>";
			}
		?>
	</body>
</html>