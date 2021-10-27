-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2021 a las 00:43:08
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `red_inmobiliaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_encuesta_encuesta`
--

CREATE TABLE `formulario_encuesta_encuesta` (
  `id` int(11) NOT NULL,
  `Fecha` varchar(25) NOT NULL,
  `Hora` varchar(20) NOT NULL,
  `DirrecionInmueble` text NOT NULL,
  `IDInmueble` int(11) NOT NULL,
  `ServicioPrestado` varchar(10) NOT NULL,
  `OpcionCompra` varchar(10) NOT NULL,
  `UbicacionInmueble` varchar(10) NOT NULL,
  `EstadoGeneral` varchar(10) NOT NULL,
  `AcuerdoValordeVenta` text NOT NULL,
  `OfertaInmueble` text NOT NULL,
  `ReferidoNombre` text NOT NULL,
  `ReferidoTelefono` text NOT NULL,
  `NombreCliente` varchar(40) NOT NULL,
  `CedulaCliente` int(18) NOT NULL,
  `TelefonoCliente` int(15) NOT NULL,
  `MailCliente` varchar(25) NOT NULL,
  `FirmaCliente` text NOT NULL,
  `NombrePropietario` varchar(50) NOT NULL,
  `CedulaPropietario` int(18) NOT NULL,
  `TelefonoPropietario` int(15) NOT NULL,
  `MailPropietario` varchar(50) NOT NULL,
  `FirmaPropietario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario_encuesta_venta`
--

CREATE TABLE `formulario_encuesta_venta` (
  `id` int(11) NOT NULL,
  `Fecha` varchar(25) NOT NULL,
  `Hora` varchar(20) NOT NULL,
  `DirrecionInmueble` text NOT NULL,
  `IDInmueble` int(11) NOT NULL,
  `ServicioPrestado` varchar(10) NOT NULL,
  `OpcionCompra` varchar(10) NOT NULL,
  `UbicacionInmueble` varchar(10) NOT NULL,
  `EstadoGeneral` varchar(10) NOT NULL,
  `AcuerdoValordeVenta` text NOT NULL,
  `OfertaInmueble` text NOT NULL,
  `ReferidoNombre` text NOT NULL,
  `ReferidoTelefono` text NOT NULL,
  `NombreCliente` varchar(40) NOT NULL,
  `CedulaCliente` int(18) NOT NULL,
  `TelefonoCliente` int(15) NOT NULL,
  `MailCliente` varchar(25) NOT NULL,
  `FirmaCliente` text NOT NULL,
  `NombrePropietario` varchar(50) NOT NULL,
  `CedulaPropietario` int(18) NOT NULL,
  `TelefonoPropietario` int(15) NOT NULL,
  `MailPropietario` varchar(50) NOT NULL,
  `FirmaPropietario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` text NOT NULL,
  `remember_token` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'ejemplo', 'prueba@prueba.com', '$1$hbBTtB57$drB37FODRvd1WsZMtHAh80', '', '2021-10-25 11:27:49', '2021-10-25 11:27:49');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario_encuesta_venta`
--
ALTER TABLE `formulario_encuesta_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario_encuesta_venta`
--
ALTER TABLE `formulario_encuesta_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
