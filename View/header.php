<?php

//Clase : Message
//Creado el : 11/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------
$link = $_SERVER['PHP_SELF'];
$link_array = explode('/', $link);
$page = end($link_array);

include_once '../View/layout.php';
?>

<header>
  <div class="header-top bg-dark d-flex justify-content-between border-bottom border-light">
    <a class="h3 a-link text-white ml-4 mt-2 "
      href="../Controller/Index_Controller.php"><strong>ReservasIU</strong></a>
    <div class="language-selector mr-2">

      <div class="languages-header-container d-flex ">
        <button class="mt-2 ml-2 rounded languages-btn-spanish" id="idioma" name="idioma"
          onclick="cambio_idioma('ES')" value="SPANISH"></button>
        <button class="mt-2 ml-2 rounded languages-btn-gallaecian" id="idioma" name="idioma"
          onclick="cambio_idioma('GAL')" value="GALLAECIAN"></button>
        <button class="mt-2 ml-2 rounded languages-btn-english" id="idioma" name="idioma"
          onclick="cambio_idioma('EN')" value="ENGLISH"></button>
      </div>
    </div>
    <?php
    if ($page != 'Register_Controller.php' && $page != 'Login_Controller.php') {
    ?>
    <p class="h6 mt-3 text-white"><span id="Usuario"></span>: <span>
        <strong><?php echo $_SESSION['LOGIN'] ?></strong></span>
    </p>

    <a class="a-link mr-4" href='../Functions/Desconectar.php'>
      <img class="logout-icon ml-4 mt-2" src='../View/icons/logout.svg'>
    </a>
    <?php
    }
    ?>
  </div>

  <?php

  if ($page != 'Register_Controller.php' && $page != 'Login_Controller.php') {



  ?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark d-flex justify-content-end">

    <button class="navbar-toggler" type="button" data-toggle="collapse"
      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active mr-3">
          <a id="Inicio" class="nav-link" href="../Controller/Index_Controller.php"><span
              class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mr-3">
          <a id="Usuarios" class="nav-link" href="../Controller/USUARIO_Controller.php"></a>
        </li>
        <li class="nav-item mr-3">
          <a id="Espacios" class="nav-link" href="#"></a>
        </li>
        <li class="nav-item mr-3">
          <a id="Reservas" class="nav-link" href="#"></a>
        </li>
        <li class="nav-item mr-3">
          <a id="Reservas" class="nav-link" href="#"></a>
        </li>
      </ul>
    </div>
  </nav>
  <?php
  }
  ?>
</header>