-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2021 a las 18:01:39
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `red_inmubiliaria`
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `formulario_encuesta_venta`
--
ALTER TABLE `formulario_encuesta_venta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `formulario_encuesta_venta`
--
ALTER TABLE `formulario_encuesta_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
