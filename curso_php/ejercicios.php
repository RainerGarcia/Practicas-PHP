<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>se puede usar html</h1>
</body>
</html>

<?php

	function votaciones($nombre,$edad){
		if ($edad < 18) {
			return $nombre."no puede votar, es menor de edad";
		}elseif($edad >=100){
			return "Edad no válida";
		}else{
			return $nombre." es mayor de edad, puede ejercer su voto";
		}
	};
	
	include "nueva_funcion.php";

	#autoload sirve para cargar una sola clase nada mas, cuando se llama a la clase la funcion se activa y carga el archivo y la clase que se requiere

	spl_autoload_register(function($clase){
		
		include "hola1.php";

	});
	
	echo votaciones("Rainer",30)."<>";

	$jugador3 = new Jugador("Rainer","portero","3",1,10);

	$jugador3->entrenar();

	echo $jugador3->colorcabello();

	echo "<br>".$jugador3->palabra1()."<br>";

	echo "<br><hr><br>";

	$jugador3->superpoder("volar");

	$jugador3->megapoder();


?>