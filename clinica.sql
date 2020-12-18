-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2020 a las 20:16:53
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.4.13

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

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_agendarCita` (IN `id` INT, IN `identificacion` INT)  MODIFIES SQL DATA
UPDATE cita SET estadoCita = 'agendada', idPacienteCita = identificacion where idCita = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_buscarPaciente` (IN `identificacion` INT)  NO SQL
select * from paciente where idPaciente = identificacion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_cancelarCita` (IN `id` INT)  NO SQL
UPDATE cita SET estadoCita = 'disponible', idPacienteCita = null where idCita = id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listarAgendadasFecha` (IN `fecha` VARCHAR(20))  NO SQL
select * from cita INNER JOIN medico on cita.idMedicoCita = medico.idMedico INNER JOIN paciente on paciente.idPaciente = cita.idPacienteCita INNER JOIN consultorio on medico.idConsultorioMedico = consultorio.idConsultorio where estadoCita = 'agendada' and fechaCita = fecha$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listarCitaDocumento` (IN `identificacion` INT)  NO SQL
select * from cita INNER JOIN medico on cita.idMedicoCita = medico.idMedico INNER JOIN paciente on paciente.idPaciente = cita.idPacienteCita INNER JOIN consultorio on consultorio.idConsultorio = medico.idConsultorioMedico where estadoCita = 'agendada' and idPaciente = identificacion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listarCitasAgendadas` ()  NO SQL
select * from cita INNER JOIN medico on cita.idMedicoCita = medico.idMedico INNER JOIN paciente on paciente.idPaciente = cita.idPacienteCita  INNER JOIN consultorio on medico.idConsultorioMedico = consultorio.idConsultorio where estadoCita = 'agendada'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listarCitasDisponibles` ()  NO SQL
select * from cita INNER JOIN medico on cita.idMedicoCita = medico.idMedico INNER JOIN consultorio on consultorio.idConsultorio = medico.idConsultorioMedico where estadoCita = 'disponible'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listarDisponiblesFecha` (IN `fecha` VARCHAR(20))  NO SQL
select * from cita INNER JOIN medico on cita.idMedicoCita = medico.idMedico INNER JOIN consultorio on consultorio.idConsultorio = medico.idConsultorioMedico where estadoCita = 'disponible' and fechaCita = fecha$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_listarDocumentoFecha` (IN `identificacion` INT, IN `fecha` VARCHAR(20))  NO SQL
select * from cita INNER JOIN medico on cita.idMedicoCita = medico.idMedico INNER JOIN paciente on paciente.idPaciente = cita.idPacienteCita INNER JOIN consultorio on medico.idConsultorioMedico = consultorio.idConsultorio where estadoCita = 'agendada' and idPaciente = identificacion and fechaCita = fecha$$

DELIMITER ;

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
  `idPacienteCita` int(20) DEFAULT NULL,
  `idMedicoCita` int(20) NOT NULL,
  `idUsuarioAgendador` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`idCita`, `estadoCita`, `fechaCita`, `horaInicioCita`, `horaFinCita`, `idPacienteCita`, `idMedicoCita`, `idUsuarioAgendador`) VALUES
(2, 'agendada', '2020-12-17', '13:00', '14:00', 2222, 9999, 4444),
(3, 'agendada', '2020-12-18', '10:00', '12:15', 1111, 9999, 2222),
(5, 'disponible', '2020-12-31', '08:30', '09:00', NULL, 1111, 4444),
(6, 'disponible', '2020-12-31', '10:30', '11:00', NULL, 2222, 4444),
(7, 'disponible', '2020-12-31', '13:30', '14:00', NULL, 3333, 4444),
(8, 'disponible', '2020-12-31', '14:30', '15:00', NULL, 9999, 4444),
(9, 'disponible', '2020-12-24', '08:30', '09:00', NULL, 1111, 4444),
(10, 'disponible', '2020-12-24', '09:30', '10:00', NULL, 2222, 4444),
(11, 'disponible', '2020-12-24', '11:00', '11:45', NULL, 9999, 4444);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorio`
--

CREATE TABLE `consultorio` (
  `idConsultorio` int(20) NOT NULL,
  `ubicacionConsultorio` varchar(30) NOT NULL,
  `estadoConsultorio` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultorio`
--

INSERT INTO `consultorio` (`idConsultorio`, `ubicacionConsultorio`, `estadoConsultorio`) VALUES
(1, '2-105', 'disponible'),
(2, '2-106', 'disponible'),
(3, '2-220', 'disponible'),
(4, '2-250', 'disponible');

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

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`idMedico`, `tipoDocumentoMedico`, `nombreMedico`, `apellidoMedico`, `emailMedico`, `horaIngresoMedico`, `horaSalidaMedico`, `idConsultorioMedico`) VALUES
(1111, 'c.c', 'Gustavo', 'Petro', 'petrico@gmail.com', '07:00', '20:00', 2),
(2222, 'c.c', 'Miguel', 'Agudelo', 'miguelucho@gmail.com', '07:00', '20:00', 3),
(3333, 'c.c', 'Sigmund ', 'Freud', 'freudbunny@gmail.com', '07:00', '20:00', 4),
(9999, 'c.c', 'Pepe', 'Perez', 'pepe@gmail.com', '08:00', '18:00', 1);

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

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`idPaciente`, `tipoDocumentoPaciente`, `nombrePaciente`, `apellidoPaciente`, `telefonoPaciente`, `emailPaciente`) VALUES
(1111, 'c.c', 'Esperanza', 'Gomez', 2302020, 'esperanza@gmail.com'),
(2222, 'c.c', 'Yo si', 'To Ko', 2312020, 'yositoko@gmail.com'),
(5555, 'c.c', 'Alvaro ', 'Uribe', 2303434, 'falsopositivo@gmail.com'),
(6666, 'c.c', 'Diego', 'Maradona', 4456765, 'maragol@gmail.com'),
(7777, 'c.c', 'Alvaro ', 'Uribe', 2303434, 'falsopositivo@gmail.com');

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
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombreUsuario`, `rolUsuario`, `claveUsuario`) VALUES
(1111, 'carlos', 'admin', '1234'),
(2222, 'miguel', 'admin', '1234'),
(3333, 'santiago', 'admin', '1234'),
(4444, 'fabian', 'admin', '1234');

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
  ADD PRIMARY KEY (`idConsultorio`),
  ADD UNIQUE KEY `ubicacionConsultorio` (`ubicacionConsultorio`);

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
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `consultorio`
--
ALTER TABLE `consultorio`
  MODIFY `idConsultorio` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
