-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 11-11-2020 a las 07:51:32
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reserbus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `clave_acceso` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `nombre` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ap_paterno` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `ap_materno` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `correo` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `tipo_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `clave_acceso`, `nombre`, `ap_paterno`, `ap_materno`, `direccion`, `telefono`, `correo`, `tipo_usuario`) VALUES
(1, '*SoyAdmin*', 'ElAdmin', NULL, NULL, 'Tuxtla,Centro', '9161128013', 'a180106@unach.com', 1),
(2, '*SoyViajero*', 'Marcelo', 'Vidal', 'Solis', 'El jobo, Tuxtla Gutierrez', '9161128013', 'example@gmail.com', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
