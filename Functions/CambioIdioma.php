<?php

//Función : CambioIdioma
//Creado el : 09/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------

session_start();
$idioma = $_POST['idioma'];
$_SESSION['idioma'] = $idioma;
header('Location:' . $_SERVER["HTTP_REFERER"]);
?>