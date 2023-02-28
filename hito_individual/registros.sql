-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2023 a las 08:17:36
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `email` varchar(100) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `contenido` varchar(600) NOT NULL,
  `fecha` date NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`email`, `titulo`, `contenido`, `fecha`, `imagen`) VALUES
('felipegarciasergio8@gmail.com', 'enga', 'vamos ', '2027-02-23', 'bvghcffgcg.jpeg'),
('Sergiofelipe@hotmail.com', 'TITULO 1', 'Este post es para aprender como hacer conexiones , inserciones  y lecturas de una bbdd', '2027-02-23', 'bncetfgy.jpeg'),
('Sergiofelipe@hotmail.com', 'TITULO 2', 'Este post es para aprender como hacer conexiones , inserciones  y lecturas de una bbdd de otra forma', '2027-02-23', 'bncetfgy.jpeg'),
('Sergiofelipe@hotmail.com', 'TITULO 2', 'Este post es para aprender como hacer conexiones , inserciones  y lecturas de una bbdd de otra forma', '2027-02-23', 'bncetfgy.jpeg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`) VALUES
('sergio1234', 'felipe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
