<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej18</title>

		<style>

			body {
			background-color: #F3C74E;
		}

		</style>
	</head>
	
	<body>
		<h1>Pirámide (2)</h1>
		<br/>
		<p>Se va a dibujar una pirámide a través de una altura introducida por teclado.</p>
		<p>Si el valor introducido es negativo, la pirámide se dibujará hacia abajo.</p>
		<form method="POST">
			Altura: <input type="number" name="alturaIntroducida">
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php

			error_reporting(E_ALL);       //muestra los errores aunque estén desactivados en el servidor
			ini_set("display_errors",1) ; //muestra los errores aunque estén desactivados en el servidor

			$alturaIntroducida = $_POST["alturaIntroducida"] ?? null; //si no existe, le asigna un valor nulo
			
			
			////////////// si el número introducido es POSITIVO se dibujará la pirámide hacia arriba //////////
			if (($alturaIntroducida != "") && ($alturaIntroducida > 1)) {

				$espacios = $alturaIntroducida -1;
				$altura = 0; //se usará para saber cuántos dígitos tiene el número introducido
				

				while ($altura < $alturaIntroducida) {

					for ($i = 0; $i <= $espacios; $i++) {
						echo "&nbsp;";
					}

					for ($j = 0; $j <= $altura; $j++) {
						echo "*";
					}
					echo "<br/>";
					$altura++;
					$espacios--;
				}//while
				
			} else if ($alturaIntroducida < 0) {
				//convertimos el valor en positivo para tratarlo en el código con más facilidad a la hora de dibujar la pirámide
				$alturaIntroducida = $alturaIntroducida * (-1);
				$espacios = 0;
				$altura = $alturaIntroducida;


				while ($altura > 0) {
					for ($i = 0; $i < $espacios; $i++) {
						echo "&nbsp;";
					}

					for ($j = 0; $j < $altura; $j++) {
						echo "*";
					}
					echo "<br/>";
					$altura--;
					$espacios++;
				}
			}

			?>
	</body>
</html>