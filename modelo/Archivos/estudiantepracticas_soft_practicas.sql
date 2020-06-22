-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-06-2020 a las 17:17:39
-- Versión del servidor: 5.7.30-0ubuntu0.18.04.1
-- Versión de PHP: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practicas_soft_practicas`
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
(1151387, 1090, '2020-06-01', '1234');

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
  `ruta_archivo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `nit` int(11) NOT NULL,
  `representante_legal` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ruta_radicado` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `cantidad_practicantes` int(11) DEFAULT NULL,
  `contraseña` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`nit`, `representante_legal`, `ruta_radicado`, `cantidad_practicantes`, `contraseña`) VALUES
(123456789, 'Edyson Leal', NULL, 10, '1234');

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
(1151480, 1090504632, '1996-04-04', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencia_empresa`
--

CREATE TABLE `evidencia_empresa` (
  `id_evidencia` int(11) NOT NULL,
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
('edyson leal', 1090, 1, '3154871926', 'cucuta', 'edysonfabianlm@ufps.edu.co'),
('loyalsoft', 123456789, 4, '3508927334', 'cucuta', 'contacto@loyalsoft.co'),
('Adriana Quijano', 1090496628, 2, '3214639087', 'Venezula', 'adrianaelizabethqr@ufps.edu.co'),
('Shadia Shirley Ochoa Capacho ', 1090504632, 3, '3168281730', 'Labateca', 'shadiashirleyoc@ufps.edu.co');

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
(1151468, 1090496628, '1996-05-05', '1234');

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
  MODIFY `id_convenio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `evidencia_empresa`
--
ALTER TABLE `evidencia_empresa`
  MODIFY `id_evidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
