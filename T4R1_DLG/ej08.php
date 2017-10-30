<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej08</title>
	</head>
	
	<body>
		<form method="POST">
			Vamos a resolver una función del tipo <i>ax(cuadrado) + bx + c = 0</i>:<br/>
			Para ello introduzca <i>a</i>, <i>b</i> y <i>c</i>
			<br/>
			a = <input type="number" name="a">
			<br/>
			b = <input type="number" name="b">
			<br/>
			c = <input type="number" name="c">
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php
			$a = $_POST["a"];
			$b = $_POST["b"];
			$c = $_POST["c"];

			if (($a != "") && ($b != "") && ($c != "")) {
				$x = (-$b +  (sqrt($b * $b) - (4 * $a * $c)) / (2 * $a));
				echo "<p>El valor de <i>x</> es: $x</p>";
			}
		?>
	</body>
</html>