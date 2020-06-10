<?php

//Clase : index_View
//Creado el : 10/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


class Index
{
  function __construct()
  {
    $this->render();
  }

  function render()
  {
    include 'Locale/Strings_SPANISH.php';
    include 'View/layout.php';
    include 'View/header.php';
?>

<div>
  <h1>Página de bienvenida</h1>
</div>




<?php
    include 'View/footer.php';
  }
}
?>