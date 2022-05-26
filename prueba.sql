-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2022 a las 01:18:12
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `registro` (IN `_nombres_usuarios` VARCHAR(50), IN `_apellidos_usuarios` VARCHAR(50), IN `_edad` INT(10), IN `_fechaRegistro_usuarios` DATE, IN `_rol_usuarios` VARCHAR(50), IN `_state` VARCHAR(50), IN `_user` VARCHAR(50), IN `_password` VARCHAR(50))   BEGIN
	INSERT INTO usuarios
	(nombres_usuarios, apellidos_usuarios, edad, fechaRegistro_usuarios,user,password,rol_usuarios) 
	VALUES (_nombres_usuarios,_apellidos_usuarios,_edad,_fechaRegistro_usuarios,_user,_password,_rol_usuarios);
    
   	SELECT 'true' INTO _state;
    SELECT _state;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombres_usuarios` varchar(50) NOT NULL,
  `apellidos_usuarios` varchar(50) NOT NULL,
  `edad` int(10) NOT NULL,
  `fechaRegistro_usuarios` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `rol_usuarios` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombres_usuarios`, `apellidos_usuarios`, `edad`, `fechaRegistro_usuarios`, `user`, `password`, `rol_usuarios`) VALUES
(8, 'usuarionormal', 'normal', 1, '2022-05-13', 'normal', 'normal', 'estandar'),
(9, 'admin', 'admin', 2, '2022-05-13', 'admin', 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
