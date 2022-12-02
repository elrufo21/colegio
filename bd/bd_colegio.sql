-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2022 a las 21:17:06
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

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `nombres`, `apellido_paterno`, `apellido_materno`, `numero_documento`, `fecha_nacimiento`, `direccion`, `email`, `grado`, `foto`, `constancia_estudios`, `id_apoderado`, `estado`, `fecha_registro`, `fecha_actualiza`, `genero`) VALUES
(26, 'Luciana', 'Vasquez ', 'Porras', '12345678', '2006-05-19', '123', '123', 132, '123', '321', 75614167, 1, '2022-12-02', '2022-12-02', '2'),
(27, '1231', '123', '123', '123', '0012-03-12', '123', '123', 2, '123', '123', 123, 1, '2022-12-02', '2022-12-02', 'Masculino'),
(28, '123', '123', '123', '123', '0123-03-12', '123', '123', 1, '123', '123', 123, 1, '2022-12-02', '2022-12-02', 'Femenino'),
(29, 'qwe', 'qwe', 'qwe', '123123', '0123-03-12', 'qwe123', 'qwe@asdasd.com', 2, 'qwe', 'qwe', 123123, 1, '2022-12-02', '2022-12-02', 'Masculino'),
(30, '', '', '', '', '0000-00-00', '', '', 0, '', '', 0, 1, '2022-12-02', '2022-12-02', '0'),
(31, 'qweqwe', 'qweqwe', 'qqqq', '123123', '0123-03-12', '123123', 'qwe@asdasd.com', 5, 'qwe', 'qwe', 123, 1, '2022-12-02', '2022-12-02', 'Femenino'),
(32, '', '', '', '', '0000-00-00', '', '', 0, '', '', 0, 1, '2022-12-02', '2022-12-02', '0'),
(33, 'juan', 'jjsss', 'jasdjj', '12345678', '0000-00-00', 'Calle Lima 166 San Jeronimo De Tunan', '12@gmail.com', 3, 'qweqwe', 'qweqwe', 756141675, 1, '2022-12-02', '2022-12-02', 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoderado`
--

CREATE TABLE `apoderado` (
  `id_apoderado` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `tipo_doc` int(11) NOT NULL,
  `nro_documento` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `parentezco` varchar(50) NOT NULL,
  `dni_alumno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `apoderado`
--

INSERT INTO `apoderado` (`id_apoderado`, `nombres`, `apellido_paterno`, `apellido_materno`, `tipo_doc`, `nro_documento`, `celular`, `parentezco`, `dni_alumno`) VALUES
(5, 'Ruben Dario', 'Vasquez', 'Porras', 1, '75614167', '987292296', '1', '12345678'),
(6, '123', '123', '123', 1, '123', '123', '123', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia_empleado`
--

CREATE TABLE `asistencia_empleado` (
  `id_asistencia_empleado` int(11) NOT NULL,
  `id_empleado` int(11) NOT NULL,
  `asistencia` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora_ingreso` varchar(30) DEFAULT NULL,
  `hora_salida` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistencia_empleado`
--

INSERT INTO `asistencia_empleado` (`id_asistencia_empleado`, `id_empleado`, `asistencia`, `fecha`, `hora_ingreso`, `hora_salida`) VALUES
(8, 10, 'Presente', '2022-11-27', '22:17:28', ''),
(10, 10, 'Presente', '2022-11-28', '22:38:59', ''),
(11, 10, 'Presente', '2022-11-30', '13:49:16', ''),
(12, 10, 'Presente', '2022-12-02', '09:59:04', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia_profesor`
--

CREATE TABLE `asistencia_profesor` (
  `id_asistencia_profesor` int(11) NOT NULL,
  `id_profesor` int(11) NOT NULL,
  `asistencia` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `hora_ingreso` varchar(100) NOT NULL,
  `hora_salida` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistencia_profesor`
--

INSERT INTO `asistencia_profesor` (`id_asistencia_profesor`, `id_profesor`, `asistencia`, `fecha`, `hora_ingreso`, `hora_salida`) VALUES
(2, 6, 'Presente', '2022-12-02', '14:18:20', '');

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
(10, 'Mayra', 'Cervantes', 'Santivañez', '12345678', '1212', 'Femenino', 3, '123456789', '12345', '12345678', 'wu4zb', 1, '2022-11-28', '2022-11-28');

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
(3, 'hesus', 'Lujan', 'Carrion', '12345678', '0002-03-23', '123', '1321', '321', '3221', '321', '3221', '3221', '5uqf81s1ackg', 1, '2022-11-24', '2022-11-24'),
(4, 'Valeria', 'Vasquez', 'Porras', '77173883', '2000-03-12', '123', '1', '321', '321', '321', 'matematicas', '123456789', 'nnfico0', 1, '2022-12-02', '2022-12-02'),
(5, 'test', 'test', 'test', '12345678', '0132-03-12', '12345678', '1', '123', '132', '132', '132', '312', '7wip', 1, '2022-12-02', '2022-12-02'),
(6, 'test', 'tes', 'arasd', '321321', '0021-12-31', '321321', '321321', '321321', '321321', '231321', '3213', '21321', 't89q', 1, '2022-12-02', '2022-12-02');

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
(1, 'Ruben Dario', 'Vasquez', 'Porras', '75614167', 'neburtnt@gmail.com', '987292296', '2022-11-23', '2022-11-21', '2022-11-21', 1, 'admin', 'vasquez75614167', '123'),
(8, 'Mayra', 'Cervantes', 'Santivañez', '12345678', '12345', '123456789', '2022-11-28', '2022-11-28', '2022-11-28', 1, 'Secretario', 'Cervantes12345678', 'p2rvt'),
(9, 'test', 'tes', 'arasd', '321321', '321321', '21321', '2022-12-02', '2022-12-02', '2022-12-02', 1, 'profesor', 'tes321321', 'u9yk');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `apoderado`
--
ALTER TABLE `apoderado`
  ADD PRIMARY KEY (`id_apoderado`);

--
-- Indices de la tabla `asistencia_empleado`
--
ALTER TABLE `asistencia_empleado`
  ADD PRIMARY KEY (`id_asistencia_empleado`);

--
-- Indices de la tabla `asistencia_profesor`
--
ALTER TABLE `asistencia_profesor`
  ADD PRIMARY KEY (`id_asistencia_profesor`);

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
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `apoderado`
--
ALTER TABLE `apoderado`
  MODIFY `id_apoderado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `asistencia_empleado`
--
ALTER TABLE `asistencia_empleado`
  MODIFY `id_asistencia_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `asistencia_profesor`
--
ALTER TABLE `asistencia_profesor`
  MODIFY `id_asistencia_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_empleado`
--
ALTER TABLE `tipo_empleado`
  MODIFY `id_tipo_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
usersusersusersuserstipo_empleadotipo_empleadoempleadoempleado