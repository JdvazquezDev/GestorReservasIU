<?php

//Controlador: Register_Controller
//Creado el: 11/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


session_start();
include_once '../Locale/Strings_' . $_SESSION['idioma'] . '.php';


if (!isset($_POST['LOGIN'])) {
  include '../View/Register_View.php';
  $register = new Register();
} else {

  include '../Model/USUARIO_Model.php';

  $usuario = new USUARIO_Model(
    $_REQUEST['LOGIN'],
    $_REQUEST['PASSWORD'],
    $_REQUEST['DNI'],
    $_REQUEST['NOMBRE'],
    $_REQUEST['APELLIDOS'],
    $_REQUEST['EMAIL'],
    $_REQUEST['ROL']
  );

  $respuesta = $usuario->Register();

  if ($respuesta == 'true') {
    $respuesta = $usuario->registrar();
    include '../View/Message_View.php';
    new Message($respuesta, '../Controller/Login_Controller.php');
  } else {
    include '../View/Message_View.php';
    new Message($respuesta, '../Controller/Register_Controller.php');
  }
}