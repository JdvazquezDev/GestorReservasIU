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
<div class="message-container card d-flex justify-content-center">
  <p>
    <h3>
      <?php
					echo $this->string;
					?>
    </h3>
  </p>
</div>


<?php

		echo '<a id="Volver"href=\'' . $this->volver . "'> </a>";
		include '../View/footer.php';
	} //fin metodo render

}