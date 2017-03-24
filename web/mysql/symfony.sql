-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-03-2017 a las 19:40:53
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `symfony`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preg1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preg2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preg3` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `forms`
--

INSERT INTO `forms` (`id`, `title`, `author`, `preg1`, `preg2`, `preg3`) VALUES
(1, 'Preguntas Random', 'mgtapia@uc.cl', 'Género', 'Edad', 'Mes Nacimiento');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forms_ans`
--

CREATE TABLE `forms_ans` (
  `id` int(11) NOT NULL,
  `formID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `preg1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `preg2` int(11) NOT NULL,
  `preg3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `forms_ans`
--

INSERT INTO `forms_ans` (`id`, `formID`, `userID`, `preg1`, `preg2`, `preg3`) VALUES
(1, 1, 22, 'Masculino', 2, 10),
(10, 1, 23, 'Masculino', 1, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstame` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `firstame`, `lastname`, `email`, `password`) VALUES
(22, 'Matías', 'Tapia', 'mgtapia@uc.cl', '$2y$12$Am0E2wBvQsAGH1INJBdfJe3uBtri847hPFnduLvDk33wDwzZUGnw6'),
(23, 'Tomas', 'Tapia', 'tftapia@uc.cl', '$2y$12$iPIfXjecomMN4fSlVfHoduXop1RRyYAm6WzzQfRX/Sa9SPcEewRe2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `forms_ans`
--
ALTER TABLE `forms_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `forms_ans`
--
ALTER TABLE `forms_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
