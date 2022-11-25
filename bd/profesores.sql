-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2022 a las 01:05:43
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
-- Base de datos: `bd_colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id_profesor` int(11) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `numero_documento` varchar(15) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `curricullum` varchar(200) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `nro_celular` varchar(9) NOT NULL,
  `passwrd` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_actualiza` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profesor`, `nombres`, `apellido_paterno`, `apellido_materno`, `numero_documento`, `fecha_nacimiento`, `direccion`, `genero`, `email`, `foto`, `curricullum`, `curso`, `nro_celular`, `passwrd`, `estado`, `fecha_registro`, `fecha_actualiza`) VALUES
(1, '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', 1, '2022-11-24', '2022-11-24'),
(2, 'Jesus Andres', 'Sideral ', 'Carrion', '12345678', '0013-03-12', '123456', '1', '123', '132', '321', '321', '32213221', '', 1, '2022-11-24', '2022-11-24'),
(3, 'hesus', 'Lujan', 'Carrion', '12345678', '0002-03-23', '123', '1321', '321', '3221', '321', '3221', '3221', '5uqf81s1ackg', 1, '2022-11-24', '2022-11-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
