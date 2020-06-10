<div class="login-container d-flex justify-content-center align-items-center mt-5 mb-5">
  <div class="card text-center bg-light ">
    <div class="card-header bg-dark text-white">
      <div>
        <h2>Iniciar sesión</h2>
        <small>Si no tienes cuenta, crea una cuenta <a href="">aqui</a></small>
      </div>
    </div>

    <form class="form-horizontal" action='' method="POST">
      <fieldset>
        <div class="card-body pl-5 pr-5 text-dark">

          <div class="form-group">
            <!-- Login -->
            <label class="control-label" for="LOGIN">Login</label>
            <div class="controls">
              <input type="text" id="LOGIN" name="LOGIN" placeholder="" class="form-control">
            </div>
          </div>
          <div class="form-group">
            <!-- Password -->
            <label class="control-label" for="PASSWORD">Contraseña</label>
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
              <button class="btn btn-success btn-lg">Iniciar sesión</button>
            </div>
          </div>
        </div>

      </fieldset>
    </form>
  </div>
</div>