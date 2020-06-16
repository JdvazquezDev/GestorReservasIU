<?php

//Clase : Login
//Creado el : 11/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


class Login
{
  function __construct()
  {
    $this->render();
  }

  function render()
  {

    include '../View/layout.php';
    include '../View/header.php';

?>


<div class="login-container d-flex justify-content-center align-items-center mt-5 mb-5">
  <div class="card text-center bg-light ">
    <div class="card-header bg-dark text-white">
      <div>
        <h2 id="Iniciar sesión"></h2>
        <p><small id="Si no tienes cuenta, crea una "></small><small><a id="aquí"
              class="text-warning" href="../Controller/Register_Controller.php"></a></small></p>
      </div>
    </div>

    <form class="form-horizontal" action='' method="POST">
      <fieldset>
        <div class="card-body pl-5 pr-5 text-dark">

          <div class="form-group">
            <!-- Login -->
            <label class="control-label" for="LOGIN" id="Login"></label>
            <div class="controls">
              <input type="text" id="LOGIN" name="LOGIN" placeholder="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <!-- Password -->
            <label class="control-label" for="PASSWORD" id="Contraseña"></label>
            <div class="controls">
              <input type="password" id="PASSWORD" name="PASSWORD" placeholder=""
                class="form-control">
            </div>
          </div>
        </div>
        <div class="card-footer bg-light">
          <div class="form-group">
            <!-- Button -->
            <div class="controls">
              <button type="submit" class="btn btn-success btn-lg"><span
                  id="Entrar"></span></button>
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

} //fin Login

?>