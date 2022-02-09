-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-02-2022 a las 21:57:57
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bmol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_banco`
--

CREATE TABLE `tb_banco` (
  `id_banco` int(11) NOT NULL,
  `nombreBanco` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_banco`
--

INSERT INTO `tb_banco` (`id_banco`, `nombreBanco`, `estado`) VALUES
(1, 'BANCOMER', 1),
(2, 'BANAMEX', 1),
(3, 'HSBC', 1),
(4, 'SANTANDER', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empleados`
--

CREATE TABLE `tb_empleados` (
  `id_clave` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidoPaterno` varchar(50) NOT NULL,
  `apellidoMaterno` varchar(50) DEFAULT NULL,
  `rfc` varchar(13) NOT NULL,
  `curp` varchar(50) NOT NULL,
  `claveInterbancaria` int(20) NOT NULL,
  `numeroCuenta` int(20) NOT NULL,
  `fk_tipoPago` int(11) NOT NULL,
  `fk_banco` int(11) NOT NULL,
  `fk_sueldo` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `fechaCrea` datetime NOT NULL,
  `usuarioCrea` int(11) DEFAULT NULL,
  `fechaModificar` datetime DEFAULT NULL,
  `usuarioModificar` int(11) DEFAULT NULL,
  `fechaEliminar` datetime DEFAULT NULL,
  `usuarioEliminar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_empleados`
--

INSERT INTO `tb_empleados` (`id_clave`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `rfc`, `curp`, `claveInterbancaria`, `numeroCuenta`, `fk_tipoPago`, `fk_banco`, `fk_sueldo`, `estado`, `fechaCrea`, `usuarioCrea`, `fechaModificar`, `usuarioModificar`, `fechaEliminar`, `usuarioEliminar`) VALUES
(1, 'Pablo de Jesus', 'Tec', 'Chi', '1234567', 'rwrewr', 21314565, 6767867, 1, 1, 1, 0, '2022-02-03 11:41:00', NULL, '2022-02-04 13:36:26', NULL, '2022-02-04 12:56:39', NULL),
(2, 'prueba 2', 'wwe', 'qqq', '0etrer', 'TECP930808Y', 11145555, 344, 2, 2, 1, 0, '2022-02-04 12:03:43', NULL, '2022-02-04 12:38:48', NULL, '2022-02-04 12:53:28', NULL),
(3, 'prueba 3', 'qwwwe', 'wewe', '345345gg', 'TECP930808Y', 55533, 5556677, 2, 2, 2, 0, '2022-02-04 12:06:59', NULL, '2022-02-04 12:45:47', NULL, '2022-02-04 12:56:32', NULL),
(4, 'Juan', 'Pech', 'ku', 'qwerroooooorr', 'dwdqwdjkjk3fefewew', 2147483647, 2147483647, 2, 1, 2, 1, '2022-02-04 14:52:08', NULL, '2022-02-04 14:52:43', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_formapagos`
--

CREATE TABLE `tb_formapagos` (
  `id_formaPago` int(11) NOT NULL,
  `formaPagos` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_formapagos`
--

INSERT INTO `tb_formapagos` (`id_formaPago`, `formaPagos`, `estado`) VALUES
(1, 'EFECTIVO', 1),
(2, 'ELECTRONICO', 1),
(3, 'VALES', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_sueldos`
--

CREATE TABLE `tb_sueldos` (
  `id_sueldo` int(11) NOT NULL,
  `sueldo` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_sueldos`
--

INSERT INTO `tb_sueldos` (`id_sueldo`, `sueldo`, `estado`) VALUES
(1, '10000', 0),
(2, '14000', 0),
(3, '19000', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_banco`
--
ALTER TABLE `tb_banco`
  ADD PRIMARY KEY (`id_banco`);

--
-- Indices de la tabla `tb_empleados`
--
ALTER TABLE `tb_empleados`
  ADD PRIMARY KEY (`id_clave`);

--
-- Indices de la tabla `tb_formapagos`
--
ALTER TABLE `tb_formapagos`
  ADD PRIMARY KEY (`id_formaPago`);

--
-- Indices de la tabla `tb_sueldos`
--
ALTER TABLE `tb_sueldos`
  ADD PRIMARY KEY (`id_sueldo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_banco`
--
ALTER TABLE `tb_banco`
  MODIFY `id_banco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_empleados`
--
ALTER TABLE `tb_empleados`
  MODIFY `id_clave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_formapagos`
--
ALTER TABLE `tb_formapagos`
  MODIFY `id_formaPago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_sueldos`
--
ALTER TABLE `tb_sueldos`
  MODIFY `id_sueldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
