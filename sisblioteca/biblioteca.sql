-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generaciÃ³n: 21-07-2020 a las 14:31:42
-- VersiÃ³n del servidor: 5.7.26
-- VersiÃ³n de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sisbiblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

DROP TABLE IF EXISTS `autor`;
CREATE TABLE IF NOT EXISTS `autor` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `auto_nombres` varchar(45) DEFAULT NULL,
  `auto_apellidos` varchar(45) DEFAULT NULL,
  `auto_biografia` text,
  PRIMARY KEY (`auto_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `cate_id` int(11) NOT NULL AUTO_INCREMENT,
  `cate_nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplar`
--

DROP TABLE IF EXISTS `ejemplar`;
CREATE TABLE IF NOT EXISTS `ejemplar` (
  `ejem_id` int(11) NOT NULL AUTO_INCREMENT,
  `ejem_titulo` varchar(150) DEFAULT NULL,
  `ejem_editorial` varchar(45) DEFAULT NULL,
  `ejem_paginas` int(11) DEFAULT NULL,
  `ejem_isbn` varchar(20) DEFAULT NULL,
  `ejem_idioma` varchar(45) DEFAULT NULL,
  `ejem_portada` varchar(45) DEFAULT NULL,
  `ejem_digital` varchar(45) DEFAULT NULL,
  `ejem_audio` varchar(45) DEFAULT NULL,
  `ejem_resumen` varchar(255) DEFAULT NULL,
  `ejem_tipo_id` int(11) DEFAULT NULL,
  `ejem_cate_id` int(11) DEFAULT NULL,
  `ejem_valoracion` tinyint(1) DEFAULT NULL,
  `ejem_anio` int(11) DEFAULT NULL,
  `ejem_nprestamos` int(11) DEFAULT NULL,
  PRIMARY KEY (`ejem_id`),
  KEY `fk_ejemplar_categoria1_idx` (`ejem_cate_id`)
  KEY `fk_ejemplar_ejemplar_tipo_idx` (`ejem_tipo_id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplar_autor`
--

DROP TABLE IF EXISTS `ejemplar_autor`;
CREATE TABLE IF NOT EXISTS `ejemplar_autor` (
  `rela_auto_id` int(11) NOT NULL,
  `rela_ejem_id` int(11) NOT NULL,
  PRIMARY KEY (`rela_auto_id`,`rela_ejem_id`),
  KEY `fk_ejemplar_autor_ejemplar1_idx` (`rela_ejem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejemplar_tipo`
--

DROP TABLE IF EXISTS `ejemplar_tipo`;
CREATE TABLE IF NOT EXISTS `ejemplar_tipo` (
  `tipo_id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_nombre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tipo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favorito`
--

DROP TABLE IF EXISTS `favorito`;
CREATE TABLE IF NOT EXISTS `favorito` (
  `favo_usua_id` int(11) NOT NULL,
  `favo_ejem_id` int(11) NOT NULL,
  PRIMARY KEY (`favo_usua_id`,`favo_ejem_id`),
  KEY `fk_favorito_ejemplar1_idx` (`favo_ejem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

DROP TABLE IF EXISTS `historial`;
CREATE TABLE IF NOT EXISTS `historial` (
  `histo_id` int(11) NOT NULL,
  `histo_usua_id` int(11) DEFAULT NULL,
  `histo_termino` varchar(45) DEFAULT NULL,
  `histo_fechareg` datetime DEFAULT NULL,
  PRIMARY KEY (`histo_id`),
  KEY `fk_historial_usuario1_idx` (`histo_usua_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peticion`
--

DROP TABLE IF EXISTS `peticion`;
CREATE TABLE IF NOT EXISTS `peticion` (
  `peti_id` int(11) NOT NULL AUTO_INCREMENT,
  `peti_ejem_id` int(11) DEFAULT NULL,
  `peti_dias` int(11) DEFAULT NULL,
  `peti_usua_id` int(11) DEFAULT NULL,
  `peti_fechareg` datetime DEFAULT NULL,
  PRIMARY KEY (`peti_id`),
  KEY `fk_peticion_ejemplar1_idx` (`peti_ejem_id`),
  KEY `fk_peticion_usuario1_idx` (`peti_usua_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

DROP TABLE IF EXISTS `prestamo`;
CREATE TABLE IF NOT EXISTS `prestamo` (
  `pres_id` int(11) NOT NULL AUTO_INCREMENT,
  `pres_usua_id` int(11) DEFAULT NULL,
  `pres_ejem_id` int(11) DEFAULT NULL,
  `pres_fechareg` datetime DEFAULT NULL,
  `pres_dias` int(11) DEFAULT NULL,
  `pres_fechaprestamo` date DEFAULT NULL,
  `pres_fechadevolucion` date DEFAULT NULL,
  `pres_estado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`pres_id`),
  KEY `fk_prestamo_usuario1_idx` (`pres_usua_id`),
  KEY `fk_prestamo_ejemplar1_idx` (`pres_ejem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usua_id` int(11) NOT NULL AUTO_INCREMENT,
  `usua_login` varchar(45) DEFAULT NULL,
  `usua_password` varchar(45) DEFAULT NULL,
  `usua_codigo` int(11) DEFAULT NULL,
  `usua_nombres` varchar(45) DEFAULT NULL,
  `usua_apellidos` varchar(45) DEFAULT NULL,
  `usua_direccion` varchar(150) DEFAULT NULL,
  `usua_email` varchar(70) DEFAULT NULL,
  `usua_telefono` varchar(20) DEFAULT NULL,
  `usua_esadmin` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`usua_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ejemplar`
--
ALTER TABLE `ejemplar`
  ADD CONSTRAINT `fk_ejemplar_categoria1` FOREIGN KEY (`ejem_cate_id`) REFERENCES `categoria` (`cate_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ejemplar_ejemplar_tipo` FOREIGN KEY (`ejem_tipo_id`) REFERENCES `ejemplar_tipo` (`tipo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ejemplar_autor`
--
ALTER TABLE `ejemplar_autor`
  ADD CONSTRAINT `fk_ejemplar_autor_autor1` FOREIGN KEY (`rela_auto_id`) REFERENCES `autor` (`auto_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ejemplar_autor_ejemplar1` FOREIGN KEY (`rela_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `favorito`
--
ALTER TABLE `favorito`
  ADD CONSTRAINT `fk_favorito_ejemplar1` FOREIGN KEY (`favo_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_favorito_usuario1` FOREIGN KEY (`favo_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `fk_historial_usuario1` FOREIGN KEY (`histo_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `peticion`
--
ALTER TABLE `peticion`
  ADD CONSTRAINT `fk_peticion_ejemplar1` FOREIGN KEY (`peti_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peticion_usuario1` FOREIGN KEY (`peti_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `fk_prestamo_ejemplar1` FOREIGN KEY (`pres_ejem_id`) REFERENCES `ejemplar` (`ejem_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prestamo_usuario1` FOREIGN KEY (`pres_usua_id`) REFERENCES `usuario` (`usua_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;