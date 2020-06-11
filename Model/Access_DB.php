<?php


//Función : Access_DB
//Creado el : 09/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------

//----------------------------------------------------
// DB connection function
// Can be modified to use CONSTANTS defined in config.inc
//----------------------------------------------------


function ConnectDB()
{
	$mysqli = new mysqli("localhost", 'iu2018', 'pass2018', 'IU2018');

	if ($mysqli->connect_errno) {
		include '../View/Message_View.php';
		new Message("Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error, './index.php');
		return false;
	} else {
		return $mysqli;
	}
}