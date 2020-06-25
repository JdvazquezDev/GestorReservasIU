<?php

//Clase : RESERVA_ADD
//Creado el : 19/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


class RESERVA_ADD
{

  function __construct($tupla)
  {
    $this->tupla = $tupla;
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
      <h3 id="Crear reserva"></h3>
    </div>
    <div class="card-body pl-5 pr-5 text-dark">
      <form name='Form' action='../Controller/RESERVA_Controller.php' method='post'
        onsubmit="return comprobarSubmit();">

        <div class="form-group">
          <label class="control-label" id="Código"></label> : <input type='text' name='CODRESERVA'
            id='CODRESERVA' class="form-control" value=''>
        </div>
        <div class=" form-group mb-1">
          <label class="control-label" id="Espacio"></label> :
          <select name='CODESPACIO' class="form-control">
            <option value=''></option>
            <?php
                foreach ($this->tupla as $espacio) {
                ?>
            <option value='<?php echo $espacio['CODESPACIO']; ?>' class="text-center">
              <?php echo $espacio['NOMBREESPACIO']; ?></option>
            <?php
                }
                ?>
          </select>
        </div>
        <div class="form-group">
          <label class="control-label" id="Creador"></label> : <input type='text'
            name='LOGINCREADOR' id='LOGINCREADOR' class="form-control"
            value='<?php echo $_SESSION['LOGIN'] ?>' readonly>
        </div>
        <div class="form-group mb-1">
          <label class="control-label" id="Fecha reserva"></label> : <input type='date'
            name='FECHARESERVA' id='FECHARESERVA' class="form-control"
            min="<?php echo date('Y-m-d'); ?>" value='' onkeydown="return false">
        </div>
        <div class="form-group mb-1">
          <label class="control-label" id="Hora inicio"></label> : <input type='time'
            value="00:00:00" step="900" name='HORARIOINICIORESERVA' id='HORARIOINICIORESERVA'
            class="form-control">
        </div>
        <div class="form-group mb-1">
          <label class="control-label" id="Hora fin"></label> : <input type='time' value="00:00:00"
            step="900" name='HORARIOFINRESERVA' id='HORARIOFINRESERVA' class="form-control"
            value=''>
        </div>
        <div class="form-group">
          <label class="control-label" id="Uso reserva"></label> : <input type='text'
            name='USORESERVA' id='USORESERVA' class="form-control">
        </div>
        <div class=" form-group mb-1">
          <label class="control-label" id="VERIFICADA"></label> : <input type='text'
            name='VERIFICADA' value='false' class="form-control" readonly>

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

}

?>