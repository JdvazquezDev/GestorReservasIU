-- jdvazquez - 09/06/2020
-- script de creación de la bd, usuario, asignación de privilegios a ese usuario sobre la bd
-- creación de tabla e insert sobre la misma.
--
-- CREAR LA BD BORRANDOLA SI YA EXISTIESE
--
DROP DATABASE IF EXISTS `IU2018`;
CREATE DATABASE `IU2018` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
--
-- SELECCIONAMOS PARA USAR
--
USE `IU2018`;
--
-- DAMOS PERMISO USO Y BORRAMOS EL USUARIO QUE QUEREMOS CREAR POR SI EXISTE
--
GRANT USAGE ON * . * TO `iu2018`@`localhost`;
	DROP USER `iu2018`@`localhost`;
--
-- CREAMOS EL USUARIO Y LE DAMOS PASSWORD,DAMOS PERMISO DE USO Y DAMOS PERMISOS SOBRE LA BASE DE DATOS.
--
CREATE USER IF NOT EXISTS `iu2018`@`localhost` IDENTIFIED BY 'pass2018';
GRANT ALL PRIVILEGES ON `IU2018`.* TO `iu2018`@`localhost` WITH GRANT OPTION;


--
-- Estructura de tabla para la tabla `ESPACIO`
--

CREATE TABLE `ESPACIO` (
  `CODESPACIO` varchar(10) NOT NULL,
  `NOMBREESPACIO` varchar(30) NOT NULL,
  `SUPERFICIEESPACIO` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------


--
-- Estructura de tabla para la tabla `USUARIOS`
--

CREATE TABLE `USUARIO` (
  `LOGIN` varchar(15) NOT NULL,
  `PASSWORD` varchar(128) NOT NULL,
  `DNI` varchar(9) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APELLIDOS` varchar(50) NOT NULL,
  `EMAIL` varchar(60) NOT NULL, 
  `ROL` enum('admin','usuario') DEFAULT 'usuario'
  ) ENGINE=MyISAM DEFAULT CHARSET=utf8;



--
-- Estructura de tabla para la tabla `RESERVA`
--

CREATE TABLE `RESERVA` (
  `CODRESERVA` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `FECHARESERVA` date NOT NULL,
  `HORARIOINICIORESERVA` time NOT NULL,
  `HORARIOFINRESERVA` time NOT NULL,
  `USORESERVA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Indices de la tabla `ESPACIO`
--

ALTER TABLE `ESPACIO`
  ADD PRIMARY KEY (`CODESPACIO`);


--
-- Indices de la tabla `USUARIOS`
--

ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`LOGIN`),
  ADD UNIQUE KEY `DNI` (`DNI`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);