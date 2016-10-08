-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2013 a las 06:13:56
-- Versión del servidor: 5.5.27-log
-- Versión de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `alquilauto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencia`
--

CREATE TABLE IF NOT EXISTS `agencia` (
  `codigo_a` int(10) NOT NULL,
  `ciudad_a` text NOT NULL,
  `direccion_a` text NOT NULL,
  `telefono_a` int(21) NOT NULL,
  PRIMARY KEY (`codigo_a`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Datos de la agencia de reservas.';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula_c` int(10) NOT NULL,
  `nombre_c` text NOT NULL,
  `email_c` varchar(30) NOT NULL,
  `pais_c` text NOT NULL,
  `telefono_c` int(21) NOT NULL,
  PRIMARY KEY (`cedula_c`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Datos del cliente.';

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`cedula_c`, `nombre_c`, `email_c`, `pais_c`, `telefono_c`) VALUES
(2738643, 'antonio marcucci', 'amarcucci@gmail.com', 'Angola', 2147483647),
(6452346, 'Isabel Jerez', 'iszaux@gmail.com', 'Chile', 2147483647),
(8032072, 'Leybis Uzcatg', 'leyb@ht.com', 'PerÃº', 2147483647),
(20123456, 'Yohandri Hernandez', 'hyohandri@hotmail.com', 'CanadÃ¡', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE IF NOT EXISTS `reserva` (
  `codigo_r` int(14) NOT NULL AUTO_INCREMENT,
  `cedula_c` int(10) NOT NULL,
  `codigo_v` int(8) NOT NULL,
  `fecha_e_r` varchar(11) NOT NULL,
  `fecha_s_r` varchar(11) NOT NULL,
  `hora_e_r` varchar(7) NOT NULL,
  `hora_s_r` varchar(7) NOT NULL,
  `portabebe_r` text NOT NULL,
  `gps_r` text NOT NULL,
  `coment_r` varchar(255) NOT NULL,
  `precio_r` varchar(12) NOT NULL,
  `estado_r` varchar(12) NOT NULL,
  `horaReserva_r` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`codigo_r`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Datos de la reserva.' AUTO_INCREMENT=76 ;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`codigo_r`, `cedula_c`, `codigo_v`, `fecha_e_r`, `fecha_s_r`, `hora_e_r`, `hora_s_r`, `portabebe_r`, `gps_r`, `coment_r`, `precio_r`, `estado_r`, `horaReserva_r`) VALUES
(30, 8032072, 5, '31/07/2013', '22/07/2013', '16:00', '08:00', 'No', 'No', 'Sin coment.', '1036', 'D', '2013-07-20 19:01:25'),
(32, 123456, 1, '30/07/2013', '23/07/2013', '15:00', '11:00', 'No', 'Si', 'Otro tlf 02742667288', '2490', 'SR', '2013-07-20 21:08:41'),
(60, 2738643, 5, '31/07/2013', '30/07/2013', '12:00', '12:00', 'Si', 'Si', 'Sin chofer', '1036', 'SR', '2013-07-21 01:07:11'),
(61, 23723708, 1, '31/07/2013', '30/07/2013', '12:00', '12:00', 'Si', 'Si', 'Recoger en El Vigia', '2490', 'A', '2013-07-21 01:08:48'),
(64, 20123456, 4, '29/07/2013', '24/07/2013', '12:00', '10:00', 'Si', 'Si', 'no.', '', 'A', '2013-07-21 07:42:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE IF NOT EXISTS `vehiculo` (
  `codigo_v` int(8) NOT NULL,
  `modelo_v` varchar(25) NOT NULL,
  `tipo_v` varchar(25) NOT NULL,
  `marca_v` varchar(25) NOT NULL,
  PRIMARY KEY (`codigo_v`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Datos del vehículo.';

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`codigo_v`, `modelo_v`, `tipo_v`, `marca_v`) VALUES
(1, 'Cherokee', 'RUS', 'Jeep'),
(2, 'Corsa', 'CS', 'Chevrolet'),
(3, 'Arauca', 'CA', 'Chery'),
(4, 'Elantra 2007', 'SA', 'Hyundai'),
(5, 'Fiesta 2012', 'CA', 'Ford');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
