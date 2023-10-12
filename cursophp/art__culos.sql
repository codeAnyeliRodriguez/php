-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-06-2023 a las 22:27:37
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
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artículos`
--

DROP TABLE IF EXISTS `artículos`;
CREATE TABLE IF NOT EXISTS `artículos` (
  `SECCIÓN` varchar(10) DEFAULT NULL,
  `NOMBRE ARTÍCULO` varchar(20) DEFAULT NULL,
  `FECHA` varchar(10) DEFAULT NULL,
  `PAÍS DE ORIGEN` varchar(9) DEFAULT NULL,
  `PRECIO` decimal(14,13) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `artículos`
--

INSERT INTO `artículos` (`SECCIÓN`, `NOMBRE ARTÍCULO`, `FECHA`, `PAÍS DE ORIGEN`, `PRECIO`) VALUES
('CERÁMICA', 'Tubos', '4/3/1997', 'China', '9.9999999999999'),
('CERÁMICA', 'Plato Decorativo', '7/6/1997', 'China', '9.9999999999999'),
('CERÁMICA', 'Juego de te', '15/1/1997', 'China', '9.9999999999999'),
('CERÁMICA', 'Cenicero', '2/7/1997', 'Japón', '9.9999999999999'),
('CERÁMICA', 'Maceta', '23/2/1997', 'España', '9.9999999999999'),
('CERÁMICA', 'Jarra china', '2/9/1997', 'China', '9.9999999999999'),
('CONFECCIÓN', 'Tarje Caballero', '11/3/1997', 'Italia', '9.9999999999999'),
('CONFECCIÓN', 'Pantalón Señora', '1/5/1997', 'Marruecos', '9.9999999999999'),
('CONFECCIÓN', 'Camisa Caballero', '11/8/1997', 'España', '9.9999999999999'),
('CONFECCIÓN', 'Blusa Sra.', '18/3/1997', 'China', '9.9999999999999'),
('CONFECCIÓN', 'Cazadora piel', '10/7/1997', 'Italia', '9.9999999999999'),
('CONFECCIÓN', 'Abrigo Caballero', '5/7/1997', 'Italia', '9.9999999999999'),
('CONFECCIÓN', 'Abrigo Sra', '3/5/1997', 'Marruecos', '9.9999999999999'),
('CONFECCIÓN', 'Cinturón de piel', '12/5/1997', 'España', '3.6060726263027'),
('DEPORTE', 'Raqueta Tenis', '20/3/1997', 'Usa', '9.9999999999999'),
('DEPORTE', 'Chándal', '13/9/1997', 'Usa', '9.9999999999999'),
('DEPORTE', 'Tren Eléctrico', '3/7/1997', 'Japón', '9.9999999999999'),
('DEPORTE', 'Pistola Olímpica', '23/5/1997', 'Suecia', '9.9999999999999'),
('DEPORTE', 'Monopatín', '11/11/1997', 'Marruecos', '9.9999999999999'),
('DEPORTE', 'Balón baloncesto', '25/6/1997', 'Japón', '9.9999999999999'),
('DEPORTE', 'Balón Fútbol', '5/7/1997', 'España', '9.9999999999999'),
('DEPORTE', 'Sudadera', '3/11/1997', 'Usa', '9.9999999999999'),
('DEPORTE', 'Bicicleta de montaña', '14/3/1997', 'Usa', '9.9999999999999'),
('FERRETERÍA', 'Destornillador', '22/10/1997', 'España', '5.5233012392870'),
('FERRETERÍA', 'Serrucho', '23/3/1997', 'Francia', '9.9999999999999'),
('FERRETERÍA', 'Llave Inglesa', '23/4/1997', 'Usa', '9.9999999999999'),
('FERRETERÍA', 'Alicates', '17/4/1997', 'Italia', '5.6134530549445'),
('FERRETERÍA', 'Martillo', '4/9/1997', 'España', '9.4959912492638'),
('FERRETERÍA', 'Destornillador', '20/2/1997', 'Francia', '7.5487120310603'),
('FERRETERÍA', 'Lima Grande', '10/8/1997', 'España', '9.9999999999999'),
('FERRETERÍA', 'Juego de brocas', '4/7/1997', 'Taiwán', '9.9999999999999'),
('JUGUETERÍA', 'Coche Teledirigido', '26/5/1997', 'Marruecos', '9.9999999999999'),
('JUGUETERÍA', 'Correpasillos', '11/4/1997', 'Japón', '9.9999999999999'),
('JUGUETERÍA', 'Consola Video', '24/9/1997', 'Usa', '9.9999999999999'),
('JUGUETERÍA', 'Muñeca Andadora', '4/10/1997', 'España', '9.9999999999999'),
('JUGUETERÍA', 'Fuerte de soldados', '25/11/1997', 'Japón', '9.9999999999999'),
('JUGUETERÍA', 'Pistola con sonidos', '15/2/1997', 'España', '9.9999999999999'),
('JUGUETERÍA', 'Pie de lámpara', '27/5/1997', 'Turquía', '9.9999999999999');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
