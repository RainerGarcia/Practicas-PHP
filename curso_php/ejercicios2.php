<?php

	// forma de colocar las cookies, siempre antes de doctype 
	// 	setcookie("nombre",valor,expiracion,directorio,dominio,secure,httponly);
	setcookie("Idioma","es",time()+60*60*24*365,"archivos/Cookies","localhost",false,false);
	
	$fecha1 = "01/11/2023";

	$arrayfecha1 = explode("/", $fecha1);

	echo var_dump($arrayfecha1);

	$a = 4824.12344508;

	echo "<br><br>".number_format($a,2);

	echo "<br><br> formato acostumbrado en venezuela ".number_format($a,2,",",".");

	echo "<br><br>".number_format($a,2,"&","$")."<br>";

	echo "<br>".date_default_timezone_get();

	date_default_timezone_set('America/Caracas');

	echo "<br>".date_default_timezone_get();

	echo "<br><hr><br>";

	echo "<br><br>".date("l F Y, g-i-s a");

	echo "<br><hr><br>";

	echo $_COOKIE['Idioma'];
	
	echo "<br><hr><br>";
?>