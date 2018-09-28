<?php
	
	require_once './conexion_bd.php';
	// capturar información del formulario de busqueda
	if(isset($_GET['search'])){
		$obj = $_GET['search'];
		$observerClass = new Observer();
		$observerClass -> getUSer($mysqli, $obj);
	}

class Observer
{
    public function getUser($mysqli, $obj){}
	public function insertUser($mysqli, $obj){}
	public function suscribeUser($mysqli, $obj){}
}

function getUser($mysqli, $obj){

		$queryRevista = $mysqli -> query ("SELECT nombre, apellido FROM usuario WHERE id_usuario =".$obj."");

		sql_fetch_array($queryRevista);

		if(isset($_GET['search'])){
			if(count($valores) > 0){
				echo "Hola <b>".$valores['nombre']."</b> ya te encuentras registrado";
			}
			else{
				echo "No estas registrado, por favor registrate antes de realizar una suscripción";
			}
		}
		return fetch_array;
	}

function insertUser($mysqli, $obj){

	if (isset($_POST['identification'], $_POST['first_name'], $_POST['last_name'], $_POST['age'], $_POST['city'])){
		$obj=(object)$_POST;
	}

	$values= $mysqli -> query("INSERT INTO usuario (nombre, apellido, edad, cod_ciudad)
		VALUES(".$obj-> identification." , ".$obj-> first_name." , ".$obj-> last_name.", ".$obj-> age.",".$obj -> city.") ");
}	

?>