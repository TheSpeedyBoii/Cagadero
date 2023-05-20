-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2023 a las 18:34:06
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_avion`
--

CREATE TABLE `tbl_avion` (
  `matricula` varchar(8) NOT NULL,
  `n_asientos` int(3) NOT NULL,
  `aerolinea` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_avion`
--

INSERT INTO `tbl_avion` (`matricula`, `n_asientos`, `aerolinea`) VALUES
('HPT692', 44, 'Easy-Fly'),
('ICKKCK', 82, 'Satena'),
('IVP895', 30, 'Avianca'),
('KVLP22', 30, 'Viva-Air'),
('QWER901', 44, 'Satena'),
('TUPAPA', 82, 'Hellsing');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalle_reserva`
--

CREATE TABLE `tbl_detalle_reserva` (
  `id` int(10) NOT NULL,
  `codigo_reserva` int(10) NOT NULL,
  `id_pasajero` int(10) NOT NULL,
  `codigo_vuelo` int(10) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pasajero`
--

CREATE TABLE `tbl_pasajero` (
  `id_pasajero` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_reserva`
--

CREATE TABLE `tbl_reserva` (
  `codigo_reserva` int(10) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `email_usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `precio_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_ruta`
--

CREATE TABLE `tbl_ruta` (
  `id_ruta` int(3) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_ruta`
--

INSERT INTO `tbl_ruta` (`id_ruta`, `descripcion`) VALUES
(1, 'Apartadó - Medellín'),
(3, 'Medellín - Apartadó'),
(4, 'Turbo - Medellín'),
(5, 'Medellín- Turbo'),
(6, 'Apartadó - Turbo'),
(7, 'Turbo - Apartadó'),
(8, 'Apartadó - Cartagena'),
(9, 'Cartagena - Medellín'),
(10, 'Cartagena - Turbo'),
(11, 'Apartadó - Churido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tiquete`
--

CREATE TABLE `tbl_tiquete` (
  `codigo_tiquete` int(10) NOT NULL,
  `codigo_reserva` int(10) NOT NULL,
  `id_detalle_reserva` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `name_user` varchar(50) NOT NULL,
  `mail_user` varchar(50) NOT NULL,
  `pass_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id_usuario`, `name_user`, `mail_user`, `pass_user`) VALUES
(12, 'Antonio', 'Harold.hoyosme@amigo.edu.co', 'c20ad4d76fe97759aa27a0c99bff6710'),
(13, 'Papomans', 'lewansex@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(14, 'DonChimbo', 'juan69@gmail.com', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_vuelos`
--

CREATE TABLE `tbl_vuelos` (
  `codigo_vuelo` int(3) NOT NULL,
  `matricula_avion` varchar(8) NOT NULL,
  `id_ruta` int(3) NOT NULL,
  `fecha_salida` date NOT NULL,
  `fecha_llegada` date NOT NULL,
  `hora_salida` time NOT NULL,
  `hora_llegada` time NOT NULL,
  `estado` varchar(15) NOT NULL,
  `asientos_disponibles` int(2) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_vuelos`
--

INSERT INTO `tbl_vuelos` (`codigo_vuelo`, `matricula_avion`, `id_ruta`, `fecha_salida`, `fecha_llegada`, `hora_salida`, `hora_llegada`, `estado`, `asientos_disponibles`, `precio`) VALUES
(4, 'ICKKCK', 1, '2023-05-17', '2023-05-17', '06:20:00', '07:00:00', 'Disponible', 5, 129000),
(6, 'HPT692', 3, '2023-05-17', '2023-05-17', '10:25:00', '11:15:00', 'Disponible', 10, 200000),
(7, 'TUPAPA', 1, '2023-05-17', '2023-05-17', '12:15:00', '01:10:00', 'Disponible', 1, 130000),
(8, 'KVLP22', 1, '2023-05-18', '2023-05-18', '13:45:00', '14:20:00', 'Disponible', 6, 230000),
(9, 'ICKKCK', 9, '2023-05-19', '2023-05-19', '12:45:00', '14:00:00', 'Agotado', 0, 98000),
(10, 'TUPAPA', 9, '2023-05-19', '2023-05-19', '16:00:00', '18:00:00', 'Disponible', 3, 129000),
(11, 'TUPAPA', 9, '2023-05-19', '2023-05-19', '16:00:00', '18:00:00', 'Disponible', 3, 130000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_avion`
--
ALTER TABLE `tbl_avion`
  ADD PRIMARY KEY (`matricula`);

--
-- Indices de la tabla `tbl_detalle_reserva`
--
ALTER TABLE `tbl_detalle_reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pasajero` (`id_pasajero`);

--
-- Indices de la tabla `tbl_pasajero`
--
ALTER TABLE `tbl_pasajero`
  ADD PRIMARY KEY (`id_pasajero`);

--
-- Indices de la tabla `tbl_reserva`
--
ALTER TABLE `tbl_reserva`
  ADD PRIMARY KEY (`codigo_reserva`),
  ADD KEY `email_usuario` (`email_usuario`);

--
-- Indices de la tabla `tbl_ruta`
--
ALTER TABLE `tbl_ruta`
  ADD PRIMARY KEY (`id_ruta`);

--
-- Indices de la tabla `tbl_tiquete`
--
ALTER TABLE `tbl_tiquete`
  ADD PRIMARY KEY (`codigo_tiquete`),
  ADD KEY `id_detalle_reserva` (`id_detalle_reserva`),
  ADD KEY `codigo_reserva` (`codigo_reserva`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `mail_user` (`mail_user`);

--
-- Indices de la tabla `tbl_vuelos`
--
ALTER TABLE `tbl_vuelos`
  ADD PRIMARY KEY (`codigo_vuelo`),
  ADD KEY `id_ruta` (`id_ruta`),
  ADD KEY `matricula_avion` (`matricula_avion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_ruta`
--
ALTER TABLE `tbl_ruta`
  MODIFY `id_ruta` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tbl_vuelos`
--
ALTER TABLE `tbl_vuelos`
  MODIFY `codigo_vuelo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_detalle_reserva`
--
ALTER TABLE `tbl_detalle_reserva`
  ADD CONSTRAINT `fk_pasajero` FOREIGN KEY (`id_pasajero`) REFERENCES `tbl_pasajero` (`id_pasajero`);

--
-- Filtros para la tabla `tbl_tiquete`
--
ALTER TABLE `tbl_tiquete`
  ADD CONSTRAINT `fk_id_detalle` FOREIGN KEY (`id_detalle_reserva`) REFERENCES `tbl_detalle_reserva` (`id`),
  ADD CONSTRAINT `fk_reserva` FOREIGN KEY (`codigo_reserva`) REFERENCES `tbl_reserva` (`codigo_reserva`);

--
-- Filtros para la tabla `tbl_vuelos`
--
ALTER TABLE `tbl_vuelos`
  ADD CONSTRAINT `fk_avion` FOREIGN KEY (`matricula_avion`) REFERENCES `tbl_avion` (`matricula`),
  ADD CONSTRAINT `fk_ruta` FOREIGN KEY (`id_ruta`) REFERENCES `tbl_ruta` (`id_ruta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
