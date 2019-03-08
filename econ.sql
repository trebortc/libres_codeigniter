-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2019 a las 02:38:53
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
-- Estructura de tabla para la tabla `audiovisuales`
--

CREATE TABLE `audiovisuales` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `audiovisuales`
--

INSERT INTO `audiovisuales` (`id`, `url`) VALUES
(2, 'https://www.youtube.com/embed/Q2IKVQxrY14'),
(3, 'https://www.youtube.com/embed/SySWkIDw6Vk'),
(4, 'https://www.youtube.com/embed/DBjka_zQBdQ'),
(5, 'https://www.youtube.com/embed/GKt7YqJ7Egw'),
(6, 'https://www.youtube.com/embed/WfBuMoSJsTo'),
(7, 'https://www.youtube.com/embed/LVdfnQPUYLY'),
(8, 'https://www.youtube.com/embed/B0KyZNoVhD8'),
(9, 'https://www.youtube.com/embed/0iYsBnj2BUk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
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
(3, '', '', '', 'PUBLICADO', 'banner3.png', NULL, NULL, NULL, ''),
(4, '<h1><span style=\"font-size:72px\">BIENVENID@S&nbsp;</span></h1>\r\n', '<h1><small><tt><big>A NUESTRA COMUNIDAD</big></tt></small></h1>\r\n', '', 'PUBLICADO', 'banner2.png', NULL, NULL, NULL, ''),
(5, 'BIENVENID@', 'A NUESTRA COMUNIDAD', '', 'PUBLICADO', 'banner1.png', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(10) UNSIGNED NOT NULL,
  `direccion1` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion2` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `movil` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `direccion1`, `direccion2`, `email`, `telefono`, `movil`, `fax`) VALUES
(1, 'Universidad de Las Américas - Ecuador', 'Av. Campus Udlapark: Subsuelo 4', ' ', '+593(2)3981000 Ext.:7513', '0984580875', '+593(2)3981000 Ext.:7513');

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
-- Estructura de tabla para la tabla `estudios`
--

CREATE TABLE `estudios` (
  `id` int(10) UNSIGNED NOT NULL,
  `tema` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `fecha` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estudios`
--

INSERT INTO `estudios` (`id`, `tema`, `url`, `fecha`) VALUES
(1, 'Respuestas al acoso cibernético: un análisis descriptivo de la frecuencia e impacto en LGBT y AlliedYouth', 'https://www.dropbox.com/s/yjjvr59b0mbee28/Responses%20to%20Cyberbullying%20A%20Descriptive%20Analysis%20of%20the%20Frequency%20of%20and%20Impact%20on%20LGBT%20and%20Allied%20Youth.pdf?dl=0', '2012'),
(2, 'Colombia: el bullying por homofobia debe salir del clóset', 'https://sentiido.com/wp-content/uploads/2014/10/Bullying-por-homofobia-completo-ebook-final.pdf#page=5', '2013'),
(3, 'LOS NIVELES DE HOMOFOBIA DE LOS FUTUROS DOCENTES: UNA CUESTIÓN DE DERECHOS, SALUD MENTAL Y EDUCACIÓN', 'http://eprints.ucm.es/39011/1/rie66a08-5.pdf', '2014'),
(4, 'Derechos humanos herramienta para resolver conflictos escolares en la discriminación de género', 'https://dialnet.unirioja.es/servlet/articulo?codigo=6132908', '2014'),
(5, 'Claves para atender a la diversidad afectivo sexual en el contexto educativo desde un enfoque global escolar', 'http://revistas.uned.es/index.php/reop/article/view/13862/12511', '2014'),
(6, 'ANÁLISIS DIFERENCIAL RETROSPECTIVO DE LAS VARIABLES DE SALUD MENTAL EN LESBIANAS, GAIS Y BISEXUALES (LGB) VÍCTIMAS DE BULLYING HOMOFÓBICO EN LA ESCUELA', 'http://revistas.uned.es/index.php/RPPC/article/view/12980/pdf_33', '2014'),
(7, 'Prevención e intervención de la intimidación: estrategias realistas para las escuelas', 'https://www.dropbox.com/s/5peygxt2zouwssg/Bullying%20Prevention%20and%20Intervention%20Realistic%20Strategies%20for%20Schools.pdf?dl=0', '2014'),
(8, 'Efectos de victimización y violencia en la ideación suicida y conductas entre minorías sexuales y adolescentes heterosexuales', 'https://www.dropbox.com/s/n3z6h6fphe0u1m4/bouris2016.pdf?dl=0', '2015'),
(9, 'La violencia homofóbica y transfóbica en el ámbito escolar: hacia centros educativos inclusivos y seguros en América Latina', 'http://unesdoc.unesco.org/images/0024/002448/244840S.pdf', '2015'),
(10, 'BULLYING HOMOFÓBICO. EL PAPEL DEL PROFESORADO', 'http://www.redalyc.org/pdf/3498/349851779042.pdf', '2015'),
(11, 'Prevención y tratamiento del bullying homofóbico y transfóbico en la educación: un enfoque basado en los derechos humanos utilizando la Convención de las Naciones Unidas sobre los Derechos del Niño', 'https://www.dropbox.com/s/rqrmb8vu3ou11dc/9_5_2018_Preventing.pdf?dl=0', '2016'),
(12, 'Perspectivas internacionales sobre el bullying homofóbico y transfóbico en las escuelas.', 'https://www.dropbox.com/s/p9vr0y3zmm7nlpp/International%20perspectives%20on%20homophobic%20and%20transphobic%20bullying%20in%20schools.pdf?dl=0', '2016'),
(13, 'Bullying homofóbico en el contexto mexicano', 'https://dialnet.unirioja.es/servlet/articulo?codigo=5618173', '2016'),
(14, 'Bullying Homofóbico: Aproximación integrativa a la configuración del Sistema Self en un grupo de jóvenes lesbianas y gay’s chilenos', 'http://icpsi.cl/wp-content/uploads/2018/02/AcPI_2017.pdf#page=21', '2017'),
(15, 'Una mirada en profundidad al acoso escolar en el Ecuador', 'https://www.unicef.org/ecuador/acoso_escolar_final002.pdf', '2017'),
(16, 'Bullying homofóbico en México a nivel de secundaria: el contexto de Nuevo León', 'http://revistas.pucp.edu.pe/index.php/psicologia/article/download/20030/20033', '2018'),
(17, 'Uso de una metodología de análisis de caso para el Acoso Escolar (Bullying) Homofóbico', 'https://www.researchgate.net/profile/Carmen_Espinoza2/publication/326327516_Implementacion_de_un_Recorrido_de_Estudio_e_Investigacion_y_su_impacto_en_las_estrategias_de_aprendizaje_y_comprension_lectora_en_un_curso_de_estadistica/links/5b46162caca272dc3860ad86/Implementacion-de-un-Recorrido-de-Estudio-e-Investigacion-y-su-impacto-en-las-estrategias-de-aprendizaje-y-comprension-lectora-en-un-curso-de-estadistica.pdf#page=209', '2018');

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
(1, 'ENSEÑANDO SE APRENDE (Seneca)', 'Tuve una muy grata experiencia como facilitador en los talleres de prevención del bullying homofóbico. Como primer punto, fue enriquecedor aprender más con respecto a esta temática que muy pocos se atreven a abordar. ', '<p>Tuve una muy grata experiencia como facilitador en los talleres de prevenci&oacute;n del bullying homof&oacute;bico. Como primer punto, fue enriquecedor aprender m&aacute;s con respecto a esta tem&aacute;tica que muy pocos se atreven a abordar. De igual manera, tuve la dichosa oportunidad de conocer a personas muy valiosas con quienes pudimos conformar un gran equipo de trabajo en numerosas ocasiones, mantener una gran amistad hasta el d&iacute;a de hoy y crecer profesionalmente mientras ense&ntilde;&aacute;bamos y a la vez aprend&iacute;amos de los grupos con los cuales tuvimos que interactuar.</p>\r\n\r\n<p>Durante mis estudios universitarios de Psicolog&iacute;a Educativa, tuve la dicha de integrarme al equipo de la Red Ecuatoriana de Psicolog&iacute;a por la Diversidad Sexual para apoyar en los talleres de prevenci&oacute;n del bullying homof&oacute;bico, mi participaci&oacute;n, totalmente voluntaria, me permiti&oacute; mejorar mis habilidades para interactuar con grupos y desenvolverme de mejor manera con personas de diferente rango de edad, recomendar&iacute;a totalmente a otros j&oacute;venes a que se integren a esta agradable experiencia.</p>\r\n\r\n<p>Trabajar como facilitador de talleres, tratando de aportar en la reducci&oacute;n de una problem&aacute;tica social e invisibilizada dentro de los espacios educativos, te permite conocer de cerca la informaci&oacute;n err&oacute;nea, mitos y prejuicios a los que muchas veces la poblaci&oacute;n est&aacute; expuesta.</p>\r\n\r\n<p>No es necesario ser un gran investigador para conocer que hablar sobre los diferentes campos de la sexualidad en nuestro contexto es complejo debido a la diversidad de opiniones y creencias en la poblaci&oacute;n adulta; sin embargo, para cualquier futuro facilitador, puedo recomendar que es primordial trabajar educando sobre qu&eacute; es la sexualidad, partiendo de que esta es un eje transversal en la vida del ser humano y de donde se desprende una infinita diversidad de formas en que esta puede ser vivida.</p>\r\n\r\n<p>La sexualidad humana contempla principalmente aspectos biol&oacute;gicos, psicol&oacute;gicos y sociales que influyen en los modos de vivencia de esta. Es importante que un futuro facilitador tenga en cuenta estos factores, que realice una introspecci&oacute;n sobre sus creencias en cuanto a la sexualidad para que a partir de all&iacute; sea capaz de transmitir un mensaje &oacute;ptimo a ni&ntilde;os, ni&ntilde;as, adolescentes y adultos con respecto a la prevenci&oacute;n del bullying homof&oacute;bico.</p>\r\n\r\n<blockquote>\r\n<p><em>David Rivadeneira, egresado de psicolog&iacute;a, facilitador talleres Bullying</em></p>\r\n</blockquote>\r\n', 'Febrero 19, 2019', 'enterate1.png', 'enterate1.png', NULL, NULL),
(2, 'SE NECESITA CORAJE PARA CRECER Y CONVERTIRSE EN QUIEN REALMENTE ERES  (E. E. Cummings)', 'Dentro de la relación de acompañamiento a adolescentes diversxs, debemos entender que se deben cumplir con ciertas características, entre la más importante tenemos a la empatía y escucha activa, la primera se refiere a entender a la persona y que est', '<p>Dentro de la relaci&oacute;n de acompa&ntilde;amiento a adolescentes diversxs, debemos entender que se deben cumplir con ciertas caracter&iacute;sticas, entre la m&aacute;s importante tenemos a la empat&iacute;a y escucha activa, la primera se refiere a entender a la persona y que esta persona sepa que est&aacute; siendo comprendida, que sea tratada como esta quiere ser tratada.</p>\r\n\r\n<p>Esto se desarrolla desde el primer contacto; mediante la escucha activa, manteniendo una mirada fija, sin distracciones y prestando atenci&oacute;n tanto al leguaje verbal como no verbal, no se debe dar interpretaciones o decir juicios de valor, se debe tener una apertura al dialogo y no mostrar reacciones ante lo que nos cuenten los adolescentes diversxs, deben ver en nosotros una imagen de seguridad, confianza y sobre todo protecci&oacute;n, ellos quieren ser escuchados, ellos quieren hablar y tener una descarga emocional, y sentir este apoyo en todas las esferas de la vida.</p>\r\n\r\n<p>Si bien es cierto por su orientaci&oacute;n muchos de estos j&oacute;venes sufren de discriminaci&oacute;n, no debemos centrarnos en esto, sino en su vida de forma global. Muchas de las veces intentamos dar una explicaci&oacute;n al origen de su orientaci&oacute;n o identidad sexual, o intentamos solo ahondar en su pasado para tratar de explicar el porqu&eacute;, lo cual delimita a la persona.</p>\r\n\r\n<p>Lo que se debe hacer es lograr un acompa&ntilde;amiento afectivo, mostrando apoyo y escucha activa a todo momento. Otra caracter&iacute;stica importante es el equilibrio y la madurez emocional del acompa&ntilde;ante cuando conoce esta realidad de la persona, una nueva realidad que puede, muchas de las veces chocar con nuestras creencias, por eso debemos tener el conocimiento de nuestras emociones, una tranquilidad y control de estas, para que la persona sienta esa calidez y vea en nosotros una especie de amigo m&aacute;s, que no le juzgar&aacute;, no le criticar&aacute; o discriminar&aacute;, porque le mirar&aacute; como un ser humano integral, m&aacute;s all&aacute; de su orientaci&oacute;n sexual y/o identidad de g&eacute;nero.</p>\r\n\r\n<p>As&iacute; lograremos un acompa&ntilde;amiento psicol&oacute;gico con herramientas que le ayuden en el proceso de aceptaci&oacute;n de su propia orientaci&oacute;n sexoafectiva as&iacute; como a superar las secuelas del maltrato, rechazo o estigma que hayan podido padecer.</p>\r\n\r\n<blockquote>\r\n<p>Kelvin Molina, estudiante de psicolog&iacute;a, acompa&ntilde;ante del grupo de adolescentes diversxs.</p>\r\n</blockquote>\r\n', 'Febrero 19, 2019', 'enterate2.png', 'enterate2.png', NULL, NULL),
(5, 'EL FUTURO DE LOS NIÑOS ES SIEMPRE HOY, MAÑANA SERÁ TARDE  (Gabriela Mistral)', 'La adolescencia es una etapa importante de la vida de una persona en la que se fortalecen la seguridad personal y social, se forjan las amistades que perdurarán a lo largo de la vida. En la adolescencia se viven diversas experiencias que en su mayorí', '<p>La adolescencia es una etapa importante de la vida de una persona en la que se fortalecen la seguridad personal y social, se forjan las amistades que perdurar&aacute;n a lo largo de la vida. En la adolescencia se viven diversas experiencias que en su mayor&iacute;a deber&iacute;an ser positivas para favorecer al desarrollo de su autoestima y de su autorrealizaci&oacute;n, sobretodo en la convivencia escolar. Los amigos son parte importante de este proceso, si un adolescente no logra establecer estos v&iacute;nculos y por el contrario tiene pares hostiles, lo vuelven vulnerable, el o la adolescente podr&aacute; tener la familia m&aacute;s fraterna, dulce, amorosa que aparentemente lo debe sostener, pero si en el &ldquo;cole&rdquo; no hay un ambiente acogedor para &eacute;l o ella pues simplemente su fortaleza decaer&aacute;.</p>\r\n\r\n<p>La diferencia siempre ha sido culturalmente mal vista o como menos tolerable y m&aacute;s a&uacute;n en lo que respecta al g&eacute;nero, sexo u orientaci&oacute;n sexual, desde peque&ntilde;os nos culturizan binariamente, es decir, somos hombres o mujeres y somos heterosexuales. Si no cumples con esto, est&aacute;s la categor&iacute;a de &ldquo;raritx&rdquo; y esto no se respeta, no se &ldquo;tolera&rdquo;. El bullying se desarrolla dentro de estas formas de pensamiento, de no respetar a quienes no est&aacute;n dentro de mi perspectiva normada. El bullying homof&oacute;bico es el acoso, agresi&oacute;n constante hacia un adolescente por su orientaci&oacute;n sexual o por su identidad de g&eacute;nero, e incluso puede pasar tambi&eacute;n si la gente cree que alguien es LGBT sin que la persona lo sea necesariamente.</p>\r\n\r\n<p>Lo m&aacute;s probable cuando un muchachx es v&iacute;ctima de bullying es que ya no quiera ir al colegio, pierda las ganas por hacer las tareas diarias, quiz&aacute; le cueste dormir bien, tenga p&eacute;rdida o aumento del apetito, dolores de est&oacute;mago, cabeza y se sienta enfermo frecuentemente. Esto puede tornarse m&aacute;s grave si es que no pide ayuda o no tiene forma de manifestarlo por el miedo a que si lo hace, la situaci&oacute;n pueda empeorar, estos sentimientos pueden empeorar hasta el punto de llegar al aislamiento, rechazo, exclusi&oacute;n, desesperaci&oacute;n, depresi&oacute;n y ansiedad los cuales pueden dar lugar a una conducta suicida.</p>\r\n\r\n<p>Sin embargo, es importante mencionar que muchos j&oacute;venes que sufren bullying no tienen pensamientos suicidas, eso debe quedar claro para no asociar lo uno con lo otro como consecuencia inmediata. Pero si es importante que ante estas circunstancias se tomen acciones prontas para prevenir actos que atenten a su bienestar, refiri&eacute;ndome no solamente al suicidio, sino al cutting o cualquier acci&oacute;n que atente a su integridad f&iacute;sica o a la salud mental del adolescente.</p>\r\n\r\n<p>El bullying homof&oacute;bico puede provocar en el adolescente autorepresiones: creer que en efecto est&aacute; equivocadx, que algo no est&aacute; bien en ella o en &eacute;l, sentimientos de culpa por ser lo que es, negar su orientaci&oacute;n o identidad sexual lo que desembocar&iacute;a en todo lo antes mencionado y lo m&aacute;s triste que ser&iacute;a un Yo que no soy Yo. Los y las adultas debemos estar compremetidas en asegurar el mejor entorno para el &oacute;ptimo desarrollo de los y las adolescentes.</p>\r\n\r\n<p>Psi. Gabriela Carrera, psic&oacute;loga del Ministerio de Salud, UO &ldquo;Martha Bucaram&rdquo;</p>\r\n', 'Febrero 19, 2019', 'personas2.png', 'personas2.png', NULL, NULL),
(6, 'VE LO QUE LOS DEMÁS NO VEN. LO QUE LOS DEMÁS DECIDEN NO VER, POR TEMOR, CONFORMISMO O PEREZA (Patch Adams)', 'Cuando se piensa en la juventud actual todo análisis se encamina al uso de tecnología, música incomprensible, modas excéntricas, comportamientos peligrosos y cero comunicaciones. Sin embargo, no es una realidad tan distinta a las juventudes pasadas. ', '<p>Cuando se piensa en la juventud actual todo an&aacute;lisis se encamina al uso de tecnolog&iacute;a, m&uacute;sica incomprensible, modas exc&eacute;ntricas, comportamientos peligrosos y cero comunicaciones. Sin embargo, no es una realidad tan distinta a las juventudes pasadas. Primero, llamadas interminables que los padres odiaban pagar, ahora mensajes, WhatsApp y uso de redes sociales que los mismos padres pagan con un plan mensual del mejor celular. Primero canciones con bailes ex&oacute;ticos que se calificaban como pecaminosos y ahora bailes ex&oacute;ticos con algo de m&uacute;sica, primero pantalones con bastas tan anchas que pod&iacute;an usarlas varios pares de piernas y ahora pantalones que no se sabe si son de tela o pintura aplicada directamente a la piel. Primero drogas que serv&iacute;an para socializar y encajar, ahora drogas que sirven para socializar, encajar y de paso volar.</p>\r\n\r\n<p>Es decir, los problemas de la juventud son parecidos para diversas &eacute;pocas y circunstancias, un adolescente como su nombre lo indica &ldquo;adolece&rdquo;, &iquest;a qui&eacute;n le gusta comunicar cuando adolece? Entender a un adolescente es tan complicado como siempre lo fue, lo es y lo ser&aacute;, han sufrido los padres y los maestros tratando de desenredar esos nudos que la juventud implica, sin mayor &eacute;xito. &iexcl;D&eacute;jale, est&aacute; en la edad del burro!</p>\r\n\r\n<p>En la adolescencia todo es tan dif&iacute;cil de entender, desde las fastidiosas espinillas, el cambio de voz en los varones, el desarrollo adelantado del cuerpo de algunas se&ntilde;oritas, hasta esa atracci&oacute;n inexplicable al enamorarse, mas &iquest;si esa atracci&oacute;n es hacia una persona del mismo sexo? Ya no solo se pertenece a la edad del burro sino a la etiqueta de lo no correcto, del pecado, de lo malo. Todo se complica a&uacute;n m&aacute;s, los j&oacute;venes diversxs suelen no ser aceptados en sus propios hogares, incluso en su cotidianidad.</p>\r\n\r\n<p>Sin haber sufrido lo que atraviesa una persona con orientaci&oacute;n sexual diversa, sin tener un familiar cercano o un amigo que resulta tener &ldquo;gustos diferentes&rdquo; es complicado crear una sensibilizaci&oacute;n, es casi imposible imaginar lo que sufre alguien por el simple hecho de SER quien es. La soluci&oacute;n m&aacute;s f&aacute;cil es negarlo, vivir en el anonimato, sentir culpa o querer morir.</p>\r\n\r\n<p>El acompa&ntilde;amiento psicol&oacute;gico parte de la postura de servir y ayudar al otro, la aceptaci&oacute;n incondicional significa reconocer, valorar y brindar cari&ntilde;o no solamente a quien pide ayuda en los centros psicol&oacute;gicos sino tambi&eacute;n reconocerse, valorarse y amarse a s&iacute;, pues NO SE PUEDE BRINDAR LO QUE NO SE TIENE.</p>\r\n\r\n<p>Las caracter&iacute;sticas del acompa&ntilde;amiento para j&oacute;venes diversxs entonces, implica brindar un espacio seguro, aceptaci&oacute;n incondicional, sin prejuicios, sin etiquetas, de modo objetivo y sobre todo con &eacute;tica. Quiz&aacute; sea el &uacute;nico lugar donde se puedan sentir c&oacute;modos consigo mismos.</p>\r\n\r\n<p>En el espacio terap&eacute;utico se debe reconocer la existencia de la persona, sus cualidades, qui&eacute;n es ese adolescente, a qu&eacute; le teme, sus deseos, que espera lograr cuando adulto. Su orientaci&oacute;n sexual es parte de quien es mas no lo es todo, ES UNA PERSONA EN CONSTRUCCI&Oacute;N.</p>\r\n\r\n<p>Diego L&oacute;pez, estudiante psicolog&iacute;a, pasante en servicio psicol&oacute;gico afirmativo gratuito</p>\r\n', 'Febrero 19, 2019', 'enterate21.png', 'enterate21.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizaciones`
--

CREATE TABLE `organizaciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `organizaciones`
--

INSERT INTO `organizaciones` (`id`, `descripcion`, `url`) VALUES
(1, 'Red Ecuatoriana de Psicología por la Diversidad LGBTI – REPsiD Asistencia psicológica - capacitación Calle D N43-134 y Av. Edmundo Carvajal, Of. 1 (02) 2273324 / 0984580875 GUAYAQUIL 0996395550 repsidec@gmail.com', 'https://www.facebook.com/REPsiDec/'),
(2, 'Fundación Pakta Asesoría legal 098 705 7971 funpakta@gmail.com', 'https://www.facebook.com/funpakta/'),
(3, 'Fundación Amor y Fortaleza Grupo de padres de niñxs trans 099 902 7924 presidencia@amoryfortaleza.org', 'http://amoryfortaleza.org/'),
(4, 'Juntas Metropolitanas de protección de derechos de NNA del cantón Quito Junta Zona Centro Calle Venezuela N1-35 entre Rocafuerte y Bolívar. Centro Comercial La Manzana. (02) 3952300 ext. 16662 junta.centro@quito.gob.ec Cobertura: San Juan, Itchimbia, La Libertad, Centro Histórico, Puengasí, Chilibulo, La Magdalena, Chimbacalle, La Ferroviaria, San Bartolo, La Mena, Solanda, La Argelia. Junta Zona La Delicia Calle Unión y Progreso Oe1-782 y Av. La Prensa. Sector Cotocollao. 2294342 junta.ladelicia@quito.gob.ec Cobertura: San Antonio, Pomasqui, Carcelén, El Condado, Ponceano, Cotocollao, Comité del Pueblo, Kenedy, San Isidro del Inca, La Concepción, Cochapamba, Jipijapa, Iñaquito, Belisario Quevedo, Mariscal Sucre Junta Zona Calderón Giovani Calles S/N y Tobías Godoy. Ref. Junto al Club de Leones. 3952300 junta.calderon@quito.gob.ec Cobertura: Pacto, Gualea, Nanegalito, Nanegal, Nono, Calacalí, San José de Minas, Atahualpa, Chavezpamba, Puéllaro, Perucho, Calderón, Llano Chico, Zámbiza, Nayón, Cumbayá, Tumbaco, Puembo, Tababela, Guayllabamba, El Quinche, Checa, Yaruquí, Pifo. Junta Zona Quitumbe Emilio Uzcátegui S43 e Hipólito Mendoza. 3952300 junta.quitumbe@quito.gob.ec Cobertura: Lloa, Chillogallo, La Ecuatoriana, Guamaní, Turubamba, Conocoto, Amaguaña, Guangopolo, Alangasí, La Merced, Pintag', 'https://www.proteccionderechosquito.gob.ec/grupos/informacion-basica-nna/'),
(5, 'Madres de hijos LGBTI del Azuay 0999969472 madreshijoslgbtiazuay@gmail.com', 'https://www.facebook.com/MadresHijxsLGBTIAzuay/'),
(6, 'Red LGBTI Azuay redlgbtiazuay@outlook.es', 'https://www.facebook.com/REDLGBTIAZUAY/'),
(7, 'Fundación Cattleya Barrio Maria Auxiliadora 1 calle 304 y av 207 0959172046 fundacioninestransec@gmail.com', 'https://www.facebook.com/MadresHijxsLGBTIAzuay/');

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
(3, 'SUMANDO\r\nLIBERTADES,\r\nGuía iberoamericana para el abordaje del\r\nacoso escolar por homofobia y transfobia', 'En cada sala de clases se intercambian ideas, opiniones,\r\nexperiencias, preguntas y respuestas que inciden en la forma\r\ncomo alumnado y docentes se relacionan con el resto del\r\nestablecimiento educacional, con amistades, con familias y\r\ncon todo su entorno, tanto presente, como futuro. ', 'http://educacionlgbti.org/wp-content/uploads/2016/12/SumandoLibertades_Dic16.pdf\r\n', '', 'LIBRO', NULL, 'libro3.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'BULLYING HOMOFÓBICO, Guía de actuación', 'El bullyng homofóbico es toda clase de conducta\r\npermanente o continuada en el tiempo y desarrollada\r\npor uno o más alumnos sobre otro suceptible de\r\ncrear en la víctima sentimientos de terror, angustia o\r\ninferioridad idóneos para humillarle y quebrantar su\r\nresistencia física o moral, mo', 'http://www.felgtb.com/ciberbullying/materiales/Guia%20Bullying%20homofobico%20Guia%20de%20Actuacion.pdf\r\n', '', 'LIBRO', NULL, 'libro4.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Guía didáctica, EL AMOR Y EL SEXO NO SON DE UN SOLO COLOR', '“EL AMOR Y EL SEXO NO SON DE UN SOLO COlor” pretende ser una herramienta de trabajo para\r\nprofesorado, educadores y todos aquellos trabajadores y trabajadoras que desarrollan su trabajo en\r\nla educación en cualquiera de sus ámbitos.', 'http://www.felgtb.org/rs/391/d112d6ad-54ec-438b-9358-4483f9e98868/987/filename/el-amor-y-el-sexo-no-son-de-un-solo-color.pdf\r\n', '', 'LIBRO', NULL, 'libro5.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Guía, Contra el bullying homofóbico, Herramientas para el Profesorado  ', 'Queremos preguntarnos el por qué hay homofobia, y sobre todo por qué existe esa homofobia entre el alumnado de los institutos y colegios. Frecuentemente los/las estudiantes que\r\nson objeto de bullying pertenecen a comunidades minoritarias o grupos socialmente estigmatizados, o presentan ca', 'http://www.educatolerancia.com/wp-content/uploads/2016/12/Guia-Homofobia-Escuela.pdf\r\n', '', 'LIBRO', NULL, 'libro6.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Diversidad sexual en las aulas. Evitar el bullying o acoso homofóbico', 'Muchas veces agresores pero siempre víctimas en una sociedad que\r\ncastiga la exclusión social y la diferencia. De todos los programas de\r\neducación sexual en los que he participado, ha sido con vosotros con\r\nquienes más he aprendido, reído y (al llegar a casa) llorado.', 'http://ceip.edu.uy/IFS/documentos/2015/sexual/materiales/Aula_PLURAL.pdf\r\n', '', 'LIBRO', NULL, 'libro7.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Bullying homofóbico en las escuelas,\r\nGuìa para profesores', 'Este manual tiene como objetivo dar información, ideas y herramientas\r\nprácticas al personal de las escuelas, para ayudar a prevenir y frenar el bullying. Nos\r\ncentraremos específicamente, mas no exclusivamente en el bullying homofóbico\r\n(violencia hacia estudiantes que son percibidos como', 'http://www.familiasporladiversidad.es/files/objetos/BULLYINGprofesores.pdf\r\n\r\n', '', 'LIBRO', NULL, 'libro8.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'BULLYING HOMOFÓBICO', 'Materiales educativos que pretenden dar respuesta a los siguientes objetivos pedagógicos:\r\n\r\nOfrecer programas de formación para entender y abordar el bullying homofóbico dirigidos a profesionales del ámbito educativo y a padres y madres.\r\nDar a conocer políticas públicas contra la lgtbifo', 'http://salutsexual.sidastudi.org/es/zonapedagogica-grupos/documentos-tematicos/zonapedagogica-grupo/150527-bullying-homof-b', '', 'LIBRO', NULL, 'libro9.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'ABRAZAR LA DIVERSIDAD, propuestas para una educación libre\r\nde acoso homofóbico y transfóbico', 'Entre las funciones asumidas por el Instituto de la\r\nMujer y para la Igualdad de Oportunidades está\r\nla de elaborar informes, estudios, análisis y recomendaciones sobre aquellas materias que afecten a la\r\nigualdad de trato y la no discriminación, por cualquier\r\ncircunstancia personal o soc', 'http://www.inmujer.gob.es/publicacioneselectronicas/documentacion/Documentos/DE1711.pdf\r\n', '', 'LIBRO', NULL, 'libro2.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'EL BULLYING HOMOFÓBICO Y TRANSFÓBICO EN LOS CENTROS EDUCATIVOS', 'La violencia homofóbica y transfóbica en el ámbito escolar vulnera directamente el derecho a la educación de aquellos afectados, y repercute significativamente en los procesos de enseñanza y aprendizaje. De igual manera, afecta a los docentes y a la comunidad educativa en general.', 'http://unesdoc.unesco.org/images/0024/002448/244841S.pdf\r\n', '', 'LIBRO', NULL, 'libro1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(290) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `texto` text COLLATE utf8mb4_unicode_ci,
  `tipo` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen1` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `audiovisuales`
--
ALTER TABLE `audiovisuales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudios`
--
ALTER TABLE `estudios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organizaciones`
--
ALTER TABLE `organizaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `audiovisuales`
--
ALTER TABLE `audiovisuales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estudios`
--
ALTER TABLE `estudios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `organizaciones`
--
ALTER TABLE `organizaciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
