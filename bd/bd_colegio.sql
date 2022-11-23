-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2022 a las 20:22:51
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

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
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `numero_documento` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `grado` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `constancia_estudios` varchar(200) NOT NULL,
  `id_apoderado` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_actualiza` date NOT NULL,
  `genero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `nro_documento` varchar(20) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `id_tipo_empleado` int(11) NOT NULL,
  `nro_celular` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nro_cuenta` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecharegistro` date NOT NULL,
  `fechaactualiza` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `nacimiento` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_actualiza` date NOT NULL,
  `estado` int(11) NOT NULL,
  `rango` varchar(10) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombres`, `apellido_paterno`, `apellido_materno`, `dni`, `email`, `celular`, `nacimiento`, `fecha_registro`, `fecha_actualiza`, `estado`, `rango`, `nombre_usuario`, `password`) VALUES
(1, 'Ruben Dario', 'Vasquez', 'Porras', '75614167', 'neburtnt@gmail.com', '987292296', '2022-11-23', '2022-11-21', '2022-11-21', 1, 'admin', 'vasquez75614167', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
