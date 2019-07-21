-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-07-2019 a las 00:05:21
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `atelita_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id_autores` int(11) NOT NULL,
  `nombre_autores` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulos`
--

CREATE TABLE `capitulos` (
  `id_capitulos` int(11) NOT NULL,
  `numero_capitulos` varchar(4) NOT NULL,
  `nombre_capitulos` varchar(30) NOT NULL,
  `descripcion_capitulos` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(30) NOT NULL,
  `descripcion_estado` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `nombre_estado`, `descripcion_estado`) VALUES
(1, 'En curso', 'Novela en curso, el escritor está actualmente publicándose.'),
(2, 'Completa', 'Novela completa, se puede leer todos sus capítulos.'),
(3, 'Abandonada', 'Novela abandonada, no se ha continuado esta novela desde su último capítulo publicado.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id_generos` int(11) NOT NULL,
  `nombre_generos` varchar(30) NOT NULL,
  `descripcion_generos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id_generos`, `nombre_generos`, `descripcion_generos`) VALUES
(1, 'Acción', 'Género de acción'),
(2, 'Aventura', 'Género de aventura'),
(3, 'Drama', 'Género de drama'),
(4, 'Fantasía', 'Género de fantasía'),
(5, 'Infantil', 'Género de infantil'),
(6, 'Horror', 'Género de horror'),
(7, 'Ciencia Ficción', 'Género de ciencia ficción'),
(8, 'Romance', 'Género de romance');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libreria`
--

CREATE TABLE `libreria` (
  `id_usuarios` int(11) NOT NULL,
  `id_libros` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libros` int(11) NOT NULL,
  `nombre_libros` varchar(40) NOT NULL,
  `descripcion_libros` varchar(250) NOT NULL,
  `portada_libros` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_autores`
--

CREATE TABLE `libros_autores` (
  `id_libros` int(11) NOT NULL,
  `id_autores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_capitulos`
--

CREATE TABLE `libros_capitulos` (
  `id_libros` int(11) NOT NULL,
  `id_capitulos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_estado`
--

CREATE TABLE `libros_estado` (
  `id_libros` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros_generos`
--

CREATE TABLE `libros_generos` (
  `id_libros` int(11) NOT NULL,
  `id_generos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_usuarios`
--

CREATE TABLE `permisos_usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `id_tipos_de_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos_usuarios`
--

INSERT INTO `permisos_usuarios` (`id_usuarios`, `id_tipos_de_usuarios`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_de_usuarios`
--

CREATE TABLE `tipos_de_usuarios` (
  `id_tipos_usuarios` int(11) NOT NULL,
  `nombre_tipos_usuarios` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos_de_usuarios`
--

INSERT INTO `tipos_de_usuarios` (`id_tipos_usuarios`, `nombre_tipos_usuarios`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(11) NOT NULL,
  `nombre_usuarios` varchar(30) NOT NULL,
  `password_usuarios` varchar(30) NOT NULL,
  `email_usuarios` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre_usuarios`, `password_usuarios`, `email_usuarios`) VALUES
(1, 'admin', '123456', 'admin@atelita.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_autores`),
  ADD UNIQUE KEY `nombre` (`nombre_autores`);

--
-- Indices de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD PRIMARY KEY (`id_capitulos`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_generos`);

--
-- Indices de la tabla `libreria`
--
ALTER TABLE `libreria`
  ADD PRIMARY KEY (`id_usuarios`,`id_libros`),
  ADD KEY `id_libros` (`id_libros`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libros`),
  ADD UNIQUE KEY `nombre` (`nombre_libros`,`portada_libros`);

--
-- Indices de la tabla `libros_autores`
--
ALTER TABLE `libros_autores`
  ADD PRIMARY KEY (`id_libros`,`id_autores`),
  ADD KEY `id_autores` (`id_autores`);

--
-- Indices de la tabla `libros_capitulos`
--
ALTER TABLE `libros_capitulos`
  ADD PRIMARY KEY (`id_libros`,`id_capitulos`),
  ADD KEY `id_capitulos` (`id_capitulos`);

--
-- Indices de la tabla `libros_estado`
--
ALTER TABLE `libros_estado`
  ADD PRIMARY KEY (`id_libros`,`id_estado`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `libros_generos`
--
ALTER TABLE `libros_generos`
  ADD PRIMARY KEY (`id_libros`,`id_generos`),
  ADD KEY `id_generos` (`id_generos`);

--
-- Indices de la tabla `permisos_usuarios`
--
ALTER TABLE `permisos_usuarios`
  ADD PRIMARY KEY (`id_usuarios`,`id_tipos_de_usuarios`),
  ADD KEY `id_tipos_de_usuarios` (`id_tipos_de_usuarios`);

--
-- Indices de la tabla `tipos_de_usuarios`
--
ALTER TABLE `tipos_de_usuarios`
  ADD PRIMARY KEY (`id_tipos_usuarios`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD UNIQUE KEY `nombre` (`nombre_usuarios`,`email_usuarios`),
  ADD UNIQUE KEY `nombre_2` (`nombre_usuarios`,`email_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id_autores` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  MODIFY `id_capitulos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id_generos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libros` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libreria`
--
ALTER TABLE `libreria`
  ADD CONSTRAINT `libreria_ibfk_1` FOREIGN KEY (`id_libros`) REFERENCES `libros` (`id_libros`),
  ADD CONSTRAINT `libreria_ibfk_2` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuarios`);

--
-- Filtros para la tabla `libros_autores`
--
ALTER TABLE `libros_autores`
  ADD CONSTRAINT `libros_autores_ibfk_1` FOREIGN KEY (`id_libros`) REFERENCES `libros` (`id_libros`),
  ADD CONSTRAINT `libros_autores_ibfk_2` FOREIGN KEY (`id_autores`) REFERENCES `autores` (`id_autores`);

--
-- Filtros para la tabla `libros_capitulos`
--
ALTER TABLE `libros_capitulos`
  ADD CONSTRAINT `libros_capitulos_ibfk_1` FOREIGN KEY (`id_libros`) REFERENCES `libros` (`id_libros`),
  ADD CONSTRAINT `libros_capitulos_ibfk_2` FOREIGN KEY (`id_capitulos`) REFERENCES `capitulos` (`id_capitulos`);

--
-- Filtros para la tabla `libros_estado`
--
ALTER TABLE `libros_estado`
  ADD CONSTRAINT `libros_estado_ibfk_1` FOREIGN KEY (`id_libros`) REFERENCES `libros` (`id_libros`),
  ADD CONSTRAINT `libros_estado_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `libros_generos`
--
ALTER TABLE `libros_generos`
  ADD CONSTRAINT `libros_generos_ibfk_1` FOREIGN KEY (`id_libros`) REFERENCES `libros` (`id_libros`),
  ADD CONSTRAINT `libros_generos_ibfk_2` FOREIGN KEY (`id_generos`) REFERENCES `generos` (`id_generos`);

--
-- Filtros para la tabla `permisos_usuarios`
--
ALTER TABLE `permisos_usuarios`
  ADD CONSTRAINT `permisos_usuarios_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuarios`),
  ADD CONSTRAINT `permisos_usuarios_ibfk_2` FOREIGN KEY (`id_tipos_de_usuarios`) REFERENCES `tipos_de_usuarios` (`id_tipos_usuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
