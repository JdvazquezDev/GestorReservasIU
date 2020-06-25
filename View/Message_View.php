<?php

//Clase : Message
//Creado el : 11/06/2020
//Creado por: jdvazquez
//-------------------------------------------------------


class Message
{

	private $string;
	private $volver;

	function __construct($string, $volver)
	{
		$this->string = $string;
		$this->volver = $volver;
		$this->render();
	}

	function render()
	{
		include_once '../View/layout.php';
		include '../View/header.php';
?>
<div>
  <a href='javascript:history.back(1)' class="btn-back"><img src="../View/icons/back.svg"
      alt="back">
  </a>
</div>
<div class="message-container card d-flex justify-content-center">
  <p>
    <h4 class="text-center" id="<?php
																		echo $this->string;
																		?>">
    </h4>
  </p>


  <?php

		echo '<a class="a-back text-center m-4 font-weight-bold" id="Volver" href=\'' . $this->volver . "'> </a> </div>";
		include '../View/footer.php';
	} //fin metodo render

}