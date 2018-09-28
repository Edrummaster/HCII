<?php
	//url host, usuario, contraseña, nombre, bd
	$mysqli = new mysqli('localhost', 'root', '', 'mi_revista');
	//$mysqli -> mysql_set_charset("utf_8");
	$queryCiudad = $mysqli -> query("SELECT * FROM ciudad");
	$queryRevista = $mysqli -> query("SELECT * FROM revista ");
?> 