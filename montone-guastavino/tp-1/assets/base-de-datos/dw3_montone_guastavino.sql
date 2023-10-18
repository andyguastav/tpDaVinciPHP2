-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2023 a las 09:38:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dw3_montone_guastavino`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cds`
--

CREATE TABLE `cds` (
  `cd_id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `discografica` varchar(200) NOT NULL,
  `productor` varchar(200) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `sinopsis` text CHARACTER SET big5 NOT NULL,
  `precio` decimal(2,0) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cds`
--

INSERT INTO `cds` (`cd_id`, `titulo`, `discografica`, `productor`, `genero`, `sinopsis`, `precio`, `imagen`, `texto`) VALUES
(1, 'Is This It', 'RCA Records', 'Gordon Raphael', 'Indie rock', 'Primer ?lbum de estudio de The Strokes.', '10', 'assets/imgs/is_this_it.png', 'is this it —en español: ¿esto es todo?— es el álbum debut de la banda de rock estadounidense the strokes. grabado en el estudio transporterraum de nueva york con el productor gordon raphael, el álbum se publicó por primera vez el 30 de julio de 2001 en australia, con rca records como compañía discográfica.'),
(2, 'Room On Fire', 'RCA Records', 'Gordon Raphael', 'Indie rock', 'Segundo ?lbum de estudio de The Strokes.', '12', 'assets/imgs/room_on_fire.png', 'room on fire —en español: habitación en llamas-es el segundo álbum de la banda the strokes. publicado en octubre de 2003, incluyendo tres sencillos: «12:51», «reptilia» y «the end has no end».'),
(3, 'First Impressions Of Earth', 'RCA Records', 'Gordon Raphael', 'Indie rock', 'Tercer ?lbum de estudio de The Strokes.', '13', 'assets/imgs/first_impressions_of_earth.png', 'first impressions of earth —en español: primeras impresiones de la tierra—es el tercer álbum de la banda de rock estadounidense the strokes. fue publicado en enero de 2006, siendo precedido por el sencillo hit \"juicebox\" algunas semanas antes. además, es el primer álbum de the strokes con parental advisory.'),
(4, 'Angles', 'RCA Records', 'Gus Oberg, Joe Chicarelli', 'Indie rock', 'Cuarto ?lbum de estudio de The Strokes.', '14', 'assets/imgs/angles.png', 'angles -en español: anglos-es el cuarto álbum de estudio de la banda de rock estadounidense the strokes, que fue lanzado el 21 de marzo de 2011 en el reino unido y un día después en los estados unidos.'),
(5, 'Comedown Machine', 'RCA Records', 'Gus Oberg, Joe Chicarelli', 'Indie rock', 'Quinto ?lbum de estudio de The Strokes.', '12', 'assets/imgs/comedown_machine.png', 'comedown machine es el quinto álbum de estudio de la banda de indie rock estadounidense the strokes, programado para lanzarse el 26 de marzo de 2013 en los estados unidos y el 25 de marzo en el reino unido, exactamente dos años después que su anterior disco, angles.'),
(6, 'The New Abnormal', 'Cult Records', 'Rick Rubin', 'Indie rock', 'Sexto ?lbum de estudio de The Strokes.', '13', 'assets/imgs/the_new_abnormal.png', 'the new abnormal —en español: la nueva anormalidad— es el sexto álbum de estudio de la banda de garage rock estadounidense the strokes. fue lanzado el 10 de abril de 2020 en todas las plataformas y países.'),
(7, 'Bleach', 'SUB POP', 'Jack Endino', 'Grunge', 'Primer ?lbum de estudio de Nirvana.', '12', 'assets/imgs/bleach.png', 'bleach —en español: «lejía» o «blanqueador»— es el álbum debut de la banda de grunge estadounidense nirvana, lanzado en junio de 1989 a través del sello discográfico independiente sub pop.'),
(8, 'Nevermind', 'DGC Records', 'Butch Vig', 'Grunge', 'Segundo ?lbum de estudio de Nirvana.', '16', 'assets/imgs/nevermind.png', 'nevermind es el segundo álbum de estudio de la banda estadounidense de grunge nirvana, publicado en septiembre de 1991. producido por butch vig, nevermind fue el primer lanzamiento de la banda con dgc records.'),
(9, 'Incesticide', 'DGC Records', 'Jack Endino', 'Grunge', '?lbum de rarezas, lados b y otras grabaciones', '11', 'assets/imgs/incesticide.png', 'incesticide es un álbum recopilatorio de rarezas, lados b y otras grabaciones de estudio lanzado por nirvana el 14 de diciembre de 1992 en europa y al día siguiente en estados unidos, por medio de geffen records en colaboración con sub pop.'),
(10, 'In Utero', 'DGC Records', 'Steve Albini, Scott Litt', 'Grunge', 'Tercer ?lbum de estudio de Nirvana.', '12', 'assets/imgs/in_utero.png', 'in utero es el tercer y último álbum de estudio de la banda estadounidense de grunge nirvana, lanzado en septiembre de 1993 por dgc records. nirvana pretendía que esta grabación sonara diferente a la pulida producción de su anterior álbum, nevermind.'),
(11, 'MTV Unplugged', 'Geffen Records', 'Jack Endino', 'Grunge', '?lbum en vivo de una actuaci?n ac?stica', '14', 'assets/imgs/mtv_unplugged.png', 'mtv unplugged in new york es un álbum en vivo de la banda de rock estadounidense nirvana, lanzado el 1 de noviembre de 1994 por dgc records. presenta una actuación acústica grabada en sony music studios en la ciudad de nueva york el 18 de noviembre de 1993 para la serie de televisión mtv unplugged.'),
(12, 'Nirvana', 'DGC Records', 'Jack Endino', 'Grunge', '?lbum recopilatorio de la banda', '18', 'assets/imgs/nirvana.png', 'nirvana es un álbum recopilatorio de la banda estadounidense de género grunge homónima, lanzado el 29 de octubre de 2002. para promocionar el álbum fue lanzada una canción inédita de la banda titulada «you know you\'re right». en australia fue certificado con tres discos de platino.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles de la orden`
--

CREATE TABLE `detalles de la orden` (
  `detalle_id` int(10) UNSIGNED NOT NULL,
  `orden_id` int(10) UNSIGNED NOT NULL,
  `cd-id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_tienen_cds`
--

CREATE TABLE `detalles_tienen_cds` (
  `cd_id` int(10) UNSIGNED NOT NULL,
  `detalle_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes de compra`
--

CREATE TABLE `ordenes de compra` (
  `orden_id` int(10) UNSIGNED NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `fecha_orden` date NOT NULL,
  `estado_orden` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo_electronico` varchar(255) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cds`
--
ALTER TABLE `cds`
  ADD PRIMARY KEY (`cd_id`),
  ADD KEY `artista_INDEX` (`productor`),
  ADD KEY `precio_INDEX` (`precio`);

--
-- Indices de la tabla `detalles de la orden`
--
ALTER TABLE `detalles de la orden`
  ADD PRIMARY KEY (`detalle_id`),
  ADD KEY `fk_detalles_ordenes_1_idx` (`orden_id`);

--
-- Indices de la tabla `detalles_tienen_cds`
--
ALTER TABLE `detalles_tienen_cds`
  ADD PRIMARY KEY (`cd_id`,`detalle_id`),
  ADD KEY `detalles_tienen_cds_detalles_1_idx` (`detalle_id`),
  ADD KEY `detalles_tienen_cds_cds_idx` (`cd_id`);

--
-- Indices de la tabla `ordenes de compra`
--
ALTER TABLE `ordenes de compra`
  ADD PRIMARY KEY (`orden_id`),
  ADD KEY `fecha_orden_INDEX` (`fecha_orden`),
  ADD KEY `fk_orden_usuarios_1_idx` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`),
  ADD UNIQUE KEY `correo_electronico_UNIQUE` (`correo_electronico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cds`
--
ALTER TABLE `cds`
  MODIFY `cd_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `detalles de la orden`
--
ALTER TABLE `detalles de la orden`
  MODIFY `detalle_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ordenes de compra`
--
ALTER TABLE `ordenes de compra`
  MODIFY `orden_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalles de la orden`
--
ALTER TABLE `detalles de la orden`
  ADD CONSTRAINT `fk_detalles_ordenes_1` FOREIGN KEY (`orden_id`) REFERENCES `ordenes de compra` (`orden_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalles_tienen_cds`
--
ALTER TABLE `detalles_tienen_cds`
  ADD CONSTRAINT `detalles_tienen_cds_cds` FOREIGN KEY (`cd_id`) REFERENCES `cds` (`cd_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalles_tienen_cds_detalles_1` FOREIGN KEY (`detalle_id`) REFERENCES `detalles de la orden` (`detalle_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ordenes de compra`
--
ALTER TABLE `ordenes de compra`
  ADD CONSTRAINT `fk_orden_usuarios_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
