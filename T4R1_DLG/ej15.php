<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej15</title>

		<style>

			body {
			background-color: #F3C74E;
		}

		</style>
	</head>
	
	<body>
		<h1>Primo</h1>
		<br/>
		<p>Se va a comprobar si el número introducido es primo o no.</p>
		<form method="POST">
			Número: <input type="number" name="num">
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php

			error_reporting(E_ALL);       //muestra los errores aunque estén desactivados en el servidor
			ini_set("display_errors",1) ; //muestra los errores aunque estén desactivados en el servidor

			$num = $_POST["num"] ?? null; //si no existe, le asigna un valor nulo
			$esPrimo = true;

			if ($num != "") { //si el número tiene un valor distinto a null o vacío ejecuta lo siguiente:

				for ($i = 2; $i < $num; $i++) {
					if ($num % $i == 0) {
						$esPrimo = false;
					}
				}

				if ($esPrimo) {
					echo "El número $num es primo.";
				} else {
					echo "El número $num <b>NO</b> es primo.";
				}
			}

			?>
	</body>
</html>