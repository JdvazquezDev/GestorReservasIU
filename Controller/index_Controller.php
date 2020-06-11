<?php

//Controlador: Index_Controller
//Creado el: 10/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------

//session
session_start();
//incluir funcion autenticacion
include './Functions/Authentication.php';
//si no esta autenticado
if (!IsAuthenticated()) {
  header('Location: ./index.php');
}
//esta autenticado
else {
  include './View/Index_View.php';
  new Index();
}