<?php

//Controlador : RESERVA_Controller
//Creado el : 19/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


session_start(); //solicito trabajar con la session

include '../Functions/Authentication.php';

if (!IsAuthenticated()) {
  header('Location: ../Controller/Index_Controller.php');
}

include '../Model/RESERVA_Model.php';
include '../View/RESERVA/RESERVA_SHOWALL_View.php';
include '../View/RESERVA/RESERVA_SEARCH_View.php';
include '../View/RESERVA/RESERVA_ADD_View.php';
include '../View/RESERVA/RESERVA_EDIT_View.php';
include '../View/RESERVA/RESERVA_DELETE_View.php';
include '../View/RESERVA/RESERVA_SHOWCURRENT_View.php';
include '../View/Message_View.php';

// la función get_data_form() recoge los valores que vienen del formulario por medio de post y la action a realizar, crea una instancia reserva y la devuelve
function get_data_form()
{
  $codreserva = $_POST['CODRESERVA'];
  $codespacio = $_POST['CODESPACIO'];
  $logincreador = $_POST['LOGINCREADOR'];
  $fechareserva = $_POST['FECHARESERVA'];
  $horarioinicioreserva = $_POST['HORARIOINICIORESERVA'];
  $horariofinreserva = $_POST['HORARIOFINRESERVA'];
  $usoreserva = $_POST['USORESERVA'];
  $verificada = $_POST['VERIFICADA'];




  $action = $_POST['action'];


  $reserva = new RESERVA_Model(
    $codreserva,
    $codespacio,
    $logincreador,
    $fechareserva,
    $horarioinicioreserva,
    $horariofinreserva,
    $usoreserva,
    $verificada
  );

  return $reserva;
}


// sino existe la variable action la crea vacia para no tener error de undefined index

if (!isset($_REQUEST['action'])) {
  $_REQUEST['action'] = '';
}

// En funcion del action realizamos las acciones necesarias

switch ($_REQUEST['action']) {
  case 'ADD':
    if (!$_POST) { // se incoca la vista de add de reserva
      $reserva = new RESERVA_Model('', '', '', '', '', '', '', '');
      $valores = $reserva->GetSpaces();
      new RESERVA_ADD($valores);
    } else {
      $reserva = get_data_form(); //se recogen los datos del formulario
      $respuesta = $reserva->ADD();
      new MESSAGE($respuesta, '../Controller/RESERVA_Controller.php');
    }
    break;
  case 'DELETE':
    if (!$_POST) { //nos llega el id a eliminar por get
      $reserva = new RESERVA_Model($_REQUEST['CODRESERVA'], '', '', '', '', '', '', '');
      $valores = $reserva->RellenaDatos();
      new RESERVA_DELETE($valores); //se le muestra al reserva los valores de la tupla para que confirme el borrado mediante un form que no permite modificar las variables 
    } else { // llegan los datos confirmados por post y se eliminan
      $reserva = get_data_form();
      $respuesta = $reserva->DELETE();
      new MESSAGE($respuesta, '../Controller/RESERVA_Controller.php');
    }
    break;
  case 'EDIT':
    if (!$_POST) { //nos llega el reserva a editar por get
      $reserva = new RESERVA_Model($_REQUEST['CODRESERVA'], '', '', '', '', '', '', ''); // Creo el objeto
      $valores = $reserva->RellenaDatos();
      $espaciosDatos = $reserva->GetSpaces();
      if (is_array($valores)) {
        new RESERVA_EDIT($valores, $espaciosDatos); //invoco la vista de edit con los datos 
        //precargados
      } else {
        new MESSAGE($valores, '../Controller/RESERVA_Controller.php');
      }
    } else {
      $reserva = get_data_form(); //recojo los valores del formulario
      $respuesta = $reserva->EDIT(); // update en la bd en la bd
      new MESSAGE($respuesta, '../Controller/RESERVA_Controller.php');
    }

    break;
  case 'SEARCH':
    if (!$_POST) {
      $reserva = new RESERVA_Model('', '', '', '', '', '', '', '');
      $valores = $reserva->GetSpaces();
      new RESERVA_SEARCH($valores);
    } else {
      $reserva = get_data_form();
      $datos = $reserva->SEARCH();

      $lista = array('CODRESERVA', 'CODESPACIO', 'LOGINCREADOR', 'FECHARESERVA', 'HORARIOINICIORESERVA', 'HORARIOFINRESERVA', 'USORESERVA', 'VERIFICADA');

      new RESERVA_SHOWALL($lista, $datos, '../Index_Controller.php');
    }
    break;
  case 'SHOWCURRENT':
    $reserva = new RESERVA_Model($_REQUEST['CODRESERVA'], '', '', '', '', '', '', '');
    $valores = $reserva->RellenaDatos();
    new RESERVA_SHOWCURRENT($valores);
    break;
  default:
    if (!$_POST) {
      $reserva = new RESERVA_Model('', '', '', '', '', '', '', '');
    } else {
      $reserva = get_data_form();
    }
    $datos = $reserva->SEARCH();
    $lista = array('CODRESERVA', 'CODESPACIO', 'LOGINCREADOR', 'FECHARESERVA', 'HORARIOINICIORESERVA', 'HORARIOFINRESERVA', 'USORESERVA', 'VERIFICADA');
    new RESERVA_SHOWALL($lista, $datos);
}
