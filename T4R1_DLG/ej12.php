<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej12</title>

		<style>

			body {
			background-color: #F3C74E;
		}

		</style>
	</head>
	
	<body>
		<h1>Cuestionario de infidelidad</h1>
		<br/>

		<form method="POST">
			1.- Tu pareja parece estar más inquieta de lo normal sin ningún motivo aparente.
			<select name="r1">
				<option value="true">Si</option>
				<option value="false">No</option>
			</select>
			<br/>
			<br/>

			2.- Ha aumentado sus gastos de vestuario.
			<select name="r2">
				<option value="true">Si</option>
				<option value="false">No</option>
			</select>
			<br/>
			<br/>

			3.- Ha perdido el interés que mostraba anteriormente por ti.
			<select name="r3">
				<option value="true">Si</option>
				<option value="false">No</option>
			</select>
			<br/>
			<br/>

			4.- Ahora se afeita y se asea con más frecuencia (si es hombre) o ahora se arregla el pelo y asea con
			más frecuencia (si es mujer).
			<select name="r4">
				<option value="true">Si</option>
				<option value="false">No</option>
			</select>
			<br/>
			<br/>

			5.- No te deja que mires la agenda de su teléfono móvil.
			<select name="r5">
				<option value="true">Si</option>
				<option value="false">No</option>
			</select>
			<br/>
			<br/>

			6.- A veces tiene llamadas que dice no querer contestar cuando tú estás delante.
			<select name="r6">
				<option value="true">Si</option>
				<option value="false">No</option>
			</select>
			<br/>
			<br/>

			7.- Últimamente se preocupa más en cuidar la línea y/o estar bronceado/a
			<select name="r7">
				<option value="true">Si</option>
				<option value="false">No</option>
			</select>
			<br/>
			<br/>

			8.- Muchos días viene tarde después de trabajar porque dice tener mucho más trabajo.
			<select name="r8">
				<option value="true">Si</option>
				<option value="false">No</option>
			</select>
			<br/>
			<br/>

			9.- Has notado que últimamente se perfuma más.
			<select name="r9">
				<option value="true">Si</option>
				<option value="false">No</option>
			</select>
			<br/>
			<br/>

			10.- Se confunde y dice que has estado en sitios donde no ha ido contigo.
			<select name="r10">
				<option value="true">Si</option>
				<option value="false">No</option>
			</select>
			<br/>
			<br/>

			<br/>
			<button type="submit">Enviar</button>
		</form>
		<br/>

		<?php
			$r1 = $_POST["r1"];
			$r2 = $_POST["r2"];
			$r3 = $_POST["r3"];
			$r4 = $_POST["r4"];
			$r5 = $_POST["r5"];
			$r6 = $_POST["r6"];
			$r7 = $_POST["r7"];
			$r8 = $_POST["r8"];
			$r9 = $_POST["r9"];
			$r10 = $_POST["r10"];

			$puntuacion = 0;

			if (($r1 != "") && ($r2 != "") && ($r3 != "") && ($r4 != "") && ($r5 != "") && ($r6 != "") && ($r7 != "") && ($r8 != "") && ($r9 != "") && ($r10 != "")) {

					if ($r1 == "true") {
						$puntuacion+=3;
					}

					if ($r2 == "true") {
						$puntuacion+=3;
					}

					if ($r3 == "true") {
						$puntuacion+=3;
					}

					if ($r4 == "true") {
						$puntuacion+=3;
					}

					if ($r5 == "true") {
						$puntuacion+=3;
					}

					if ($r6 == "true") {
						$puntuacion+=3;
					}

					if ($r7 == "true") {
						$puntuacion+=3;
					}

					if ($r8 == "true") {
						$puntuacion+=3;
					}

					if ($r9 == "true") {
						$puntuacion+=3;
					}

					if ($r10 == "true") {
						$puntuacion+=3;
					}

					if (($puntuacion >= 0) && ($puntuacion <= 10)) {
						echo "<b>¡Enhorabuena! Tu pareja parece ser totalmente fiel.</b>";
					} elseif (($puntuacion >= 11) && ($puntuacion <= 22)) {
						echo "<b>Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente
						será algo sin importancia. No bajes la guardia.</b>";
					} else {
						echo "<b>Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona.
						Te aconsejamos que indagues un poco más y averiguües qué es lo que está pasando por su cabeza.</b>	";
					}
				}//if !=null

			?>
	</body>
</html>