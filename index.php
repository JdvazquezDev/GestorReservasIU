<?php

//Clase : index
//Creado el : 10/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------

//entrada a la aplicacion

//se va usar la session de la conexion
session_start();

//funcion de autenticacion
include './Functions/Authentication.php';

if (!isset($_SESSION['FirstConnection'])) {
  $_SESSION['FirstConnection'] = true;
}

if (!($_SESSION['FirstConnection'])) {
  //si no ha pasado por el login de forma correcta
  if (!IsAuthenticated()) {
    header('Location: ./Controller/Login_Controller.php');
  }
  //si ha pasado por el login de forma correcta 
  else {
    header('Location: ./Controller/Index_Controller.php');
  }
} else {
  $_SESSION['FirstConnection'] = false;
  // header('Location: ./Controller/Install_Controller.php');
}