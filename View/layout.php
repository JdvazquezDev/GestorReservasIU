<?php
include_once '../Functions/Authentication.php';
if (!isset($_SESSION['idioma'])) {
  $_SESSION['idioma'] = 'SPANISH';
} else {
}
include '../Locale/Strings_' . $_SESSION['idioma'] . '.php';
?>
<html>

  <head>
    <title>
      ReservasIU
    </title>
    <meta charset="UTF-8">

    <!-- CSS STYLES -->
    <link rel="stylesheet" type="text/css" href="../View/css/layout.css" />
    <link rel="stylesheet" href="../bootstrap-4.3.1-dist/css/bootstrap.min.css" />

  </head>

  <body class="d-flex flex-column">
    <div id="page-content">