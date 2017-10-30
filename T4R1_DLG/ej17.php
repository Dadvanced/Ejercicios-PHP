<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej17</title>

		<style>

			body {
			background-color: #F3C74E;
		}

		</style>
	</head>
	
	<body>
		<h1>Suma-digitos</h1>
		<br/>
		<p>Se va a sumar todos los números de un dígito introducido.</p>
		<form method="POST">
			Número: <input type="number" name="num">
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php

			error_reporting(E_ALL);       //muestra los errores aunque estén desactivados en el servidor
			ini_set("display_errors",1) ; //muestra los errores aunque estén desactivados en el servidor

			$num = $_POST["num"] ?? null; //si no existe, le asigna un valor nulo

			if ($num != "") { //si el número tiene un valor distinto a null o vacío ejecuta lo siguiente:

				$numAux = 0;

				while ($num > 0) {
					$numAux = $numAux + ($num % 10);
					$num /= 10;
				}

				echo "La suma de los números introducidos es: $numAux";				
			}

			?>
	</body>
</html>