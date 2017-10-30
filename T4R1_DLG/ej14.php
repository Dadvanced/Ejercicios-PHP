<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej14</title>

		<style>

			body {
			background-color: #F3C74E;
		}

		</style>
	</head>
	
	<body>
		<h1>Capicúa</h1>
		<br/>
		<p>Se va a comprobar si el número introducido es capicúa o no. (número de hasta 5 dígitos).</p>
		<form method="POST">
			Número: <input type="number" name="num">
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php

			error_reporting(E_ALL);       //muestra los errores aunque estén desactivados en el servidor
			ini_set("display_errors",1) ; //muestra los errores aunque estén desactivados en el servidor

			$num = $_POST["num"] ?? null; //si no existe, le asigna un valor negativo
			$numReplica = $num; //lo usaremos para mostrar éste número como introducido al final del código
			$numAux = 0; //lo usaremos para guardar el número introducido pero de manera invertida
			

			if ($num != "") { //si el número tiene un valor distinto a null o vacío

				do {
					$numAux += $num % 10; //guardamos en el auxiliar el ÚLTIMO número del número introducido
					$num = $num / 10; //quitamos el último número al número introducido
					$numAux = $numAux *	10; //hacemos hueco al próximo número que viene desde el número introducido
				} while ($num > 1);

				$numAux = $numAux / 10; //nos sobra una última cifra debido a la última multiplicación

				if ($numReplica == $numAux) {
					echo "El número introducido ($numReplica) es capicúa.";
				} else {
					echo "El número introducido ($numReplica) NO es capicúa.";
				}
			}

			?>
	</body>
</html>