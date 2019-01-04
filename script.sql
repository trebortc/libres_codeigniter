-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-01-2019 a las 03:21:46
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `econ`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` enum('PUBLICADO','ELIMINADO') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'PUBLICADO',
  `imagen1` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen2` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_b` timestamp NULL DEFAULT NULL,
  `modificado_b` timestamp NULL DEFAULT NULL,
  `precio` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `banner`
--

INSERT INTO `banner` (`id`, `titulo`, `descripcion`, `texto`, `estado`, `imagen1`, `imagen2`, `creado_b`, `modificado_b`, `precio`) VALUES
(3, 'VALLE DORADO', 'Lo mejor del norte de Quito, cerca de todo para tu comodidad', '<p>asdasd</p>\r\n', 'PUBLICADO', 'banner-13.jpeg', NULL, NULL, NULL, '$75.000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen1` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen2` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_b` timestamp NULL DEFAULT NULL,
  `modificado_b` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`, `texto`, `fecha`, `imagen1`, `imagen2`, `creado_b`, `modificado_b`) VALUES
(1, 'Vivienda de interés público', 'Ecuador Construye -ECON-, de manera responsable con el país y los ecuatorianos', '<p>Ecuador Construye -ECON-, de manera responsable con el pa&iacute;s y los ecuatorianos proyecta para el 2019 el mercado de la construcci&oacute;n nacional a trav&eacute;s de la Vivienda de Inter&eacute;s P&uacute;blico -VIP-. Un proyecto con enfoque social que nace como pol&iacute;tica de gobierno, pero se concreta a trav&eacute;s de la voluntad de las empresas constructoras del pa&iacute;s que sienten la necesidad de cumplir el sue&ntilde;o de obtener una primera vivienda propia de miles de familias j&oacute;venes y adultas del Ecuador. &iquest;Quieres ser una de las familias beneficiarias de este proyecto? Conoce los tres planes a los que puedes aplicar a trav&eacute;s de los cr&eacute;ditos para la VIP:</p>\r\n\r\n<ul>\r\n	<li>Primera vivienda. La persona que va a adquirir la vivienda no debe poseer ninguna otra, y la misma debe ser habitada por el comprador, no para fines comerciales.</li>\r\n	<li>Costo del aval&uacute;o de hasta USD 90.000, cuyo valor por metro cuadrado no exceda los USD 890.</li>\r\n	<li>Vivienda nueva. Casas o departamentos unifamiliares cuya construcci&oacute;n se encuentre culminada, cuente con servicios b&aacute;sicos y en condiciones de ser habitados.</li>\r\n</ul>\r\n', 'Noviembre 12, 2018', 'noticia1.jpeg', 'noticia11.jpeg', NULL, NULL),
(2, 'Vivienda de interés público', 'Ecuador Construye -ECON-, de manera responsable con el país y los ecuatorianos', '<p>Ecuador Construye -ECON-, de manera responsable con el pa&iacute;s y los ecuatorianos proyecta para el 2019 el mercado de la construcci&oacute;n nacional a trav&eacute;s de la Vivienda de Inter&eacute;s P&uacute;blico -VIP-. Un proyecto con enfoque social que nace como pol&iacute;tica de gobierno, pero se concreta a trav&eacute;s de la voluntad de las empresas constructoras del pa&iacute;s que sienten la necesidad de cumplir el sue&ntilde;o de obtener una primera vivienda propia de miles de familias j&oacute;venes y adultas del Ecuador. &iquest;Quieres ser una de las familias beneficiarias de este proyecto? Conoce los tres planes a los que puedes aplicar a trav&eacute;s de los cr&eacute;ditos para la VIP:</p>\r\n\r\n<ul>\r\n	<li>Primera vivienda. La persona que va a adquirir la vivienda no debe poseer ninguna otra, y la misma debe ser habitada por el comprador, no para fines comerciales.</li>\r\n	<li>Costo del aval&uacute;o de hasta USD 90.000, cuyo valor por metro cuadrado no exceda los USD 890.</li>\r\n	<li>Vivienda nueva. Casas o departamentos unifamiliares cuya construcci&oacute;n se encuentre culminada, cuente con servicios b&aacute;sicos y en condiciones de ser habitados.</li>\r\n</ul>\r\n', 'Noviembre 12, 2018', 'noticia2.jpg', 'noticia21.jpg', NULL, NULL),
(3, 'Vivienda de interés público', 'Ecuador Construye -ECON-, de manera responsable con el país y los ecuatorianos', '<p>Ecuador Construye -ECON-, de manera responsable con el pa&iacute;s y los ecuatorianos proyecta para el 2019 el mercado de la construcci&oacute;n nacional a trav&eacute;s de la Vivienda de Inter&eacute;s P&uacute;blico -VIP-. Un proyecto con enfoque social que nace como pol&iacute;tica de gobierno, pero se concreta a trav&eacute;s de la voluntad de las empresas constructoras del pa&iacute;s que sienten la necesidad de cumplir el sue&ntilde;o de obtener una primera vivienda propia de miles de familias j&oacute;venes y adultas del Ecuador. &iquest;Quieres ser una de las familias beneficiarias de este proyecto? Conoce los tres planes a los que puedes aplicar a trav&eacute;s de los cr&eacute;ditos para la VIP:</p>\r\n\r\n<ul>\r\n	<li>Primera vivienda. La persona que va a adquirir la vivienda no debe poseer ninguna otra, y la misma debe ser habitada por el comprador, no para fines comerciales.</li>\r\n	<li>Costo del aval&uacute;o de hasta USD 90.000, cuyo valor por metro cuadrado no exceda los USD 890.</li>\r\n	<li>Vivienda nueva. Casas o departamentos unifamiliares cuya construcci&oacute;n se encuentre culminada, cuente con servicios b&aacute;sicos y en condiciones de ser habitados.</li>\r\n</ul>\r\n', 'Noviembre 12, 2018', 'noticia3.jpg', 'noticia31.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `texto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen1` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen2` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen3` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen4` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen5` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen6` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creado_b` timestamp NULL DEFAULT NULL,
  `modificado_b` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `titulo`, `descripcion`, `precio`, `texto`, `tipo`, `fecha`, `imagen1`, `imagen2`, `imagen3`, `imagen4`, `imagen5`, `imagen6`, `creado_b`, `modificado_b`) VALUES
(1, 'VALLE DORADO', 'Casas de dos plantas con acabados, de 110 M2', '$75.000', '<p>Casas de dos plantas con acabados, de 110 M2 a $75.000, con proyecci&oacute;n a tercera planta, 2 parqueaderos, amplias &aacute;reas verdes, guardian&iacute;a privada y varias l&iacute;neas de buses a la puerta. Primera planta: compuesta de sala, comedor, cocina, ba&ntilde;o social, y amplio patio Segunda planta: dormitorio m&aacute;ster con ba&ntilde;o, dos dormitorios, ba&ntilde;o adicional.</p>\r\n', 'Casa', 'Nov 21', 'vdcasa_11.png', 'vdimg11.png', 'vdimg21.png', 'vdimg31.png', 'vdimg41.png', 'vdimg51.png', NULL, NULL),
(2, 'VALLE DORADO', 'Casas de dos plantas con acabados, de 110 M2', '$75.000', '<p>Casas de dos plantas con acabados, de 110 M2 a $75.000, con proyecci&oacute;n a tercera planta, 2 parqueaderos, amplias &aacute;reas verdes, guardian&iacute;a privada y varias l&iacute;neas de buses a la puerta. Primera planta: compuesta de sala, comedor, cocina, ba&ntilde;o social, y amplio patio Segunda planta: dormitorio m&aacute;ster con ba&ntilde;o, dos dormitorios, ba&ntilde;o adicional.</p>\r\n', 'Casa', 'Nov 21', 'vdcasa_11.png', 'vdimg11.png', 'vdimg21.png', 'vdimg31.png', 'vdimg41.png', 'vdimg51.png', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
