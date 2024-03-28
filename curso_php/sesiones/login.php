<?php 

	if (!preg_match("/^.{4,10}$/", $_POST['usuario'])) {
	
		die("El usuario deben contener entre 4 a 10 caracteres");

	}

	if (!preg_match("/^.{4,10}$/", $_POST['pass'])) {
	
		die("La contraseña deben contener entre 4 a 10 caracteres");

	}

	if ($_POST["usuario"]=="Rainer" && $_POST["pass"]=="1234") {

		session_name("LOGIN");
		session_start();

		$_SESSION['usuario'] = $_POST['usuario'];
		$_SESSION['pass'] = $_POST['pass'];
		$_SESSION['nombre'] = "Rainer";
		$_SESSION['apellido'] = "García";
		$_SESSION['pais'] = "Venezuela";

		if (isset($_SESSION['contador'])) {
			$_SESSION['contador']++;
		}else {
			$_SESSION['contador']= 1;
		}

		if (headers_sent()) {
			echo "<script> window.location.href='contador.php'; </script>";
		}else{
			header("location: contador.php");
		}
		
	}else{
		echo "<br> Datos incorrectos";
	}

?>