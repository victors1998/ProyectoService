-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2021 a las 19:19:11
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_service`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre_categoria` varchar(45) NOT NULL,
  `estado` varchar(1) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre_categoria`, `estado`, `descripcion`) VALUES
(1, 'Mecanicas', '1', 'Todo sobre reparacion'),
(2, 'Casas de apuestas', '1', 'Apuestas deportivas'),
(3, 'Restaurantes', '1', 'Ventas de comidas '),
(4, 'Tiendas', '1', 'ventas de abarrotes'),
(5, 'Zapateria', '1', 'Ventas de cansados');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `negocio`
--

CREATE TABLE `negocio` (
  `idnegocio` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `ruc` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `imagen1` varchar(45) NOT NULL,
  `imagen2` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `negocio`
--

INSERT INTO `negocio` (`idnegocio`, `nombre`, `ruc`, `direccion`, `estado`, `idUsuario`, `fecha_registro`, `telefono`, `imagen1`, `imagen2`) VALUES
(1, 'MANICA LOS HERMANOS SAC', '85652356856', 'Av. República de Panamá 4050 Urb. Limatambo, ', '1', 3, '2021-05-24', '369856426', 'descarga.jpg', 'foto2'),
(2, 'Distribuidora Victor SAC', '12356895642', 'av san perez Huanuco', '1', 2, '2021-05-24', '565852659', 'descarga.jpg', 'foto2'),
(3, 'Ventas de Laptos SAC', '45698235687', 'av san perez Huanuco LA MOLINA', '1', 6, '2021-06-17', '94949494948', 'descarga.jpg', 'foto2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproductos` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `nombre_producto` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `estado` varchar(1) NOT NULL,
  `imagen` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproductos`, `id_servicio`, `nombre_producto`, `descripcion`, `estado`, `imagen`) VALUES
(1, 2, 'Llantas', 'Kenda', '1', 'foto1'),
(2, 4, 'Toshiba', '1500 dolares', '1', 'descarga.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `idServicio` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fecha_registro` date NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `idnegocio` int(11) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `imagen1` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `titulo`, `descripcion`, `fecha_registro`, `id_categoria`, `idnegocio`, `estado`, `imagen1`) VALUES
(2, 'Mecanica Reparcion de vehiculos', 'Reparacion de Vehiculos', '2021-05-24', 1, 1, '1', 'primerNegocio.jpg'),
(3, 'Ventas de Gaseosas', 'Gaseosas al mayor y menor', '2021-05-24', 3, 2, '1', 'segundoNegocio.png'),
(4, 'Ventas de laptos y Toshiba', 'laptos de too precio', '2021-06-17', 4, 3, '1', 'descarga.jpg'),
(5, 'Reparacion de motos', 'Todo tipo de zapatos de Moda', '2021-06-17', 1, 1, '1', 'primerNegocio.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `tipoUsuario` varchar(45) NOT NULL,
  `userName` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `dni` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombres`, `apellidos`, `tipoUsuario`, `userName`, `password`, `dni`, `telefono`, `fecha_registro`, `estado`) VALUES
(1, 'Victor', 'eusebio soto', 'administrador', 'admin', 'admin', '73515797', '987545689', '2021-06-15', '1'),
(2, 'Sheila Gaudencia', 'Huaman Leon', 'Negociante', 'SheilaG', '123456', '73256895', '965823548', '2021-06-16', '1'),
(3, 'Michel', 'Adriano Flores', 'Negociante', 'MichelG', '1234', '75685235', '965325845', '2021-06-24', '1'),
(4, 'Julio Ichu', 'Alvino Berna', 'Negociante', 'Ichu', '123456', '75683265', '965214586', '2021-06-15', '1'),
(5, 'Juan', 'Perez Soto', 'Negociante', 'JuanPS', '123456', '73515797', '963258456', '2021-06-15', '1'),
(6, 'Lizet', 'Campos Perez', 'Negociante', 'LizetC', '123456', '75683265', '965823548', '2021-06-16', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`);

--
-- Indices de la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD PRIMARY KEY (`idnegocio`),
  ADD KEY `fk_negocio_usuario1_idx` (`idUsuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproductos`),
  ADD KEY `fk_productos_servicio1_idx` (`id_servicio`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`idServicio`),
  ADD KEY `fk_servicio_categoria1_idx` (`id_categoria`),
  ADD KEY `fk_servicio_negocio1_idx` (`idnegocio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `negocio`
--
ALTER TABLE `negocio`
  MODIFY `idnegocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `negocio`
--
ALTER TABLE `negocio`
  ADD CONSTRAINT `fk_negocio_usuario1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_servicio1` FOREIGN KEY (`id_servicio`) REFERENCES `servicio` (`idServicio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD CONSTRAINT `fk_servicio_categoria1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servicio_negocio1` FOREIGN KEY (`idnegocio`) REFERENCES `negocio` (`idnegocio`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
