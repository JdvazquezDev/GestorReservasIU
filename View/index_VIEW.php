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
    include_once '../View/layout.php';
    include '../View/header.php';
?>



<h5>Index</h5>


<?php
    include '../View/footer.php';
  }
}
?>