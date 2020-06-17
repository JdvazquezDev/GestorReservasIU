<?php

//Clase : USUARIO_SHOWCURRENT
//Creado el : 06/10/2019
//Creado por: jdvazquez
//-------------------------------------------------------


class USUARIO_SHOWCURRENT
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
<div class="d-flex justify-content-center align-items-center mt-5 mb-5">
  <div class="card text-center bg-light ">
    <div class="card-header bg-dark text-white">
      <h3 id="Showcurrent"></h3>
    </div>

    <div class="card-body pl-5 pr-5 text-dark">
      <form name='Form' action='../Controller/USUARIO_Controller.php' method='post'
        onsubmit="return comprobarSubmit();">
        <div class=" form-group">
          <label class="control-label" id="Login"></label> : <input type='text' name='LOGIN'
            id='LOGIN' class="form-control" value='<?php echo $this->tupla['LOGIN']; ?>' readonly>
        </div>
        <div class="form-group">
          <label class="control-label" id="Contraseña"></label> : <input type='password'
            name='PASSWORD' id='PASSWORD' class="form-control"
            value='<?php echo $this->tupla['PASSWORD']; ?>' readonly>
        </div>
        <div class="form-group">
          <label class="control-label">DNI</label> : <input type='text' name='DNI' id='DNI'
            class="form-control" value='<?php echo $this->tupla['DNI']; ?>' readonly>
        </div>
        <div class="form-group">
          <label class="control-label" id="Nombre"></label> : <input type='text' name='NOMBRE'
            id='NOMBRE' class="form-control" value='<?php echo $this->tupla['NOMBRE']; ?>' readonly>
        </div>
        <div class="form-group">
          <label class="control-label" id="Apellidos"></label> : <input type='text' name='APELLIDOS'
            id='APELLIDOS' class="form-control" value='<?php echo $this->tupla['APELLIDOS']; ?>'
            readonly>
        </div>
        <div class="form-group">
          <label class="control-label" id="Email"></label> : <input type='text' name='EMAIL'
            id='EMAIL' class="form-control" value='<?php echo $this->tupla['EMAIL']; ?>' readonly>
        </div>
        <div class="form-group">
          <label class="control-label" id="Rol"></label> : <input type='text' name='ROL' id='ROL'
            class="form-control" value='<?php echo $this->tupla['ROL']; ?>' readonly>
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