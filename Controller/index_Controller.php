<?php

//Controlador: Index_Controller
//Creado el: 10/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


session_start(); //solicito trabajar con la session

include '../Functions/Authentication.php';

if (!IsAuthenticated()) {
  header('Location: ../Controller/Index_Controller.php');
}

include '../View/Index_View.php';
new Index();