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
<div>
  <a href='javascript:history.back(1)' class="btn-back"><img src="../View/icons/back.svg"
      alt="back">
  </a>
</div>
<div class="index-container h-75 d-flex justify-content-center">

  <div class="mr-5 ml-5 text-center d-flex flex-column">
    <h2 class="m-4">ReservasIU</h2>
    <div class="index-image-container d-flex justify-content-center">
      <img src="../View/img/index.jpg" class="img-thumbnail" alt="Index img">
    </div>
    <p class="mt-3 ml-5 mr-5" id="Texto index"></p>
  </div>

</div>


<?php
    include '../View/footer.php';
  }
}
?>