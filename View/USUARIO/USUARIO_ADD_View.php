<?php

//Clase : USUARIO_ADD
//Creado el : 16/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


class USUARIO_ADD
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
      <h3 id="Crear usuario"></h3>
    </div>
    <div class="card-body pl-5 pr-5 text-dark">
      <form name='Form' action='../Controller/USUARIO_Controller.php' method='post'
        onsubmit="return comprobarSubmit();">
        <div class=" form-group mb-1">
          <label class="control-label" id="Login"></label> : <input type='text' name='LOGIN'
            id='LOGIN' class="form-control" value=''>
        </div>
        <div class="form-group mb-1">
          <label class="control-label" id="Contraseña"></label> : <input type='password'
            name='PASSWORD' id='PASSWORD' class="form-control" value=''>
        </div>
        <div class="form-group mb-1">
          <label class="control-label">DNI</label> : <input type='text' name='DNI' id='DNI'
            class="form-control" value=''>
        </div>
        <div class="form-group mb-1">
          <label class="control-label" id="Nombre"></label> : <input type='text' name='NOMBRE'
            id='NOMBRE' class="form-control" value=''>
        </div>
        <div class="form-group mb-1">
          <label class="control-label" id="Apellidos"></label> : <input type='text' name='APELLIDOS'
            id='APELLIDOS' class="form-control" value=''>
        </div>
        <div class="form-group mb-1">
          <label class="control-label" id="Email"></label> : <input type='text' name='EMAIL'
            id='EMAIL' class="form-control" value=''>
        </div>
        <div class="form-group mb-1">
          <!-- Rol -->
          <label class="control-label" for="ROL" id="Rol"></label>
          <div class="card text-center">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="ROL" id="admin" value="admin">
              <label class="form-check-label" for="admin">Admin</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="ROL" id="usuario" value="usuario"
                checked>
              <label class="form-check-label" for="usuario">User
              </label>
            </div>
          </div>
        </div>
        <div class="pl-5 pr-5 card-footer bg-light mt-3">
          <button class="btn btn-success btn-lg" name='action' value='ADD' id='Add'></button>
        </div>
      </form>
    </div>

  </div>
</div>

<?php
    include '../View/footer.php';
  } //fin metodo render

} //fin REGISTER

?>