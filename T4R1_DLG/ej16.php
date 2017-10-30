<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej16</title>

		<style>

			body {
			background-color: #F3C74E;
		}

		</style>
	</head>
	
	<body>
		<h1>Pirámide</h1>
		<br/>
		<p>Se va a dibujar una pirámide a través de una altura introducida por teclado.</p>
		<form method="POST">
			<input type="number" name="alturaIntroducida">
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php
			$alturaIntroducida = $_POST["alturaIntroducida"];
			$espacios = $alturaIntroducida -1;
			$altura = 0; //se usará para saber cuántos dígitos tiene el número introducido
			

			if ($alturaIntroducida != "") {
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
			}

			?>
	</body>
</html>