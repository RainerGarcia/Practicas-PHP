<?php 

	session_name("LOGIN");
	session_start();

	session_destroy();

	if (headers_sent()) {
			echo "<script> window.location.href='login.html'; </script>";
		}else{
			header("location: login.html");
		}



 ?>