<?php 
	//iniciar sesion
	session_start();
	//consulta si existe la variable de sesion
	if (isset($_SESSION['miclave'])) {
		echo $_SESSION['miclave'];
		//borra una variable de sesion
		unset($_SESSION['miclave']);
		//session_destroy(); // borra todas las variables de sesion
		echo "borrada sesion";
	} else {
		echo "sesion no existe";
	}	

?>