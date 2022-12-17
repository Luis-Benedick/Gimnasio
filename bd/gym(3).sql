-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2021 a las 20:08:45
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cate`
--

CREATE TABLE `cate` (
  `id_cate` int(11) NOT NULL,
  `nomcate` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_create` date NOT NULL,
  `estado` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cate`
--

INSERT INTO `cate` (`id_cate`, `nomcate`, `fecha_create`, `estado`) VALUES
(1, 'Accesorios', '2021-03-11', '1'),
(2, 'Aminoácidos', '2021-03-11', '1'),
(3, 'Barras proteicas', '2021-03-11', '1'),
(4, 'Creatinas', '2021-03-11', '1'),
(5, 'Glutamina', '2021-03-11', '1'),
(6, 'Óxido nitrico', '2021-03-11', '1'),
(7, 'Post-entrenamiento', '2021-03-11', '1'),
(8, 'Pre-entrenamiento', '2021-03-11', '1'),
(9, 'Proteínas', '2021-03-11', '1'),
(10, 'Quemadores de grasa', '2021-03-11', '1'),
(11, 'Vitaminas y minerales', '2021-03-11', '1'),
(12, 'Balones', '2021-03-12', '1'),
(13, 'Barras', '2021-03-12', '1'),
(14, 'Ligas', '2021-03-12', '1'),
(15, 'Pelotas', '2021-03-12', '1'),
(16, 'Pesas', '2021-03-12', '1'),
(17, 'Sacos', '2021-03-12', '1'),
(18, 'Tapetes', '2021-03-12', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_clien` int(11) NOT NULL,
  `nomcli` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telef` char(9) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `gener` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fech_ini` date NOT NULL,
  `estado` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `noti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_clien`, `nomcli`, `email`, `telef`, `clave`, `cargo`, `gener`, `foto`, `fech_ini`, `estado`, `noti`) VALUES
(1, 'Jose Miguel', 'josemiguel@gmail.com', '986764555', '1bbd886460827015e5d605ed44252251', '2', 'Masculino', 'eightyn.png', '2021-03-14', '1', 1),
(2, 'Milagros Morales', 'milamo@gmail.com', '998888888', 'fcea920f7412b5da7be0cf42b8c93759', '2', 'Femenino', 'twenty_nine.png', '2021-03-14', '1', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detgui`
--

CREATE TABLE `detgui` (
  `coddetgu` int(11) NOT NULL,
  `codguia` int(11) NOT NULL,
  `id_clien` int(11) NOT NULL,
  `fechare` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `detgui`
--

INSERT INTO `detgui` (`coddetgu`, `codguia`, `id_clien`, `fechare`) VALUES
(1, 8, 1, '2021-03-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id_grup` int(11) NOT NULL,
  `nomgru` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_salon` int(11) NOT NULL,
  `id_clien` int(11) NOT NULL,
  `fech_entr` date NOT NULL,
  `fech_salid` date NOT NULL,
  `hora_entr` time NOT NULL,
  `hora_salid` time NOT NULL,
  `estado` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id_grup`, `nomgru`, `id_salon`, `id_clien`, `fech_entr`, `fech_salid`, `hora_entr`, `hora_salid`, `estado`) VALUES
