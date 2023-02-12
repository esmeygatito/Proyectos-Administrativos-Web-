-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-02-2023 a las 15:42:22
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `Area` int(11) NOT NULL,
  `Punto1` varchar(50) DEFAULT NULL,
  `Responsable1` varchar(50) DEFAULT NULL,
  `Contacto1` varchar(50) DEFAULT NULL,
  `Latitud1` double DEFAULT NULL,
  `Longitud1` double DEFAULT NULL,
  `Ampliacion1` varchar(100) DEFAULT NULL,
  `Punto2` varchar(50) DEFAULT NULL,
  `Responsable2` varchar(50) DEFAULT NULL,
  `Contacto2` varchar(50) DEFAULT NULL,
  `Ampliacion2` varchar(100) DEFAULT NULL,
  `Punto3` varchar(50) DEFAULT NULL,
  `Responsable3` varchar(50) DEFAULT NULL,
  `Contacto3` varchar(50) DEFAULT NULL,
  `Ampliacion3` varchar(100) DEFAULT NULL,
  `Punto4` varchar(50) DEFAULT NULL,
  `Responsable4` varchar(50) DEFAULT NULL,
  `Contacto4` varchar(50) DEFAULT NULL,
  `Ampliacion4` varchar(100) DEFAULT NULL,
  `Punto5` varchar(50) DEFAULT NULL,
  `Responsable5` varchar(50) DEFAULT NULL,
  `Contacto5` varchar(50) DEFAULT NULL,
  `Ampliacion5` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`Area`, `Punto1`, `Responsable1`, `Contacto1`, `Latitud1`, `Longitud1`, `Ampliacion1`, `Punto2`, `Responsable2`, `Contacto2`, `Ampliacion2`, `Punto3`, `Responsable3`, `Contacto3`, `Ampliacion3`, `Punto4`, `Responsable4`, `Contacto4`, `Ampliacion4`, `Punto5`, `Responsable5`, `Contacto5`, `Ampliacion5`) VALUES
(1, 'Subdireccion académica', 'Profe Raymundo', '811', 25.69401388888889, -100.26873611111111, 'img/ejemplo.jpg', 'Subdireccion administrativa', 'Profe Victor', '6777', 'img/ejemplo2.jpg', 'Scretaria Administrativa', 'Rien', 'sec.55', 'img/ejemplo2.jpg', 'Scretaria Particular', 'Jean', '877', 'img/ejemplo2.jpg', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `Codigo` int(11) NOT NULL,
  `Punto` varchar(50) NOT NULL,
  `Responsable` varchar(50) DEFAULT NULL,
  `Contacto` varchar(200) DEFAULT NULL,
  `Latitud` double NOT NULL,
  `Longitud` double NOT NULL,
  `Ampliacion` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`Codigo`, `Punto`, `Responsable`, `Contacto`, `Latitud`, `Longitud`, `Ampliacion`) VALUES
(1, 'No es una cancha', 'Choy', '911 ', 25.693858333333335, -100.27097777777777, 'img/ejemplo.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`Area`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`Codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `Area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
