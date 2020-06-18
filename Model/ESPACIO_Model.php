<?php

//Clase : ESPACIO_Model
//Creado el : 18-06-2020
//Creado por: jdvazquez
//-------------------------------------------------------

class ESPACIO_Model
{

  var $codespacio;
  var $nombreespacio;
  var $superficieespacio;

  var $mysqli;

  //Constructor de la clase

  function __construct($codespacio, $nombreespacio, $superficieespacio)
  {
    $this->codespacio = $codespacio;
    $this->nombreespacio = $nombreespacio;
    $this->superficieespacio = $superficieespacio;

    $this->erroresdatos = array();


    include_once '../Model/Access_DB.php';
    $this->mysqli = ConnectDB();
  }

  //Metodo ADD
  //Inserta en la tabla  de la bd  los valores
  // de los atributos del objeto. Comprueba si la clave/s esta vacia y si 
  //existe ya en la tabla
  function ADD()
  {
    $sql = "SELECT * FROM ESPACIO WHERE CODESPACIO = '" . $this->codespacio . "'";

    if (!$result = $this->mysqli->query($sql)) {
      return 'Error de gestor de base de datos';
    }

    if ($result->num_rows == 1) {  // existe el ESPACIO
      return 'Inserción fallida: el elemento ya existe';
    }

    $sql = "INSERT INTO ESPACIO (
			CODESPACIO,
			NOMBREESPACIO,
			SUPERFICIEESPACIO) 
				VALUES (
					'" . $this->codespacio . "',
					'" . $this->nombreespacio . "',
					'" . $this->superficieespacio . "'
					)";

    if (!$this->mysqli->query($sql)) {
      return 'Error de gestor de base de datos';
    } else {
      return 'Inserción realizada con éxito'; //operacion de insertado correcta
    }
  }


  //funcion de destrucción del objeto: se ejecuta automaticamente
  //al finalizar el script
  function __destruct()
  {
  }


  //funcion SEARCH: hace una búsqueda en la tabla con
  //los datos proporcionados. Si van vacios devuelve todos
  function SEARCH()
  {
    $sql = "SELECT *
			FROM ESPACIO
			WHERE (
				CODESPACIO LIKE '%" . $this->codespacio . "%' AND
				NOMBREESPACIO LIKE '%" . $this->nombreespacio . "%' AND
				SUPERFICIEESPACIO LIKE '%" . $this->superficieespacio . "%'
			)
	";
    if (!$resultado = $this->mysqli->query($sql)) {
      return 'Error de gestor de base de datos';
    }
    return $resultado;
  }

  //funcion DELETE : comprueba que la tupla a borrar existe y una vez
  // verificado la borra
  function DELETE()
  {
    $sql = "	DELETE FROM 
   				ESPACIO
   			WHERE(
   				CODESPACIO = '$this->codespacio'
   			)
   			";

    if ($this->mysqli->query($sql)) {
      $resultado = 'Borrado realizado con éxito';
    } else {
      $resultado = 'Error de gestor de base de datos';
    }
    return $resultado;
  }

  // funcion RellenaDatos: recupera todos los atributos de una tupla a partir de su clave
  function RellenaDatos()
  {
    $sql = "SELECT * 
			FROM ESPACIO
			WHERE (
				(CODESPACIO = '$this->codespacio') 
			)";

    if (!$resultado = $this->mysqli->query($sql)) {
      return 'Error de gestor de base de datos';
    } else {
      $tupla = $resultado->fetch_array();
    }
    return $tupla;
  }

  // funcion Edit: realizar el update de una tupla despues de comprobar que existe
  function EDIT()
  {
    $sql = "UPDATE ESPACIO
			SET 
				NOMBREESPACIO = '$this->nombreespacio',
				SUPERFICIEESPACIO = '$this->superficieespacio'
			WHERE (
				CODESPACIO = '$this->codespacio'
			)
			";
    if ($this->mysqli->query($sql)) {
      $resultado = 'Actualización realizada con éxito';
    } else {
      $resultado = 'Error de gestor de base de datos';
    }
    return $resultado;
  }
}