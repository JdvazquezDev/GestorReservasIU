<?php

//Clase : ESPACIO_SHOWALL
//Creado el : 18/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


class ESPACIO_SHOWALL
{


  function __construct($lista, $datos)
  {
    $this->datos = $datos;
    $this->lista = $lista;
    $this->render();
  }

  function render()
  {

    include '../View/header.php'; //header necesita los strings
?>
<h3 class="text-center font-italic" id="Showall"></h3>
<div
  class="btn-showall-top d-flex justify-content-center align-items-center border-top border-secondary mt-1">
  <a href='../Controller/ESPACIO_Controller.php?action=ADD'><img src="../View/icons/add.svg"></a>

  <a href='../Controller/ESPACIO_Controller.php?action=SEARCH'><img
      src="../View/icons/search.svg"></a>
</div>
<div class="table-responsive">
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <?php
            foreach ($this->lista as $titulo) {
            ?>
        <th scope="col" class=" text-center"><?php echo $titulo; ?></th>
        <?php
            }
            ?>
        <th colspan="3" class=" text-center" id="Acciones"></th>


      </tr>
      <?php
          foreach ($this->datos as $fila) {
          ?>
      <tr>
        <?php
              foreach ($this->lista as $columna) {
              ?>
        <td class="text-center"><?php echo $fila[$columna]; ?></td>
        <?php
              }
              ?>

        <td class="pl-0 pr-0">

          <a class="btn-showall-actions"
            href='../Controller/ESPACIO_Controller.php?action=EDIT&CODESPACIO=<?php echo $fila['CODESPACIO']; ?>'><img
              src="../View/icons/edit.svg"> </a>
        </td>
        <td class="pl-0 pr-0">
          <a class="btn-showall-actions"
            href='../Controller/ESPACIO_Controller.php?action=DELETE&CODESPACIO=<?php echo $fila['CODESPACIO']; ?>'><img
              src="../View/icons/delete.svg"></a>
        </td>
        <td class="pl-0 pr-0">
          <a class="btn-showall-actions"
            href='../Controller/ESPACIO_Controller.php?action=SHOWCURRENT&CODESPACIO=<?php echo $fila['CODESPACIO']; ?>''> <img src="../View/icons/avatar.svg"></a>
							
        </td>
      </tr>
      <?php
          }
      ?>
    </thead>
  </table>
</div>
</div>

<?php
    include '../View/footer.php';
  } //fin metodo render

}

?>