(1, 'Grupo_Aeróbicos', 1, 1, '2021-03-12', '2021-05-19', '09:00:00', '13:00:00', '1'),
(2, 'Grupo_Abdominales', 2, 3, '2021-03-12', '2021-06-23', '08:00:00', '13:30:00', '1'),
(3, 'Grupo_Bosu', 3, 2, '2021-03-12', '2021-07-28', '08:00:00', '13:30:00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gua`
--

CREATE TABLE `gua` (
  `codguia` int(11) NOT NULL,
  `nomguia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `decp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `gua`
--

INSERT INTO `gua` (`codguia`, `nomguia`, `decp`, `foto`, `fecha`) VALUES
(1, 'Estiramiento de cuadriceps con silla ', 'Realizar una serie de ejercicios de fortalecimiento del cuádriceps ayudará a sujetar mejor la rótula y reducir el desgaste del cartílago. Son muy sencillos y puedes hacerlos en casa. Cualquier pauta de ejercicio debe ser adaptada y personalizada, por lo q', 'silla.jpg', '2021-03-19'),
(2, 'Apretar una pelota', 'Un punto importante al realizar una pauta de ejercicios con pelotas para rehabilitación será la de incluir en la rutina de los pacientes ejercicios fáciles para que puedan realizarlos en su domicilio (sencillos y que lleven poco tiempo). Para que la terap', 'apretar.jpg', '2021-03-19'),
(3, 'Levantarse desde sentado.', 'Para pasar de sentado a de pie, apóyese con los brazos. Si se levanta de una silla, apóyese en los reposabrazos. Si se levanta de la cama, o de una silla sin reposabrazos, apóyese en sus muslos o rodillas y, en todo caso, mantenga la espalda recta o liger', 'levan.gif', '2021-03-19'),
(4, 'Ejercicios respiratorios', 'Colocarse de pie y ubicar ambas manos a nivel del abdomen.', 'respi.jpg', '2021-03-19'),
(5, 'Ejercicios de cuello', 'Puede colocarse de pie o sentarse en una silla con la espalda recta, apoyada en el respaldo de la silla.', 'ejer2.jpg', '2021-03-19'),
(6, 'Ejercicios de brazos y hombros', 'Llevar la mano del lado operado a la nuca. Llevar la mano del lado operado a la cabeza hasta tocar con los dedos la oreja contraria. Elevar y bajar los hombros. Hacer círculos con los hombros.', 'ejer3.jpg', '2021-03-19'),
(7, ' Lagartija o push-up', 'Las lagartijas o push ups son un excelente ejercicio para trabajar los pectorales, hombros y tríceps.  Ideales para hacer en casa, pues no necesitamos más material que nuestro propio cuerpo.      Mientras bajas y subes procura mantener en tensión abdomen ', 'ejer4.png', '2021-03-19'),
(8, 'Apertura de brazos', 'El ejercicio de aperturas de brazos en el suelo, es uno de los ejercicios que va mejor para trabajar la parte externa del pectoral, pero el gran problema, como casi siempre está en la ejecución del mismo, ya que no siempre se ejecuta correctamente.  La ma', 'ejer5.jpg', '2021-03-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instruc`
--

CREATE TABLE `instruc` (
  `id_intr` int(11) NOT NULL,
  `nomintr` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dnistr` char(8) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `teelf` char(9) COLLATE utf8_unicode_ci NOT NULL,
  `edad` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `gener` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fech_ini` date NOT NULL,
  `fech_fin` date NOT NULL,
  `estado` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `instruc`
--

INSERT INTO `instruc` (`id_intr`, `nomintr`, `dnistr`, `email`, `teelf`, `edad`, `gener`, `foto`, `fech_ini`, `fech_fin`, `estado`) VALUES
(1, 'Jose Alberto Gomez', '78688686', 'josegomez@gmail.com', '987856565', '28', 'Masculino', '026-man.png', '2021-03-11', '2021-05-20', '1'),
(2, 'Pedro Aguilar Yovera', '74664434', 'pedroagui@gmail.com', '976567675', '25', 'Masculino', '049-man.png', '2021-03-11', '2021-05-14', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `codplan` int(11) NOT NULL,
  `nomplan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `id_clien` int(11) NOT NULL,
  `estado` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `fechare` date NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_produc` int(11) NOT NULL,
  `nomprod` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_cate` int(11) NOT NULL,
  `descrp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preciop` decimal(10,2) NOT NULL,
  `canti` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `fechare` date NOT NULL,
  `estado` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_produc`, `nomprod`, `id_cate`, `descrp`, `foto`, `preciop`, `canti`, `fechare`, `estado`) VALUES
(2, 'Mutant Amino 300 tabs', 2, 'MUTANT AMINO es una fuente concentrada de aminoácidos esenciales y aminoácidos ramificados (BCAAs) para reparación muscular y regeneración.', 'amino.jpg', '99.00', '90', '2021-03-11', '1'),
(3, 'Bcaa Rc 90 Serv – Ronnie Coleman', 2, 'BCAA XS de Ronnie Coleman RCCS es un bcaa con ratio 2:1:1 en polvo instantáneo que contiene los 3 aminoácidos ramificados LEUCINA, VALINA E ISOLEUCINA. Son de disolución y mezcla instantánea y fáciles de absorber.', 'bcca.jpg', '199.00', '50', '2021-03-11', '1'),
(4, 'Glutamine XS 1kg RCSS', 5, 'Glutamine XS es el aminoácido más abundante en el tejido muscular y tiene un rol importante en todas las funciones corporales. Los estudios sugieren que la suplementación con glutamina puede prevenir la pérdida de masa muscular debido al rol que tiene la ', 'gluta.jpg', '169.00', '90', '2021-03-11', '1'),
(5, 'Balón Slam Negro', 12, 'Fitness Extreme', 'balon1.jpg', '120.00', '10', '2021-03-14', '1'),
(6, 'Balón de Pared', 12, 'Fitness Extreme', 'balon2.jpg', '120.00', '10', '2021-03-14', '1'),
(7, 'Barra Buddy Pum', 13, 'Modern Buddy', 'barra.jpg', '90.00', '10', '2021-03-14', '1'),
(8, ' Ligas Cortas', 14, ' Ligas Cortas', 'liga1.jpg', '85.00', '10', '2021-03-14', '1'),
(9, 'Pelota de Pilates', 15, 'Pelota de Pilates', 'pelo1.jpg', '65.00', '10', '2021-03-14', '1'),
(10, 'Pesas Rusas', 16, 'Pesas Rusas', 'pesq1.jpg', '60.00', '10', '2021-03-14', '1'),
(11, ' Saco Búlgaro', 17, ' Saco Búlgaro', 'saco1.jpg', '165.00', '10', '2021-03-14', '1'),
(12, 'Colchoneta Yoga', 18, 'Colchoneta Yoga', 'tape1.jpg', '85.00', '10', '2021-03-14', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `id_salon` int(11) NOT NULL,
  `nomsalo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`id_salon`, `nomsalo`, `fecha_create`) VALUES
(1, 'SALÓN A', '2021-03-12 00:48:41'),
(2, 'SALÓN B', '2021-03-12 00:48:51'),
(3, 'SALÓN C', '2021-03-12 06:22:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `clave`, `cargo`) VALUES
(1, 'jordan roque seminario', 'jjroquer@gmail.com', 'b0baee9d279d34fa1dfd71aadb908c3f', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `valora`
--

CREATE TABLE `valora` (
  `id_valor` int(11) NOT NULL,
  `id_produc` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `valora`
--

INSERT INTO `valora` (`id_valor`, `id_produc`, `rate`, `fecha_registro`) VALUES
(1, 3, 5, '2021-03-12 00:07:51'),
(2, 3, 4, '2021-03-12 00:10:52'),
(3, 4, 1, '2021-03-12 00:11:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`id_cate`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_clien`);

--
-- Indices de la tabla `detgui`
--
ALTER TABLE `detgui`
  ADD PRIMARY KEY (`coddetgu`),
  ADD KEY `codguia` (`codguia`),
  ADD KEY `id_clien` (`id_clien`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id_grup`),
  ADD KEY `id_salon` (`id_salon`),
  ADD KEY `id_clien` (`id_clien`);

--
-- Indices de la tabla `gua`
--
ALTER TABLE `gua`
  ADD PRIMARY KEY (`codguia`);

--
-- Indices de la tabla `instruc`
--
ALTER TABLE `instruc`
  ADD PRIMARY KEY (`id_intr`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`codplan`),
  ADD KEY `id_clien` (`id_clien`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_produc`),
  ADD KEY `id_cate` (`id_cate`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`id_salon`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `valora`
--
ALTER TABLE `valora`
  ADD PRIMARY KEY (`id_valor`),
  ADD KEY `id_produc` (`id_produc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cate`
--
ALTER TABLE `cate`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_clien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detgui`
--
ALTER TABLE `detgui`
  MODIFY `coddetgu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id_grup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `gua`
--
ALTER TABLE `gua`
  MODIFY `codguia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `instruc`
--
ALTER TABLE `instruc`
  MODIFY `id_intr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `codplan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_produc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `id_salon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `valora`
--
ALTER TABLE `valora`
  MODIFY `id_valor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detgui`
--
ALTER TABLE `detgui`
  ADD CONSTRAINT `detgui_ibfk_1` FOREIGN KEY (`codguia`) REFERENCES `gua` (`codguia`),
  ADD CONSTRAINT `detgui_ibfk_2` FOREIGN KEY (`id_clien`) REFERENCES `cliente` (`id_clien`);

--
-- Filtros para la tabla `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`id_salon`) REFERENCES `salon` (`id_salon`),
  ADD CONSTRAINT `groups_ibfk_2` FOREIGN KEY (`id_clien`) REFERENCES `cliente` (`id_clien`);

--
-- Filtros para la tabla `planes`
--
ALTER TABLE `planes`
  ADD CONSTRAINT `planes_ibfk_1` FOREIGN KEY (`id_clien`) REFERENCES `cliente` (`id_clien`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_cate`) REFERENCES `cate` (`id_cate`);

--
-- Filtros para la tabla `valora`
--
ALTER TABLE `valora`
  ADD CONSTRAINT `valora_ibfk_1` FOREIGN KEY (`id_produc`) REFERENCES `producto` (`id_produc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
