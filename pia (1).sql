-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-03-2023 a las 04:16:35
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
(1, 'Biblioteca', 'Raquel Cervantes', 'biblioteca.eiao@uanl.edu.mx', 25.69457, -100.26886, 'img/area1/biblioteca.jpg', '', '', '', 'img/area1/biblioteca.jpg', '', '', '', 'img/area1/biblioteca.jpg', '', '', '', 'img/area1/biblioteca.jpg', '', '', '', 'img/area1/biblioteca.jpg'),
(2, 'Tesorería', 'Jesús Chávez', 'tesoreriaeiao@gmail.com', 25.69436, -100.26891, 'img/area2/secretaria-academica.jpg', 'Secretaría académica', 'Paulina Tijerina', 'secacademica.eiao@uanl.edu.mx', 'img/area2/secretaria-academica.jpg', '', '', '', 'img/area2/secretaria-academica.jpg', '', '', '', 'img/area2/secretaria-academica.jpg', '', '', '', 'img/area2/secretaria-academica.jpg'),
(3, 'Tipografía y emisión', 'Jorge Álvarez', 'evaluacioneiao@hotmail.com', 25.6943, -100.2688, 'img/area3/tipografia-y-emision.jpg', 'Redes y equipo de cómputo', 'Carlos Rafael Treviño López', 'Acudir directamente', 'img/area3/redes-y-equipos-de-computo.jpg', 'Recursos Humanos', 'Asael Ríos', 'Ext. 108', 'img/area3/recursos-humanos.jpg', 'Servicios Escolares', 'Selene Marlene González Solis', 'escolar.eiao@uanl.edu.mx', 'img/area3/servicios-escolares.jpg', '', '', '', 'img/area3/tipografia-y-emision.jpg'),
(4, 'Secretaría Administrativa', '-', '-', 25.69409, -100.26874, 'img/area4/area-4.jpg', 'Secretaría Particular', '-', '-', 'img/area4/area-4.jpg', 'Secretaría Técnica', '-', '-', 'img/area4/area-4.jpg', '', '', '', 'img/area4/area-4.jpg', '', '', '', 'img/area4/area-4.jpg'),
(5, 'Subdirección Académica', 'Raymundo Carrizales', '-', 25.69439, -100.26869, 'img/area5/subdireccion-academica.jpg', 'Becas', 'Esmeralda Mendoza', 'Ext. 123', 'img/area5/departamento-de-becas.jpg', '', '', '', 'img/area5/area-5.jpg', '', '', '', 'img/area5/subdireccion-academica.jpg', '', '', '', 'img/area5/area-5.jpg'),
(6, 'Difusión e imagen', 'Isaac Sánchez', 'difusioneimagen.eiao@uanl.edu.mx', 25.69409, -100.26883, 'img/area6/difusion-e-imagen.jpg', 'Horarios', 'Isaac Martínez', 'horarios.eiao@gmail.com', 'img/area6/difusion-e-imagen.jpg', '', '', '', 'img/area6/horarios.jpg', 'Capacitación y Desarrollo Humano', 'Rosbytha D. Alejo', 'Ext. 130', 'img/area6/educacion-continua&capacitacion-y-desarrollo-humano.jpg', 'Educación Continua', 'Erika Vázquez', 'Ext. 131', 'img/area6/educacion-continua&capacitacion-y-desarrollo-humano.jpg'),
(7, 'Formación para el Trabajo', 'Juan Castor', '-', 25.69386, -100.27015, 'img/area7/formacion-para-el-trabajo.jpg', '', '', '', 'img/area7/formacion-para-el-trabajo.jpg', '', '', '', 'img/area7/formacion-para-el-trabajo.jpg', '', '', '', 'img/area7/formacion-para-el-trabajo.jpg', '', '', '', 'img/area7/formacion-para-el-trabajo.jpg'),
(8, 'Vinculación y bolsa de trabajo', 'Rafael Martínez', 'vinculacion.eiao@uanl.edu.mx', 25.69351, -100.26945, 'img/area8/vinculacion-y-bolsa-de-trabajo-transporte.jpg', 'Transporte', 'Melesio Silva', '-', 'img/area8/vinculacion-y-bolsa-de-trabajo-transporte.jpg', 'Formación Técnico Dual', 'Segio Moreno', 'tecnicodual.eiao@uanl.edu.mx', 'img/area8/formacion-tecnico-dual.jpg', '', '', '', 'img/area8/formacion-tecnico-dual.jpg', '', '', '', 'img/area8/vinculacion-y-bolsa-de-trabajo-transporte.jpg'),
(9, 'Servicios Generales', 'Raúl Hernández', '-', 25.69332, -100.26982, 'img/area9/servicios-generales.jpg', '', '', '', 'img/area9/servicios-generales.jpg', '', '', '', 'img/area9/servicios-generales.jpg', '', '', '', 'img/area9/servicios-generales.jpg', '', '', '', 'img/area9/servicios-generales.jpg'),
(10, 'Deportivo', 'Jesus González', 'deportivo.eiao@uanl.edu.mx', 25.69393, -100.27054, 'img/area10/deportivo.jpg', '', '', '', 'img/area10/deportivo.jpg', '', '', '', 'img/area10/deportivo.jpg', '', '', '', 'img/area10/deportivo.jpg', '', '', '', 'img/area10/deportivo.jpg'),
(11, 'Centro de Formación Técnico Empresarial', 'Roberto Bocanegra', 'roberto.bocanegrabdl@uanl.edu.mx', 25.69328, -100.2708, 'img/area11/centro-de-formacion-tecnico-empresarial.jpg', '', '', '', 'img/area11/centro-de-formacion-tecnico-empresarial.jpg', '', '', '', 'img/area11/centro-de-formacion-tecnico-empresarial.jpg', '', '', '', 'img/area11/centro-de-formacion-tecnico-empresarial.jpg', '', '', '', 'img/area11/centro-de-formacion-tecnico-empresarial.jpg'),
(12, 'Cafetería', '-', 'Ext. 409', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Desarrollo Sustentable', 'Dora Zertuche', 'sustentabilidad.eiao@uanl.edu.mx', NULL, NULL, NULL, 'Actividades Estudiantiles', 'Daniel Cantú', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Consultorio', 'Doc. Jesús', 'Ext. 301', NULL, NULL, NULL, 'Actividades Extracurriculares', 'Perla Oviedo', 'extracurriculares.eiao@uanl.edu.mx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Servicio Social', 'José Peña', '8115020640', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Orientación', 'Efren Castillo', 'orientacion.eiao@uanl.edu.mx', NULL, NULL, NULL, 'Tutoría', 'Teresa Reyna', 'tutoria.eiao@uanl.edu.mx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Formación de Bachillerato General', 'Laura Rámirez', 'bgeneral.eiao@uanl.edu.mx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Sistema de Gestión de la Calidad', 'Daniel Cantú', 'calidad.eiao@uanl.edu.mx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Vigilancia', 'Nucio Rivera', '-', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  MODIFY `Area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `Codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
