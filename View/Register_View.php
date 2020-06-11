<?php

//Clase : Register
//Creado el : 11/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


class Register
{


  function __construct()
  {
    $this->render();
  }

  function render()
  {

    include '../View/layout.php'; //header necesita los strings
?>

<div class="register-container d-flex justify-content-center align-items-center mt-5 mb-5">
  <div class="card text-center bg-light ">
    <div class="card-header bg-dark text-white">
      <div>
        <h2><?php echo $strings['Crear cuenta'] ?></h2>
        <small><?php echo $strings['Si ya tienes una cuenta, inicia sesión'] ?> <a
            href="../Controller/Login_Controller.php"><?php echo $strings['aquí'] ?></a></small>
      </div>
    </div>
    <form class="form-horizontal" action='' method="POST">
      <fieldset>
        <div class="card-body pl-5 pr-5 text-dark">

          <div class="form-group">
            <!-- Login -->
            <label class="control-label" for="LOGIN"><?php echo $strings['Login'] ?></label>
            <div class="controls">
              <input type="text" id="LOGIN" name="LOGIN" placeholder="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <!-- Password -->
            <label class="control-label" for="PASSWORD"><?php echo $strings['Contraseña'] ?></label>
            <div class="controls">
              <input type="password" id="PASSWORD" name="PASSWORD" placeholder=""
                class="form-control">
            </div>
          </div>
          <div class="form-group">
            <!-- DNI -->
            <label class="control-label" for="DNI">DNI</label>
            <div class="controls">
              <input type="text" id="DNI" name="DNI" placeholder="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <!-- Nombre -->
            <label class="control-label" for="NOMBRE"><?php echo $strings['Nombre'] ?></label>
            <div class="controls">
              <input type="text" id="NOMBRE" name="NOMBRE" placeholder="" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <!-- Apellidos -->
            <label class="control-label" for="APELLIDOS"><?php echo $strings['Apellidos'] ?></label>
            <div class="controls">
              <input type="text" id="APELLIDOS" name="APELLIDOS" placeholder=""
                class="form-control">
            </div>
          </div>


          <div class="form-group">
            <!-- E-mail -->
            <label class="control-label" for="EMAIL"><?php echo $strings['Email'] ?></label>
            <div class="controls">
              <input type="text" id="EMAIL" name="EMAIL" placeholder="" class="form-control">
            </div>
          </div>

          <div class="form-group ">
            <!-- Rol -->
            <label class="control-label" for="ROL"><?php echo $strings['Rol'] ?></label>
            <div class="card">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="ROL" id="admin" value="admin">
                <label class="form-check-label" for="admin">Admin</label>
              </div>
              <div class="form-check ">
                <input class="form-check-input" type="radio" name="ROL" id="usuario" value="usuario"
                  checked>
                <label class="form-check-label"
                  for="usuario"><?php echo $strings['Usuario'] ?></label>
              </div>
            </div>
          </div>
        </div>

        <div class="card-footer bg-light">
          <div class="form-group">
            <!-- Button -->
            <div class="controls">
              <button type="submit"
                class="btn btn-info btn-lg"><?php echo $strings['Crear cuenta'] ?></button>
            </div>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>
<?php
    include '../View/footer.php';
  } //fin metodo render
} //fin REGISTER
?>