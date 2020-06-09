<?php

//Función : Desconectar
//Creado el : 09/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------

session_start();
session_destroy();
header('Location:../index.php');

?>