<?php

	// $name = $_GET['name'];
	// $phone = $_GET['phone'];
	// $languaje = $_GET['languaje'];
	// $check = $_GET['check1'];

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$languaje = $_POST['languaje'];
	$check = $_POST['check1'];
	$archivo = $_FILES['fichero'];

	// en php existen dos formas de obtener los datos desde una pagina, desde el $_POST que es un envio interno de los datos, y el $_GET donde los datos son enviados desde la url, se usa mucho para API

	echo "El usuario ".$name." se siente ".$check.", porfavor llamarlo al ".$phone." porque tiene que ponerse a estudiar ".$languaje;

	echo "<br><br>".$archivo["name"];
	echo "<br>".$archivo["tmp_name"];
	echo "<br>".$archivo["type"];
	echo "<br>".$archivo["error"]."<br>";
	#siempre te lo mostrara un variable int de los bytes del archivo 
	$cantidad = round($archivo["size"]/1024,2);
	echo var_dump($archivo["size"]);
	echo "<br>".$archivo["size"]." bytes";
	echo "<br>".$cantidad." kb";
	$cantidad=$cantidad/1024;
	echo "<br>".$cantidad." mb";

	if (mime_content_type($archivo['tmp_name'])!="application/pdf") {
		echo "<br> tipo de archivo no admitido";
		exit();
	}

	if(!file_exists("archivos")){
		#mkdir funciona para crear un directorio en dado caso que no este creado, si lo crea exitosamente devuelve true, sino pudo devuelve false
		if(!mkdir("archivos",0777)){
			echo "<br> Error al crear el directorio";
			exit();
			// exit se usa para finalizar la ejecucion del programa en caso de error
		}
	}
	#chmod solo cambia los persmisos de la carpeta
	chmod("archivos", 0777);

	if (move_uploaded_file($archivo["tmp_name"], "archivos/".$archivo['name'])) {
		echo "<br> archivo subido con exito";
	}else{
		echo "<br> error al subir el archivo";
	}


?>