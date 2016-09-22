-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-09-2016 a las 10:25:04
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `categoria`) VALUES
(1, 'Cuando aprendo'),
(2, 'Aprendo mejor cuando'),
(3, 'Cuando estoy aprendiendo'),
(4, 'Aprendo a traves de'),
(5, 'Cuando aprendo'),
(6, 'Cuando estoy aprendiendo'),
(7, 'Aprendo mejor a travÃ©s de '),
(8, 'Cuando aprendo'),
(9, 'Aprendo mejor cuando'),
(10, 'Cuando estoy aprendiendo'),
(11, 'Cuando aprendo'),
(12, 'Aprendo mejor cuando');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE IF NOT EXISTS `especialidad` (
  `idespecialidad` int(11) NOT NULL AUTO_INCREMENT,
  `especialidad` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idespecialidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`idespecialidad`, `especialidad`) VALUES
(1, 'Informatica'),
(2, 'Soldadura'),
(3, 'Carpinteria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `idevento` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` int(11) NOT NULL,
  `evento` varchar(45) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `especialidad_idespecialidad` int(11) NOT NULL,
  `instructor_idinstructor` int(11) NOT NULL,
  PRIMARY KEY (`idevento`,`codigo`,`especialidad_idespecialidad`),
  KEY `fk_evento_especialidad_idx` (`especialidad_idespecialidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idevento`, `codigo`, `evento`, `estado`, `especialidad_idespecialidad`, `instructor_idinstructor`) VALUES
(1, 123, 'Windows basico', 1, 1, 1),
(2, 231, 'Windows avanzado', 1, 1, 1),
(3, 321, 'Excel basico', 1, 1, 1),
(4, 323, 'Fundamento de fundicion I ', 1, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `idinstructor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre1` varchar(45) DEFAULT NULL,
  `nombre2` varchar(45) DEFAULT NULL,
  `apellido1` varchar(45) DEFAULT NULL,
  `apellido2` varchar(45) DEFAULT NULL,
  `especialidad_idespecialidad` int(11) NOT NULL,
  PRIMARY KEY (`idinstructor`,`especialidad_idespecialidad`),
  KEY `fk_instructor_especialidad1_idx` (`especialidad_idespecialidad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`idinstructor`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `especialidad_idespecialidad`) VALUES
(1, 'Jose', 'Carlos', 'Fuente', 'Job', 1),
(2, 'Santiago', 'Jacob', 'Caballeros', 'Ach', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participante`
--

CREATE TABLE IF NOT EXISTS `participante` (
  `idparticipante` int(11) NOT NULL AUTO_INCREMENT,
  `pnombre1` varchar(45) DEFAULT NULL,
  `pnombre2` varchar(45) DEFAULT NULL,
  `papellido1` varchar(45) DEFAULT NULL,
  `papellido2` varchar(45) DEFAULT NULL,
  `refcodigo` int(11) NOT NULL,
  `totalec` int(11) DEFAULT NULL,
  `totalor` int(11) DEFAULT NULL,
  `totalca` int(11) DEFAULT NULL,
  `totalea` int(11) DEFAULT NULL,
  PRIMARY KEY (`idparticipante`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `participante`
--

INSERT INTO `participante` (`idparticipante`, `pnombre1`, `pnombre2`, `papellido1`, `papellido2`, `refcodigo`, `totalec`, `totalor`, `totalca`, `totalea`) VALUES
(1, 'Bryan', 'Abraham', 'Santiago', 'Mejia', 123, 17, 22, 27, 6),
(2, 'Antonio', 'Santiago', 'Boc', 'Tejar', 123, 22, 20, 15, 15),
(3, 'Miguel', 'Angel', 'Menchu', 'Xoyon', 123, 19, 23, 22, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultados`
--

CREATE TABLE IF NOT EXISTS `resultados` (
  `participante_idparticipante` int(11) NOT NULL,
  `evento_idevento` int(11) NOT NULL,
  `evento_codigo` int(11) NOT NULL,
  `evento_especialidad_idespecialidad` int(11) NOT NULL,
  PRIMARY KEY (`participante_idparticipante`,`evento_idevento`,`evento_codigo`,`evento_especialidad_idespecialidad`),
  KEY `fk_participante_has_evento_evento1_idx` (`evento_idevento`,`evento_codigo`,`evento_especialidad_idespecialidad`),
  KEY `fk_participante_has_evento_participante1_idx` (`participante_idparticipante`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `resultados`
--

INSERT INTO `resultados` (`participante_idparticipante`, `evento_idevento`, `evento_codigo`, `evento_especialidad_idespecialidad`) VALUES
(1, 1, 123, 0),
(2, 1, 123, 0),
(3, 1, 123, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcat1`
--

CREATE TABLE IF NOT EXISTS `subcat1` (
  `idsubcat1` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_idcategoria` int(11) NOT NULL,
  `contenidosub1` varchar(75) DEFAULT NULL,
  `totalsub1` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsubcat1`,`categoria_idcategoria`),
  KEY `fk_subcat1_categoria1_idx` (`categoria_idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `subcat1`
--

INSERT INTO `subcat1` (`idsubcat1`, `categoria_idcategoria`, `contenidosub1`, `totalsub1`) VALUES
(1, 1, 'Prefiero valerme de mis sensaciones y sentimientos', NULL),
(2, 2, 'Confio en mis corazonadas y sentimientos', NULL),
(3, 3, 'Tengo sentimientos y reacciones fuertes', NULL),
(4, 4, 'Sentimientos', NULL),
(5, 5, 'Estoy abierto a nuevas experiencias', NULL),
(6, 6, 'Soy una persona intuitiva', NULL),
(7, 7, 'Las relaciones con mis compaÃ±eros', NULL),
(8, 8, 'Me siento involucrado en los temas tratados', NULL),
(9, 9, 'Me baso en mis intuiciones y sentimientos', NULL),
(10, 10, 'Soy una persona abierta', NULL),
(11, 11, 'Me involucro', NULL),
(12, 12, 'Soy receptivo y de mente abierta', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcat2`
--

CREATE TABLE IF NOT EXISTS `subcat2` (
  `idsubcat2` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_idcategoria` int(11) NOT NULL,
  `contenidosub2` varchar(75) DEFAULT NULL,
  `totalsub2` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsubcat2`,`categoria_idcategoria`),
  KEY `fk_subcat2_categoria1_idx` (`categoria_idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `subcat2`
--

INSERT INTO `subcat2` (`idsubcat2`, `categoria_idcategoria`, `contenidosub2`, `totalsub2`) VALUES
(1, 1, 'Prefiero mirar y atender', NULL),
(2, 2, 'Atiendo y observo cuidadosamente', NULL),
(3, 3, 'Soy reservado y tranquilo', NULL),
(4, 4, 'Observaciones', NULL),
(5, 5, 'Tomo en cuenta todos los aspectos relacionados', NULL),
(6, 6, 'Soy una persona observadora', NULL),
(7, 7, 'La observaciÃ³n', NULL),
(8, 8, 'Me tomo mi tiempo antes de actuar', NULL),
(9, 9, 'Me baso en observaciones personales', NULL),
(10, 10, 'Soy una persona reservada', NULL),
(11, 11, 'Prefiero observar', NULL),
(12, 12, 'Soy cuidadoso', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcat3`
--

CREATE TABLE IF NOT EXISTS `subcat3` (
  `idsubcat3` int(11) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL,
  `contenidosub3` varchar(75) DEFAULT NULL,
  `totalsub3` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsubcat3`,`categoria_idcategoria`),
  KEY `fk_subcat3_categoria1_idx` (`categoria_idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcat3`
--

INSERT INTO `subcat3` (`idsubcat3`, `categoria_idcategoria`, `contenidosub3`, `totalsub3`) VALUES
(0, 1, 'Prefiero pensar en las ideas', NULL),
(0, 2, 'Confio en mis pensamientos logicos', NULL),
(0, 3, 'Busco razonar sobre las cosas que estan sucediendo', NULL),
(0, 4, 'Razonamientos', NULL),
(0, 5, 'Prefiero analizar las cosas dividiendolas en sus partes componentes', NULL),
(0, 6, 'Soy una persona lÃ³gica', NULL),
(0, 7, 'TeorÃ­as racionales', NULL),
(0, 8, 'Prefiero las teorÃ­as y las ideas', NULL),
(0, 9, 'Tomo en cuenta mis propias ideas sobre el tema', NULL),
(0, 10, 'Soy una persona racional', NULL),
(0, 11, 'Prefiero evaluar las cosas', NULL),
(0, 12, 'Analizo las ideas', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcat4`
--

CREATE TABLE IF NOT EXISTS `subcat4` (
  `idsubcat4` int(11) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL,
  `contenidosub4` varchar(75) DEFAULT NULL,
  `totalsub4` int(11) DEFAULT NULL,
  PRIMARY KEY (`idsubcat4`,`categoria_idcategoria`),
  KEY `fk_subcat4_categoria1_idx` (`categoria_idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `subcat4`
--

INSERT INTO `subcat4` (`idsubcat4`, `categoria_idcategoria`, `contenidosub4`, `totalsub4`) VALUES
(0, 1, 'Prefiero hacer cosas', NULL),
(0, 2, 'Trabajo duramente para que las cosas queden realizadas', NULL),
(0, 3, 'Me siento responsable de las cosas', NULL),
(0, 4, 'Acciones', NULL),
(0, 5, 'Prefiero hacer las cosas directamente', NULL),
(0, 6, 'Soy una persona activa', NULL),
(0, 7, 'La prÃ¡ctica de los temas tratados', NULL),
(0, 8, 'Prefiero ver los resultados a travÃ©s de mi propio trabajo', NULL),
(0, 9, 'Pruebo personalmente la tarea', NULL),
(0, 10, 'Soy una persona responsable', NULL),
(0, 11, 'Prefiero asumir una actitud activa', NULL),
(0, 12, 'Soy prÃ¡ctico', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL,
  `cuenta` varchar(45) DEFAULT NULL,
  `dpi` varchar(45) DEFAULT NULL,
  `privilegio` varchar(45) DEFAULT NULL,
  `total_idtotal` int(11) NOT NULL,
  PRIMARY KEY (`idusuario`,`total_idtotal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
