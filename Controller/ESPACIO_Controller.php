<?php

//Controlador : ESPACIO_Controller
//Creado el : 18/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


session_start(); //solicito trabajar con la session

include '../Functions/Authentication.php';

if (!IsAuthenticated()) {
  header('Location: ../Controller/Index_Controller.php');
}

include '../Model/ESPACIO_Model.php';
include '../View/ESPACIO/ESPACIO_SHOWALL_View.php';
include '../View/ESPACIO/ESPACIO_SEARCH_View.php';
include '../View/ESPACIO/ESPACIO_ADD_View.php';
include '../View/ESPACIO/ESPACIO_EDIT_View.php';
include '../View/ESPACIO/ESPACIO_DELETE_View.php';
include '../View/ESPACIO/ESPACIO_SHOWCURRENT_View.php';
include '../View/Message_View.php';

// la función get_data_form() recoge los valores que vienen del formulario por medio de post y la action a realizar, crea una instancia USUARIO y la devuelve
function get_data_form()
{

  $codespacio = $_POST['CODESPACIO'];
  $nombreespacio = $_POST['NOMBREESPACIO'];
  $superficieespacio = $_POST['SUPERFICIEESPACIO'];


  $action = $_POST['action'];


  $espacio = new ESPACIO_Model(
    $codespacio,
    $nombreespacio,
    $superficieespacio
  );

  return $espacio;
}


// sino existe la variable action la crea vacia para no tener error de undefined index

if (!isset($_REQUEST['action'])) {
  $_REQUEST['action'] = '';
}

// En funcion del action realizamos las acciones necesarias

switch ($_REQUEST['action']) {
  case 'ADD':
    if (!$_POST) { // se incoca la vista de add de usuario
      new ESPACIO_ADD();
    } else {
      $espacio = get_data_form(); //se recogen los datos del formulario
      $respuesta = $espacio->ADD();
      new MESSAGE($respuesta, '../Controller/ESPACIO_Controller.php');
    }
    break;
  case 'DELETE':
    if (!$_POST) { //nos llega el id a eliminar por get
      $espacio = new ESPACIO_Model($_REQUEST['CODESPACIO'], '', '');
      $valores = $espacio->RellenaDatos();
      new ESPACIO_DELETE($valores); //se le muestra al usuario los valores de la tupla para que confirme el borrado mediante un form que no permite modificar las variables 
    } else { // llegan los datos confirmados por post y se eliminan
      $espacio = get_data_form();
      $respuesta = $espacio->DELETE();
      new MESSAGE($respuesta, '../Controller/ESPACIO_Controller.php');
    }
    break;
  case 'EDIT':
    if (!$_POST) { //nos llega el usuario a editar por get
      $espacio = new ESPACIO_Model($_REQUEST['CODESPACIO'], '', ''); // Creo el objeto
      $valores = $espacio->RellenaDatos(); // obtengo todos los datos de la tupla
      if (is_array($valores)) {
        new ESPACIO_EDIT($valores); //invoco la vista de edit con los datos 
        //precargados
      } else {
        new MESSAGE($valores, '../Controller/ESPACIO_Controller.php');
      }
    } else {

      $espacio = get_data_form(); //recojo los valores del formulario
      $respuesta = $espacio->EDIT(); // update en la bd en la bd
      new MESSAGE($respuesta, '../Controller/ESPACIO_Controller.php');
    }

    break;
  case 'SEARCH':
    if (!$_POST) {
      new ESPACIO_SEARCH();
    } else {
      $espacio = get_data_form();
      $datos = $espacio->SEARCH();

      $lista = array('CODESPACIO', 'NOMBREESPACIO', 'SUPERFICIEESPACIO');

      new ESPACIO_SHOWALL($lista, $datos, '../Index_Controller.php');
    }
    break;
  case 'SHOWCURRENT':
    $espacio = new ESPACIO_Model($_REQUEST['CODESPACIO'], '', '');
    $valores = $espacio->RellenaDatos();
    new ESPACIO_SHOWCURRENT($valores);
    break;
  default:
    if (!$_POST) {
      $espacio = new ESPACIO_Model('', '', '', '', '', '', '');
    } else {
      $espacio = get_data_form();
    }
    $datos = $espacio->SEARCH();
    $lista = array('CODESPACIO', 'NOMBREESPACIO', 'SUPERFICIEESPACIO');
    new ESPACIO_SHOWALL($lista, $datos);
}