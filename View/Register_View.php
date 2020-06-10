<div class="register-container d-flex justify-content-center align-items-center mt-5 mb-5">
  <div class="card text-center bg-light ">
    <div class="card-header bg-dark text-white">
      <div>
        <h2>Crear cuenta</h2>
        <small>Si ya tienes una cuenta, inicia sesion <a href="">aqui</a></small>
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
          <div class="form-group">
            <!-- Nombre -->
            <label class="control-label" for="NOMBRE">Nombre</label>
            <div class="controls">
              <input type="text" id="NOMBRE" name="NOMBRE" placeholder="" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <!-- Apellidos -->
            <label class="control-label" for="APELLIDOS">Apellidos</label>
            <div class="controls">
              <input type="text" id="APELLIDOS" name="APELLIDOS" placeholder=""
                class="form-control">
            </div>
          </div>

          <div class="form-group">
            <!-- DNI -->
            <label class="control-label" for="DNI">DNI</label>
            <div class="controls">
              <input type="text" id="dni" name="password_confirm" placeholder=""
                class="form-control">
            </div>
          </div>

          <div class="form-group">
            <!-- E-mail -->
            <label class="control-label" for="EMAIL">E-mail</label>
            <div class="controls">
              <input type="text" id="EMAIL" name="EMAIL" placeholder="" class="form-control">
            </div>
          </div>

          <div class="form-group ">
            <!-- Rol -->
            <label class="control-label" for="ROL">ROL</label>
            <div class="card">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="ROL" id="admin" value="admin">
                <label class="form-check-label" for="admin">Admin</label>
              </div>
              <div class="form-check ">
                <input class="form-check-input" type="radio" name="ROL" id="usuario" value="usuario"
                  checked>
                <label class="form-check-label" for="usuario">Usuario</label>
              </div>
            </div>
          </div>
        </div>

        <div class="card-footer bg-light">
          <div class="form-group">
            <!-- Button -->
            <div class="controls">
              <button class="btn btn-info btn-lg">Crear cuenta</button>
            </div>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>