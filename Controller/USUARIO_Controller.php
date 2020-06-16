<?php

//Clase : USUARIO_Controller
//Creado el : 06/10/2019
//Creado por: jdvazquez
//-------------------------------------------------------


session_start(); //solicito trabajar con la session

include '../Functions/Authentication.php';

if (!IsAuthenticated()) {
	header('Location: ../Index_Controller.php');
}

include '../Model/USUARIO_Model.php';
include '../View/USUARIO/USUARIO_SHOWALL_View.php';
include '../View/USUARIO/USUARIO_SEARCH_View.php';
include '../View/USUARIO/USUARIO_ADD_View.php';
include '../View/USUARIO/USUARIO_EDIT_View.php';
include '../View/USUARIO/USUARIO_DELETE_View.php';
include '../View/USUARIO/USUARIO_SHOWCURRENT_View.php';
include '../View/Message_View.php';

// la función get_data_form() recoge los valores que vienen del formulario por medio de post y la action a realizar, crea una instancia USUARIO y la devuelve
function get_data_form()
{

	$login = $_POST['LOGIN'];
	$password = $_POST['PASSWORD'];
	$DNI = $_POST['DNI'];
	$nombre = $_POST['NOMBRE'];
	$apellidos = $_POST['APELLIDOS'];
	$email = $_POST['EMAIL'];
	$rol = $_POST['ROL'];

	$action = $_POST['action'];


	$usuario = new USUARIO_Model(
		$login,
		$password,
		$DNI,
		$nombre,
		$apellidos,
		$email,
		$rol
	);
	return $usuario;
}


// sino existe la variable action la crea vacia para no tener error de undefined index

if (!isset($_REQUEST['action'])) {
	$_REQUEST['action'] = '';
}

// En funcion del action realizamos las acciones necesarias

switch ($_REQUEST['action']) {
	case 'ADD':
		if (!$_POST) { // se incoca la vista de add de usuario
			new USUARIO_ADD();
		} else {
			$USUARIO = get_data_form(); //se recogen los datos del formulario
			$respuesta = $USUARIO->ADD();
			new MESSAGE($respuesta, '../Controller/USUARIO_Controller.php');
		}
		break;
	case 'DELETE':
		if (!$_POST) { //nos llega el id a eliminar por get
			$USUARIO = new USUARIO_Model($_REQUEST['login'], '', '', '', '', '', '');
			$valores = $USUARIO->RellenaDatos();
			new USUARIO_DELETE($valores); //se le muestra al usuario los valores de la tupla para que confirme el borrado mediante un form que no permite modificar las variables 
		} else { // llegan los datos confirmados por post y se eliminan
			$USUARIO = get_data_form();
			$respuesta = $USUARIO->DELETE();
			new MESSAGE($respuesta, '../Controller/USUARIO_Controller.php');
		}
		break;
	case 'EDIT':
		if (!$_POST) { //nos llega el usuario a editar por get
			$USUARIO = new USUARIO_Model($_REQUEST['login'], '', '', '', '', '', ''); // Creo el objeto
			$valores = $USUARIO->RellenaDatos(); // obtengo todos los datos de la tupla
			if (is_array($valores)) {
				new USUARIO_EDIT($valores); //invoco la vista de edit con los datos 
				//precargados
			} else {
				new MESSAGE($valores, '../Controller/USUARIO_Controller.php');
			}
		} else {

			$USUARIO = get_data_form(); //recojo los valores del formulario
			$respuesta = $USUARIO->EDIT(); // update en la bd en la bd
			new MESSAGE($respuesta, '../Controller/USUARIO_Controller.php');
		}

		break;
	case 'SEARCH':
		if (!$_POST) {
			new USUARIO_SEARCH();
		} else {
			$USUARIO = get_data_form();
			$datos = $USUARIO->SEARCH();

			$lista = array('login', 'password', 'DNI', 'email', 'nombre', 'apellidos', 'telefono', '', 'FechaNacimiento', 'sexo');

			new USUARIO_SHOWALL($lista, $datos, '../index.php');
		}
		break;
	case 'SHOWCURRENT':
		$USUARIO = new USUARIO_Model($_REQUEST['login'], '', '', '', '', '', '');
		$valores = $USUARIO->RellenaDatos();
		new USUARIO_SHOWCURRENT($valores);
		break;
	default:
		if (!$_POST) {
			$USUARIO = new USUARIO_Model('', '', '', '', '', '', '');
		} else {
			$USUARIO = get_data_form();
		}
		$datos = $USUARIO->SEARCH();
		$lista = array('login', 'nombre', 'email', 'telefono');
		new USUARIO_SHOWALL($lista, $datos);
}