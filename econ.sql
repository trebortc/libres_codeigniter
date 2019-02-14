-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2019 a las 22:48:15
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
(3, 'BIENVENID@', 'A NUESTRA COMUNIDAD 1', '', 'PUBLICADO', 'banner1.png', NULL, NULL, NULL, ''),
(4, 'BIENVENID@', 'A NUESTRA COMUNIDAD', '<p>Ejemplo 1</p>\r\n', 'PUBLICADO', 'banner1.png', NULL, NULL, NULL, '$ 0'),
(5, 'BIENVENID@', 'A NUESTRA COMUNIDAD 3', '', 'PUBLICADO', 'banner1.png', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `mensaje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`nombre`, `apellido`, `email`, `telefono`, `id`, `mensaje`) VALUES
('Rene', 'Gomez', 'trebortc@hotmail.com', '0997426212', 3, 'Ayudame');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'LOREM IPSUM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis ', '<p>Ecuador Construye -ECON-, de manera responsable con el pa&iacute;s y los ecuatorianos proyecta para el 2019 el mercado de la construcci&oacute;n nacional a trav&eacute;s de la Vivienda de Inter&eacute;s P&uacute;blico -VIP-. Un proyecto con enfoque social que nace como pol&iacute;tica de gobierno, pero se concreta a trav&eacute;s de la voluntad de las empresas constructoras del pa&iacute;s que sienten la necesidad de cumplir el sue&ntilde;o de obtener una primera vivienda propia de miles de familias j&oacute;venes y adultas del Ecuador. &iquest;Quieres ser una de las familias beneficiarias de este proyecto? Conoce los tres planes a los que puedes aplicar a trav&eacute;s de los cr&eacute;ditos para la VIP:</p>\r\n\r\n<ul>\r\n	<li>Primera vivienda. La persona que va a adquirir la vivienda no debe poseer ninguna otra, y la misma debe ser habitada por el comprador, no para fines comerciales.</li>\r\n	<li>Costo del aval&uacute;o de hasta USD 90.000, cuyo valor por metro cuadrado no exceda los USD 890.</li>\r\n	<li>Vivienda nueva. Casas o departamentos unifamiliares cuya construcci&oacute;n se encuentre culminada, cuente con servicios b&aacute;sicos y en condiciones de ser habitados.</li>\r\n</ul>\r\n', 'Noviembre 12, 2018', 'enterate1.png', 'enterate1.png', NULL, NULL),
(2, 'LOREM IPSUM', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis ', '<p>Ecuador Construye -ECON-, de manera responsable con el pa&iacute;s y los ecuatorianos proyecta para el 2019 el mercado de la construcci&oacute;n nacional a trav&eacute;s de la Vivienda de Inter&eacute;s P&uacute;blico -VIP-. Un proyecto con enfoque social que nace como pol&iacute;tica de gobierno, pero se concreta a trav&eacute;s de la voluntad de las empresas constructoras del pa&iacute;s que sienten la necesidad de cumplir el sue&ntilde;o de obtener una primera vivienda propia de miles de familias j&oacute;venes y adultas del Ecuador. &iquest;Quieres ser una de las familias beneficiarias de este proyecto? Conoce los tres planes a los que puedes aplicar a trav&eacute;s de los cr&eacute;ditos para la VIP:</p>\r\n\r\n<ul>\r\n	<li>Primera vivienda. La persona que va a adquirir la vivienda no debe poseer ninguna otra, y la misma debe ser habitada por el comprador, no para fines comerciales.</li>\r\n	<li>Costo del aval&uacute;o de hasta USD 90.000, cuyo valor por metro cuadrado no exceda los USD 890.</li>\r\n	<li>Vivienda nueva. Casas o departamentos unifamiliares cuya construcci&oacute;n se encuentre culminada, cuente con servicios b&aacute;sicos y en condiciones de ser habitados.</li>\r\n</ul>\r\n', 'Noviembre 12, 2018', 'enterate2.png', 'enterate2.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(290) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'EL BULLYING HOMOFÓBICO Y TRANSFÓBICO EN LOS CENTROS EDUCATIVOS', 'La violencia homofóbica y transfóbica en el ámbito escolar vulnera directamente el derecho a la educación de aquellos afectados, y repercute significativamente en los procesos de enseñanza y aprendizaje. De igual manera, afecta a los docentes y a la comunidad educativa en general.', 'http://unesdoc.unesco.org/images/0024/002448/244841S.pdf\r\n', '', 'LIBRO', NULL, 'libro1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ABRAZAR LA DIVERSIDAD, propuestas para una educación libre\r\nde acoso homofóbico y transfóbico', 'ntre las funciones asumidas por el Instituto de la\r\nMujer y para la Igualdad de Oportunidades está\r\nla de elaborar informes, estudios, análisis y recomendaciones sobre aquellas materias que afecten a la\r\nigualdad de trato y la no discriminación, por cualquier\r\ncircunstancia personal o soci', 'http://www.inmujer.gob.es/publicacioneselectronicas/documentacion/Documentos/DE1711.pdf\r\n', '', 'LIBRO', NULL, 'libro2.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'SUMANDO\r\nLIBERTADES,\r\nGuía iberoamericana para el abordaje del\r\nacoso escolar por homofobia y transfobia', 'En cada sala de clases se intercambian ideas, opiniones,\r\nexperiencias, preguntas y respuestas que inciden en la forma\r\ncomo alumnado y docentes se relacionan con el resto del\r\nestablecimiento educacional, con amistades, con familias y\r\ncon todo su entorno, tanto presente, como futuro. ', 'http://educacionlgbti.org/wp-content/uploads/2016/12/SumandoLibertades_Dic16.pdf\r\n', '', 'LIBRO', NULL, 'libro3.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'BULLYING HOMOFÓBICO, Guía de actuación', 'El bullyng homofóbico es toda clase de conducta\r\npermanente o continuada en el tiempo y desarrollada\r\npor uno o más alumnos sobre otro suceptible de\r\ncrear en la víctima sentimientos de terror, angustia o\r\ninferioridad idóneos para humillarle y quebrantar su\r\nresistencia física o moral, mo', 'http://www.felgtb.com/ciberbullying/materiales/Guia%20Bullying%20homofobico%20Guia%20de%20Actuacion.pdf\r\n', '', 'LIBRO', NULL, 'libro4.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Guía didáctica, EL AMOR Y EL SEXO NO SON DE UN SOLO COLOR', '“EL AMOR Y EL SEXO NO SON DE UN SOLO COlor” pretende ser una herramienta de trabajo para\r\nprofesorado, educadores y todos aquellos trabajadores y trabajadoras que desarrollan su trabajo en\r\nla educación en cualquiera de sus ámbitos.', 'http://www.felgtb.org/rs/391/d112d6ad-54ec-438b-9358-4483f9e98868/987/filename/el-amor-y-el-sexo-no-son-de-un-solo-color.pdf\r\n', '', 'LIBRO', NULL, 'libro5.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Guía, Contra el bullying homofóbico, Herramientas para el Profesorado  ', 'Queremos preguntarnos el por qué hay homofobia, y sobre todo por qué existe esa homofobia entre el alumnado de los institutos y colegios. Frecuentemente los/las estudiantes que\r\nson objeto de bullying pertenecen a comunidades minoritarias o grupos socialmente estigmatizados, o presentan ca', 'http://www.educatolerancia.com/wp-content/uploads/2016/12/Guia-Homofobia-Escuela.pdf\r\n', '', 'LIBRO', NULL, 'libro6.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Diversidad sexual en las aulas. Evitar el bullying o acoso homofóbico', 'Muchas veces agresores pero siempre víctimas en una sociedad que\r\ncastiga la exclusión social y la diferencia. De todos los programas de\r\neducación sexual en los que he participado, ha sido con vosotros con\r\nquienes más he aprendido, reído y (al llegar a casa) llorado.', 'http://ceip.edu.uy/IFS/documentos/2015/sexual/materiales/Aula_PLURAL.pdf\r\n', '', 'LIBRO', NULL, 'libro7.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Bullying homofóbico en las escuelas,\r\nGuìa para profesores', 'Este manual tiene como objetivo dar información, ideas y herramientas\r\nprácticas al personal de las escuelas, para ayudar a prevenir y frenar el bullying. Nos\r\ncentraremos específicamente, mas no exclusivamente en el bullying homofóbico\r\n(violencia hacia estudiantes que son percibidos como', 'http://www.familiasporladiversidad.es/files/objetos/BULLYINGprofesores.pdf\r\n\r\n', '', 'LIBRO', NULL, 'libro8.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'BULLYING HOMOFÓBICO', 'Materiales educativos que pretenden dar respuesta a los siguientes objetivos pedagógicos:\r\n\r\nOfrecer programas de formación para entender y abordar el bullying homofóbico dirigidos a profesionales del ámbito educativo y a padres y madres.\r\nDar a conocer políticas públicas contra la lgtbifo', 'http://salutsexual.sidastudi.org/es/zonapedagogica-grupos/documentos-tematicos/zonapedagogica-grupo/150527-bullying-homof-b', '', 'LIBRO', NULL, 'libro9.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
