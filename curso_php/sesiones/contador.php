<?php 
	session_name("LOGIN");
	session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>sesiones en php</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php echo "<br> Bienvenido ".$_SESSION['usuario']; ?>
	<h2>PERFIL DEL USUARIO</h2>
	<?php 
		echo "<br> Cantidad de sesiones iniciadas: ".$_SESSION["contador"]." veces <br>";
		echo "<br>Nombre: ".$_SESSION['nombre'];
		echo "<br>Apellido: ".$_SESSION['apellido'];
		echo "<br>pais: ".$_SESSION['pais'];
		echo "<br><br> Su contraseña actual: ".$_SESSION['pass'];
	?>

	<br><br>
	<div>
		<a href="logout.php">Cerrar Sesion</a>
	</div>
</body>
</html>

