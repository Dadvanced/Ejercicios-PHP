<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej11</title>
	</head>
	<style>
		h1 {
			text-align: center;
		}

		body {
			background-color: #F3C74E;
		}
	</style>
	
	<body>

		<?php

			error_reporting(E_ALL);
			ini_set("display_errors",1) ;

			$figura = $_POST["figura"] ?? null ;
		?>

		Elija de qué figura geométrica desea calcular el área:
		<form method="POST">
			<select name="figura">
					<option value="cuadrado">Cuadrado</option>
					<option value="triangulo">Triángulo</option>
					<option value="circulo">Círculo</option>
			</select>
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<form id="datos" action="calcular.php" method="POST">
			<input name="figura" type="hidden" value="<?= $figura ; ?>" />

		<?php


			if ($figura != "") {
				switch ($figura) {
					case "cuadrado":
		?>
		<br/>
		
			Introduzca la base del cuadrado:<input type="number" name="base" />
			<br/>
			Introduzca la altura del cuadrado:<input type="number" name="altura" />
			<br/>
			<button form="datos" type="submit">Enviar</button>
			

		<?php
						break;

					case "triangulo":
						?> 

						<br/>
						<form action='calcular.php' method='POST'>Introduzca la base del triangulo:<input type='number' name='base'>
						<br/>
						Introduzca la altura del triangulo: <input type='number' name='altura'>
						<br/>
						<button type='submit'>Enviar</button>
						</form>
					
					<?php 
						break;

					case "circulo":
					?>

					<br/>
					<form action="calcular.php" method="POST">Introduzca el radio del círculo:<input type="number" name="radio">
					<br>
					<button type="submit">Enviar</button>
					</form>
					<?php
					break; 
				}
			}
		?>

			
		</form>
	</body>
</html>