<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width">
		<title>ej09</title>
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
		<form method="POST">
			<h1>Super cuestionario de clase</h1>
			<br/>
			1.- Para poner un contenedor donde te de la gana en una web, ¿qué <b><i>position</i></b> usamos?
			<select name="r1">
			  <option value="relativo">Relative</option>
			  <option value="absolute">Absolute</option>
			  <option value="fixed">Fixed</option>
			</select>
			<br/>
			<br/>

			2.- ¿PHP es un lenguaje compilado o interpretado?
			<select name="r2">
			  <option value="compilado">Compilado</option>
			  <option value="interpretado">Interpretado</option>
			</select>
			<br/>
			<br/>

			3.- ¿Puede el empresario modificar de alguna forma el macroentorno?
			<select name="r3">
			  <option value="si">Si</option>
			  <option value="no">No</option>
			  <option value="depende">Depende del día</option>
			</select>
			<br/>
			<br/>

			4.- Selecciona la manera correcta de cambiar el estilo <b><i>top</i></b> de un elemento a través de JS.
			<select name="r4">
			  <option value="a">top = x</option>
			  <option value="b">elemento.style.top = x</option>
			  <option value="c">elemento.top = x</option>
			</select>
			<br/>
			<br/>

			5.- ¿Qué interfaz gráfico hemos usado en Debian para el ejercicio de clase?
			<select name="r5">
			  <option value="mint">mint</option>
			  <option value="gnome">gnome</option>
			  <option value="xfce4">xfce4</option>
			</select>
			<br/>
			<br/>

			6.- (En PHP) Queremos pasar una variable a una función y que su valor se modifique tanto fuera como dentro,
			¿cómo deberíamos pasar dicha variable?
			<select name="r6">
			  <option value="referencia">Por referencia</option>
			  <option value="valor">Por valor</option>
			  <option value="permiso">Con permiso</option>
			</select>
			<br/>
			<br/>

			7.- En JS, ¿Qué hace el comando <b><i>getElementByClass("hola")</i></b>?
			<select name="r7">
			  <option value="a">Coge el primer elemento con clase "hola"</option>
			  <option value="b">Coge todos los elementos con la clase "hola"</option>
			  <option value="c">No existe el comando</option>
			</select>
			<br/>
			<br/>

			8.- ¿Cuál es la manera correcta de borrar una capa en JS?
			<select name="r8">
			  <option value="a">elemento.removeChild(elemento)</option>
			  <option value="b">elemento.parentNode.removeChild</option>
			  <option value="c">elemento.parentNode.removeChild(elemento)</option>
			</select>
			<br/>
			<br/>

			9.- ¿Cuál es la manera correcta de añadir una capa (una vez creaada) en JS?
			<select name="r9">
			  <option value="a">document.createElement(elemento)</option>
			  <option value="b">elemento.appendChild(elemento)</option>
			  <option value="c">elemento.createElement(elemento)</option>
			</select>
			<br/>
			<br/>

			10.- Para que una página web ejecute JS, ¿con qué extensión debe guardarse dicho documento?
			<select name="r10">
			  <option value="a">.html</option>
			  <option value="b">.js</option>
			  <option value="c">.css</option>
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

			$puntuación = 0;

			if (($r1 != "") && ($r2 != "") && ($r3 != "") && ($r4 != "") && ($r5 != "") && ($r6 != "") && ($r7 != "") && ($r8 != "") && ($r9 != "") && ($r10 != "")) {

				if ($r1 == "absolute") {
					$puntuación++;
				}

				if ($r2 == "interpretado") {
					$puntuación++;
				}

				if ($r3 == "no") {
					$puntuación++;
				}

				if ($r4 == "b") {
					$puntuación++;
				}

				if ($r5 == "xfce4") {
					$puntuación++;
				}

				if ($r6 == "referencia") {
					$puntuación++;
				}

				if ($r7 == "b") {
					$puntuación++;
				}

				if ($r8 == "c") {
					$puntuación++;
				}

				if ($r9 == "b") {
					$puntuación++;
				}

				if ($r10 == "a") {
					$puntuación++;
				}

				echo "<h2>Tu puntuación es: $puntuación</h2>";
			}
		?>
	</body>
</html>