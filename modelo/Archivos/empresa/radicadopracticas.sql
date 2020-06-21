-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2020 a las 05:45:00
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `codigo` int(11) NOT NULL,
  `cedula` int(11) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `contraseña` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`codigo`, `cedula`, `fechaNacimiento`, `contraseña`) VALUES
(98765, 98765, '2020-06-01', 'ayd2020'),
(1151387, 1090, '2020-05-17', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificar_empresa`
--

CREATE TABLE `calificar_empresa` (
  `id_calificacion` int(11) NOT NULL,
  `estudiante` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `ruta_archivo` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificar_estudiante`
--

CREATE TABLE `calificar_estudiante` (
  `id_calificacion` int(11) NOT NULL,
  `estudiante` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `ruta_archivo` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargar_arl`
--

CREATE TABLE `cargar_arl` (
  `estudiante` int(11) DEFAULT NULL,
  `ruta_archivo` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargar_convenio`
--

CREATE TABLE `cargar_convenio` (
  `empresa` int(11) NOT NULL,
  `ruta_archivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `crear_convenio`
--

CREATE TABLE `crear_convenio` (
  `id_convenio` int(11) NOT NULL,
  `estudiante` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `fechaConvenio` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `crear_convenio`
--

INSERT INTO `crear_convenio` (`id_convenio`, `estudiante`, `empresa`, `fechaConvenio`) VALUES
(1, 23, 123456789, '2020-06-10'),
(3, 1151464, 1234, '0000-00-00'),
(4, 23, 123456789, '2020-06-01'),
(5, 1151464, 123456789, '2020-06-10'),
(6, 1, 123456789, '2020-06-10'),
(7, 1151464, 1234, '2020-06-10'),
(8, 1151464, 1234, '2020-06-10'),
(10, 23, 321, '2020-06-10'),
(11, 1151464, 123456789, '2020-08-07'),
(12, 23, 1234, '2020-08-21'),
(13, 23, 1234, '2020-08-21'),
(14, 1151464, 1234, '2020-08-21'),
(15, 1, 1234, '2020-08-21'),
(16, 23, 321, '2020-08-21'),
(17, 1, 1234, '2020-08-21'),
(18, 1, 1234, '2020-08-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `nit` int(11) NOT NULL,
  `representante_legal` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad_practicantes` int(11) DEFAULT NULL,
  `contraseña` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`nit`, `representante_legal`, `cantidad_practicantes`, `contraseña`) VALUES
(321, 'asdas', 0, '1'),
(1234, 'asdas', 0, '1'),
(123456789, 'edyson leal', NULL, '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `codigo` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `contraseña` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`codigo`, `cedula`, `fechaNacimiento`, `contraseña`) VALUES
(1, 897, '2020-06-18', '1'),
(23, 777, '2020-06-23', '1'),
(1151464, 1000, '2020-05-17', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencia_empresa`
--

CREATE TABLE `evidencia_empresa` (
  `id_evidencia` int(11) NOT NULL,
  `estudiante` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `ruta_archivo` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencia_estudiante`
--

CREATE TABLE `evidencia_estudiante` (
  `id_evidencia` int(11) NOT NULL,
  `estudiante` int(11) DEFAULT NULL,
  `empresa` int(11) DEFAULT NULL,
  `ruta_archivo` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id_convenio` int(11) DEFAULT NULL,
  `semestre` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `cedulanit` int(11) NOT NULL,
  `rol` int(11) NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`nombre`, `cedulanit`, `rol`, `telefono`, `direccion`, `correo`) VALUES
('milton', 12, 2, '1', 'avenida', 'edysonleal@gmail.com'),
('wposs', 321, 4, '1', 'asdasd', 'edysonleal@wposs.com'),
('escanor', 777, 3, '7', 'avenida 18', 'edysonleal@wposs.com'),
('matias', 897, 3, '1', 'avenida 18', 'edysonleal@wposs.com'),
('shadia ochoa', 987, 2, '55555', 'labateca', 'shadiashirleyoc@ufps.edu.co'),
('adriana quijano', 1000, 3, '555555', 'venezuela', 'adrianaelizabethqr@ufps.edu.co'),
('edyson leal', 1090, 1, '3154871926', 'avenida 8', 'edysonfabianlm@ufps.edu.co'),
('google', 1234, 4, '111', 'asdasd', 'edysonleal@wposs.com'),
('nelson beltram', 12121, 2, '12', 'avenida', 'edysonleal@gmail.com'),
('Judith del Pilar Rodriguez Tenjo', 98765, 1, '3154871926', 'cucuta', 'judithdelpilarrt@ufps.edu.co'),
('gallardo', 777777, 2, '1', 'avenida', 'edysonleal@gmail.com'),
('loyalsoft', 123456789, 4, '3154871926', 'avenida 8', 'contacto@loyalsoft.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_trabajo`
--

CREATE TABLE `plan_trabajo` (
  `id_plantrabajo` int(11) NOT NULL,
  `estudiante` int(11) DEFAULT NULL,
  `ruta_archivo` varchar(200) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `codigo` int(11) NOT NULL,
  `cedula` int(11) DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `contraseña` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`codigo`, `cedula`, `fechaNacimiento`, `contraseña`) VALUES
(1, 777777, '2020-06-18', '1'),
(1000, 987, '2020-06-01', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre`) VALUES
(1, 'administrador'),
(2, 'profesor'),
(3, 'estudiante'),
(4, 'empresa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `calificar_empresa`
--
ALTER TABLE `calificar_empresa`
  ADD PRIMARY KEY (`id_calificacion`),
  ADD KEY `estudiante` (`estudiante`),
  ADD KEY `empresa` (`empresa`);

--
-- Indices de la tabla `calificar_estudiante`
--
ALTER TABLE `calificar_estudiante`
  ADD PRIMARY KEY (`id_calificacion`),
  ADD KEY `empresa` (`empresa`),
  ADD KEY `estudiante` (`estudiante`);

--
-- Indices de la tabla `cargar_arl`
--
ALTER TABLE `cargar_arl`
  ADD KEY `estudiante` (`estudiante`);

--
-- Indices de la tabla `cargar_convenio`
--
ALTER TABLE `cargar_convenio`
  ADD KEY `empresa` (`empresa`);

--
-- Indices de la tabla `crear_convenio`
--
ALTER TABLE `crear_convenio`
  ADD PRIMARY KEY (`id_convenio`),
  ADD KEY `estudiante` (`estudiante`),
  ADD KEY `empresa` (`empresa`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`nit`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `evidencia_empresa`
--
ALTER TABLE `evidencia_empresa`
  ADD PRIMARY KEY (`id_evidencia`),
  ADD KEY `estudiante` (`estudiante`),
  ADD KEY `empresa` (`empresa`);

--
-- Indices de la tabla `evidencia_estudiante`
--
ALTER TABLE `evidencia_estudiante`
  ADD PRIMARY KEY (`id_evidencia`),
  ADD KEY `empresa` (`empresa`),
  ADD KEY `estudiante` (`estudiante`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD KEY `id_convenio` (`id_convenio`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`cedulanit`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `plan_trabajo`
--
ALTER TABLE `plan_trabajo`
  ADD PRIMARY KEY (`id_plantrabajo`),
  ADD KEY `estudiante` (`estudiante`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificar_empresa`
--
ALTER TABLE `calificar_empresa`
  MODIFY `id_calificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `calificar_estudiante`
--
ALTER TABLE `calificar_estudiante`
  MODIFY `id_calificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `crear_convenio`
--
ALTER TABLE `crear_convenio`
  MODIFY `id_convenio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `evidencia_empresa`
--
ALTER TABLE `evidencia_empresa`
  MODIFY `id_evidencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evidencia_estudiante`
--
ALTER TABLE `evidencia_estudiante`
  MODIFY `id_evidencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plan_trabajo`
--
ALTER TABLE `plan_trabajo`
  MODIFY `id_plantrabajo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedulanit`);

--
-- Filtros para la tabla `calificar_empresa`
--
ALTER TABLE `calificar_empresa`
  ADD CONSTRAINT `calificar_empresa_ibfk_1` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`codigo`),
  ADD CONSTRAINT `calificar_empresa_ibfk_2` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`nit`);

--
-- Filtros para la tabla `calificar_estudiante`
--
ALTER TABLE `calificar_estudiante`
  ADD CONSTRAINT `calificar_estudiante_ibfk_1` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`nit`),
  ADD CONSTRAINT `calificar_estudiante_ibfk_2` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`codigo`);

--
-- Filtros para la tabla `cargar_arl`
--
ALTER TABLE `cargar_arl`
  ADD CONSTRAINT `cargar_arl_ibfk_1` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`codigo`);

--
-- Filtros para la tabla `cargar_convenio`
--
ALTER TABLE `cargar_convenio`
  ADD CONSTRAINT `cargar_convenio_ibfk_1` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`nit`);

--
-- Filtros para la tabla `crear_convenio`
--
ALTER TABLE `crear_convenio`
  ADD CONSTRAINT `crear_convenio_ibfk_1` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`codigo`),
  ADD CONSTRAINT `crear_convenio_ibfk_2` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`nit`);

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD CONSTRAINT `empresa_ibfk_1` FOREIGN KEY (`nit`) REFERENCES `persona` (`cedulanit`);

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedulanit`);

--
-- Filtros para la tabla `evidencia_empresa`
--
ALTER TABLE `evidencia_empresa`
  ADD CONSTRAINT `evidencia_empresa_ibfk_1` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`codigo`),
  ADD CONSTRAINT `evidencia_empresa_ibfk_2` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`nit`);

--
-- Filtros para la tabla `evidencia_estudiante`
--
ALTER TABLE `evidencia_estudiante`
  ADD CONSTRAINT `evidencia_estudiante_ibfk_1` FOREIGN KEY (`empresa`) REFERENCES `empresa` (`nit`),
  ADD CONSTRAINT `evidencia_estudiante_ibfk_2` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`codigo`);

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`id_convenio`) REFERENCES `crear_convenio` (`id_convenio`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `plan_trabajo`
--
ALTER TABLE `plan_trabajo`
  ADD CONSTRAINT `plan_trabajo_ibfk_1` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`codigo`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `persona` (`cedulanit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
