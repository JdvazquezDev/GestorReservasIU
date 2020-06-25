<?php

//Clase : USUARIO_EDIT
//Creado el : 17/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


class USUARIO_EDIT
{

  function __construct($tupla)
  {
    $this->tupla = $tupla;
    $this->render();
  }

  function render()
  {

    include '../View/header.php'; //header necesita los strings
?>
<div>
  <a href='javascript:history.back(1)' class="btn-back"><img src="../View/icons/back.svg"
      alt="back">
  </a>
</div>

<div class="d-flex justify-content-center align-items-center mt-5 mb-5">
  <div class="card text-center bg-light ">
    <div class="card-header bg-dark text-white">
      <h3 id="Editar usuario"></h3>
    </div>

    <div class="card-body pl-5 pr-5 text-dark">
      <form name='Form' action='../Controller/USUARIO_Controller.php' method='post'
        onsubmit="return comprobarSubmit();">
        <div class=" form-group">
          <label class="control-label" id="Login"></label> : <input type='text' name='LOGIN'
            id='LOGIN' class="form-control" value='<?php echo $this->tupla['LOGIN']; ?>'>
        </div>
        <div class="form-group">
          <label class="control-label" id="Contraseña"></label> : <input type='password'
            name='PASSWORD' id='PASSWORD' class="form-control"
            value='<?php echo $this->tupla['PASSWORD']; ?>'>
        </div>
        <div class="form-group">
          <label class="control-label">DNI</label> : <input type='text' name='DNI' id='DNI'
            class="form-control" value='<?php echo $this->tupla['DNI']; ?>'>
        </div>
        <div class="form-group">
          <label class="control-label" id="Nombre"></label> : <input type='text' name='NOMBRE'
            id='NOMBRE' class="form-control" value='<?php echo $this->tupla['NOMBRE']; ?>'>
        </div>
        <div class="form-group">
          <label class="control-label" id="Apellidos"></label> : <input type='text' name='APELLIDOS'
            id='APELLIDOS' class="form-control" value='<?php echo $this->tupla['APELLIDOS']; ?>'>
        </div>
        <div class="form-group">
          <label class="control-label" id="Email"></label> : <input type='text' name='EMAIL'
            id='EMAIL' class="form-control" value='<?php echo $this->tupla['EMAIL']; ?>'>
        </div>
        <div class="form-group mb-1">
          <!-- Rol -->
          <label class="control-label" for="ROL" id="Rol"></label>
          <div class="card text-center">
            <?php if ($this->tupla['ROL'] == 'usuario') {

                ?>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="ROL" id="admin" value="admin">
              <label class="form-check-label" for="admin">Admin</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="ROL" id="usuario" value="usuario"
                checked readonly>
              <label class="form-check-label" for="usuario">User
              </label>
            </div>
            <?php
                } else {
                ?>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="ROL" id="admin" value="admin"
                checked>
              <label class="form-check-label" for="admin">Admin</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="ROL" id="usuario" value="usuario">
              <label class="form-check-label" for="usuario">User
              </label>
            </div>
            <?php
                }
                ?>
          </div>
        </div>
        <div class="pl-5 pr-5 card-footer bg-light mt-3">
          <button class="btn btn-info btn-lg" name='action' value='EDIT' id='Edit'></button>
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