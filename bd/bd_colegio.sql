-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2022 a las 00:32:50
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
-- Estructura de tabla para la tabla `asistencia_empleado`
--

CREATE TABLE `asistencia_empleado` (
  `id_asistencia_empleado` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `asistencia` varchar(100) NOT NULL,
  `fecha` date NOT NULL
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

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombres`, `apellido_paterno`, `apellido_materno`, `nro_documento`, `direccion`, `genero`, `id_tipo_empleado`, `nro_celular`, `email`, `nro_cuenta`, `password`, `estado`, `fecharegistro`, `fechaactualiza`) VALUES
(1, 'Sol Elizabeth', 'Nieto', 'Chuco', '12345678', 'calle calle 123', 'Femenino', 0, '987987987', 'ss@gmail.com', '12345678', 'tczochnldbm3n', 1, '2022-11-26', '2022-11-26'),
(2, 'Mayra', 'Cervantes ', 'Santivanez', '12345678', '123456', 'Femenino', 2, '123546897', '132@gmail.com', '1234569', '3ipde', 1, '2022-11-26', '2022-11-26');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_empleado`
--

CREATE TABLE `tipo_empleado` (
  `id_tipo_empleado` int(11) NOT NULL,
  `tipo_empleado` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_actualiza` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_empleado`
--

INSERT INTO `tipo_empleado` (`id_tipo_empleado`, `tipo_empleado`, `estado`, `fecha_registro`, `fecha_actualiza`) VALUES
(1, 'Limpieza', 1, '2022-11-26', '2022-11-26'),
(2, 'Auxiliar', 1, '2022-11-26', '2022-11-26'),
(3, 'Secretariado', 1, '2022-11-26', '2022-11-26');

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
-- Indices de la tabla `asistencia_empleado`
--
ALTER TABLE `asistencia_empleado`
  ADD PRIMARY KEY (`id_asistencia_empleado`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesor`);

--
-- Indices de la tabla `tipo_empleado`
--
ALTER TABLE `tipo_empleado`
  ADD PRIMARY KEY (`id_tipo_empleado`);

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
-- AUTO_INCREMENT de la tabla `asistencia_empleado`
--
ALTER TABLE `asistencia_empleado`
  MODIFY `id_asistencia_empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_empleado`
--
ALTER TABLE `tipo_empleado`
  MODIFY `id_tipo_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
