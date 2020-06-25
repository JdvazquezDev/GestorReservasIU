<?php

//Clase : ESPACIO_SEARCH
//Creado el : 18/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


class ESPACIO_SEARCH
{


  function __construct()
  {

    $this->render();
  }
  function render()
  {

    include_once '../View/header.php'; //header necesita los strings
?>
<div>
  <a href='javascript:history.back(1)' class="btn-back"><img src="../View/icons/back.svg"
      alt="back">
  </a>
</div>
<div class="d-flex justify-content-center align-items-center mt-5 mb-5">
  <div class="card text-center bg-light ">
    <div class="card-header bg-dark text-white">
      <h3 id="Buscar espacio"></h3>
    </div>
    <div class="card-body pl-5 pr-5 text-dark">
      <form name='Form' action='../Controller/ESPACIO_Controller.php' method='post'
        onsubmit="return comprobarSubmit();">
        <div class=" form-group mb-1">
          <label class="control-label" id="Código"></label> : <input type='text' name='CODESPACIO'
            id='CODESPACIO' class="form-control" value=''>
        </div>
        <div class="form-group mb-1">
          <label class="control-label" id="Nombre"></label> : <input type='text'
            name='NOMBREESPACIO' id='NOMBREESPACIO' class="form-control" value=''>
        </div>
        <div class="form-group mb-1">
          <label class="control-label" id="Superficie"></label> (m<small class="sup">2</small>):
          <input type='text' name='SUPERFICIEESPACIO' id='SUPERFICIEESPACIO' class="form-control"
            value=''>
        </div>

        <div class="pl-5 pr-5 card-footer bg-light mt-3">
          <button class="btn btn-info btn-lg" name='action' value='SEARCH' id='Search'></button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
    include '../View/footer.php';
  } //fin metodo render

}

?>