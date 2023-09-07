-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-09-2023 a las 16:54:47
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_universidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_materia`
--

DROP TABLE IF EXISTS `alumno_materia`;
CREATE TABLE IF NOT EXISTS `alumno_materia` (
  `id_am` int NOT NULL AUTO_INCREMENT,
  `alumno_id` int DEFAULT NULL,
  `materia_id` int DEFAULT NULL,
  PRIMARY KEY (`id_am`),
  KEY `alumno_id` (`alumno_id`),
  KEY `materia_id` (`materia_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `alumno_materia`
--

INSERT INTO `alumno_materia` (`id_am`, `alumno_id`, `materia_id`) VALUES
(1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro_materia`
--

DROP TABLE IF EXISTS `maestro_materia`;
CREATE TABLE IF NOT EXISTS `maestro_materia` (
  `id_mm` int NOT NULL AUTO_INCREMENT,
  `maestro_id` int DEFAULT NULL,
  `materia_id` int DEFAULT NULL,
  `calificacion` varchar(100) DEFAULT NULL,
  `mensaje` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_mm`),
  KEY `maestro_id` (`maestro_id`),
  KEY `materia_id` (`materia_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `maestro_materia`
--

INSERT INTO `maestro_materia` (`id_mm`, `maestro_id`, `materia_id`, `calificacion`, `mensaje`) VALUES
(1, 21, 1, '95', 'Aprobado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE IF NOT EXISTS `materias` (
  `id_materia` int NOT NULL AUTO_INCREMENT,
  `nombre_materia` varchar(100) DEFAULT NULL,
  `nombre_maestro` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_materia`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre_materia`, `nombre_maestro`) VALUES
(1, 'Ciencias', '1'),
(2, 'Historia U', '2'),
(3, 'Matematica', '3'),
(4, 'Logica 1', '21'),
(5, 'Lenguaje', '5'),
(6, 'Razonamiento', '6'),
(7, 'Fisica ', '2'),
(8, 'Ciencias Sociales', '21'),
(9, 'Idiomas', '21'),
(18, 'Civica', '19'),
(19, 'Anatomía', '3'),
(20, 'Deportes', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id_rol` int NOT NULL AUTO_INCREMENT,
  `nombre_rol` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Maestro'),
(3, 'Alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_datos`
--

DROP TABLE IF EXISTS `usuarios_datos`;
CREATE TABLE IF NOT EXISTS `usuarios_datos` (
  `id_ud` int NOT NULL AUTO_INCREMENT,
  `DNI` varchar(20) DEFAULT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellido` varchar(100) DEFAULT NULL,
  `Correo` varchar(150) DEFAULT NULL,
  `Contra` varchar(250) DEFAULT NULL,
  `Direccion` varchar(200) DEFAULT NULL,
  `Fecha_Nacimiento` date DEFAULT NULL,
  `Estado` varchar(20) DEFAULT NULL,
  `rol_id` int DEFAULT NULL,
  `materia_id` int DEFAULT NULL,
  PRIMARY KEY (`id_ud`),
  KEY `rol_id` (`rol_id`),
  KEY `fk_materia` (`materia_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios_datos`
--

INSERT INTO `usuarios_datos` (`id_ud`, `DNI`, `Nombre`, `Apellido`, `Correo`, `Contra`, `Direccion`, `Fecha_Nacimiento`, `Estado`, `rol_id`, `materia_id`) VALUES
(1, '345-234', 'Sonic', 'Ruiz Zapata', 'admin@admin', 'admin', 'Av Civica', '1998-09-05', 'Activo', 1, 1),
(3, '789-234', 'Efrain', 'Ruiz ', 'maestro@maestro', 'maestro', 'Av General Proano 12-45', '1998-09-11', 'Activo', 2, 4),
(21, '345-219', 'Erick', 'Ramirez', 'alumno@alumno', 'alumno', 'Av Civica', '1998-09-05', 'Activo', 3, 4),
(24, '456-456', 'Lizeth', 'Luna', 'erika@erika', 'erika', 'Pasto Colombia', '2016-06-24', 'Activo', 3, 4),
(25, NULL, 'Jose', 'Solis', 'admin@admin', NULL, 'Latacunga, ec', '2015-02-07', NULL, 2, 3),
(26, '987-234', 'Eduardo', 'Franco', 'edu@edu', NULL, 'Latacunga, Juan Abel', '2005-02-10', NULL, 3, NULL),
(27, NULL, 'Milthon', 'Querito', 'milthon@milthon', NULL, 'Latacunga, ec', '2010-02-26', NULL, 2, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_materia`
--
ALTER TABLE `alumno_materia`
  ADD CONSTRAINT `fk_alumno_id` FOREIGN KEY (`alumno_id`) REFERENCES `usuarios_datos` (`id_ud`),
  ADD CONSTRAINT `fk_materia_id` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id_materia`);

--
-- Filtros para la tabla `maestro_materia`
--
ALTER TABLE `maestro_materia`
  ADD CONSTRAINT `fk_maestro_id` FOREIGN KEY (`maestro_id`) REFERENCES `usuarios_datos` (`id_ud`),
  ADD CONSTRAINT `maestro_materia_ibfk_1` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id_materia`);

--
-- Filtros para la tabla `usuarios_datos`
--
ALTER TABLE `usuarios_datos`
  ADD CONSTRAINT `fk_materia` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id_materia`),
  ADD CONSTRAINT `usuarios_datos_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
