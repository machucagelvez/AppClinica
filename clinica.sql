-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-12-2020 a las 01:53:43
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `idCita` int(11) NOT NULL,
  `estadoCita` varchar(20) NOT NULL,
  `fechaCita` varchar(20) NOT NULL,
  `horaInicioCita` varchar(20) NOT NULL,
  `horaFinCita` varchar(20) NOT NULL,
  `idPacienteCita` int(20) NOT NULL,
  `idMedicoCita` int(20) NOT NULL,
  `idUsuarioAgendador` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorio`
--

CREATE TABLE `consultorio` (
  `idConsultorio` int(20) NOT NULL,
  `ubicacionConsultorio` varchar(30) NOT NULL,
  `estadoConsultorio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descanso`
--

CREATE TABLE `descanso` (
  `idDescanso` int(20) NOT NULL,
  `descripcionDescanso` varchar(40) NOT NULL,
  `horaInicioDescanso` varchar(20) NOT NULL,
  `horaFinDescanso` varchar(20) NOT NULL,
  `idMedicoDescanso` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `idEspecialidad` int(20) NOT NULL,
  `nombreEspecialidad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `idMedico` int(20) NOT NULL,
  `tipoDocumentoMedico` varchar(20) NOT NULL,
  `nombreMedico` varchar(30) NOT NULL,
  `apellidoMedico` varchar(30) NOT NULL,
  `emailMedico` varchar(40) NOT NULL,
  `horaIngresoMedico` varchar(20) NOT NULL,
  `horaSalidaMedico` varchar(20) NOT NULL,
  `idConsultorioMedico` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicoespecialidad`
--

CREATE TABLE `medicoespecialidad` (
  `idEspecialidadRelacion` int(20) NOT NULL,
  `idMedicoRelacion` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `idPaciente` int(20) NOT NULL,
  `tipoDocumentoPaciente` varchar(15) NOT NULL,
  `nombrePaciente` varchar(30) NOT NULL,
  `apellidoPaciente` varchar(30) NOT NULL,
  `telefonoPaciente` int(30) NOT NULL,
  `emailPaciente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(20) NOT NULL,
  `nombreUsuario` varchar(30) NOT NULL,
  `rolUsuario` varchar(20) NOT NULL,
  `claveUsuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `idPacienteCita` (`idPacienteCita`),
  ADD KEY `idUsuarioAgendador` (`idUsuarioAgendador`),
  ADD KEY `idMedicoCita` (`idMedicoCita`),
  ADD KEY `idMedicoCita_2` (`idMedicoCita`);

--
-- Indices de la tabla `consultorio`
--
ALTER TABLE `consultorio`
  ADD PRIMARY KEY (`idConsultorio`);

--
-- Indices de la tabla `descanso`
--
ALTER TABLE `descanso`
  ADD PRIMARY KEY (`idDescanso`),
  ADD KEY `idMedicoDescanso` (`idMedicoDescanso`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`idEspecialidad`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`idMedico`),
  ADD KEY `idConsultorioMedico` (`idConsultorioMedico`);

--
-- Indices de la tabla `medicoespecialidad`
--
ALTER TABLE `medicoespecialidad`
  ADD KEY `idEspecialidadRelacion` (`idEspecialidadRelacion`),
  ADD KEY `idEspecialidadRelacion_2` (`idEspecialidadRelacion`),
  ADD KEY `idMedicoRelacion` (`idMedicoRelacion`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`idPaciente`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consultorio`
--
ALTER TABLE `consultorio`
  MODIFY `idConsultorio` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `descanso`
--
ALTER TABLE `descanso`
  MODIFY `idDescanso` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `idEspecialidad` int(20) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`idPacienteCita`) REFERENCES `paciente` (`idPaciente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cita_ibfk_2` FOREIGN KEY (`idUsuarioAgendador`) REFERENCES `usuario` (`idUsuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cita_ibfk_3` FOREIGN KEY (`idMedicoCita`) REFERENCES `medico` (`idMedico`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `descanso`
--
ALTER TABLE `descanso`
  ADD CONSTRAINT `descanso_ibfk_1` FOREIGN KEY (`idMedicoDescanso`) REFERENCES `medico` (`idMedico`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `medico`
--
ALTER TABLE `medico`
  ADD CONSTRAINT `medico_ibfk_1` FOREIGN KEY (`idConsultorioMedico`) REFERENCES `consultorio` (`idConsultorio`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `medicoespecialidad`
--
ALTER TABLE `medicoespecialidad`
  ADD CONSTRAINT `medicoespecialidad_ibfk_1` FOREIGN KEY (`idMedicoRelacion`) REFERENCES `medico` (`idMedico`) ON UPDATE CASCADE,
  ADD CONSTRAINT `medicoespecialidad_ibfk_2` FOREIGN KEY (`idEspecialidadRelacion`) REFERENCES `especialidad` (`idEspecialidad`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
