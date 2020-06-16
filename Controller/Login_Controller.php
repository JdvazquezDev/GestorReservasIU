<?php

//Controlador: Login_Controller
//Creado el: 11/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


session_start();

if (!isset($_REQUEST['LOGIN']) && !(isset($_REQUEST['PASSWORD']))) {
  include '../View/Login_View.php';
  $login = new Login();
} else {

  include '../Model/Access_DB.php';

  include '../Model/USUARIO_Model.php';
  $usuario = new USUARIO_Model($_REQUEST['LOGIN'], $_REQUEST['PASSWORD'], '', '', '', '', '');
  $respuesta = $usuario->login();

  if ($respuesta == 'true') {
    session_start();
    $_SESSION['LOGIN'] = $_REQUEST['LOGIN'];
    header('Location: ../Controller/Index_Controller.php');
  } else {
    include '../View/Message_View.php';
    new Message($respuesta, '../Controller/Login_Controller.php');
  }
}