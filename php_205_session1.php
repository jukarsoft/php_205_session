<?php 
	//iniciar sesion
	session_start();
	//crear una variable de sesion
	$_SESSION['miclave']='php_205_session1';
	echo $_SESSION['miclave'];
?>