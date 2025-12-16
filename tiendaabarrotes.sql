-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2025 a las 18:33:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaabarrotes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `Id_cte` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `RFC` varchar(12) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id_cte`, `Nombre`, `Apellido`, `RFC`, `Telefono`) VALUES
(1, 'Alejandro', 'Gonzalez', 'HERJ900101XY', '233-789-0123'),
(2, 'Bernardo', 'Martinez', 'MARA850720AB', '233-678-9012'),
(3, 'Camila', 'Gonzalez', 'GONP921015DE', '233-567-8901'),
(4, 'Daniel', 'Ramirez', 'RAME790304GH', '233-456-7890'),
(5, 'Esteban', 'Lopez', 'LOPE881231JK', '2333446789'),
(6, 'Fernanda', 'Ortega', 'CAST930512MN', '2332345678'),
(14, 'Salvador', 'Salvador', 'QWERTYUIOP', '2331455678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id_empleado` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `RFC` varchar(12) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id_empleado`, `Nombre`, `Apellido`, `RFC`, `Telefono`, `Direccion`) VALUES
(1, 'Alejandra', 'Gonzalez', 'HERJ900101XY', '233-123-4567', 'Calle 1, Cuetzalan, Puebla'),
(2, 'Bernardo', 'Martinez', 'MARA850720AB', '233-234-5678', 'Calle 2, Cuetzalan, Puebla'),
(3, 'Camila', 'Gonzalez', 'GONP921015DE', '233-345-6789', 'Calle 3, Cuetzalan, Puebla'),
(4, 'Daniel', 'Ramirez', 'RAME790304GH', '233-456-7890', 'Calle 4, Cuetzalan, Puebla');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_producto` int(11) NOT NULL,
  `Nombre_producto` varchar(50) DEFAULT NULL,
  `Stock` varchar(50) DEFAULT NULL,
  `Precio` varchar(50) DEFAULT NULL,
  `Categoria` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_producto`, `Nombre_producto`, `Stock`, `Precio`, `Categoria`) VALUES
(2, 'Tapcim', '10', '25.50', 'Pastillas'),
(3, 'Aspirina', '40', '18.75', 'Pastillas'),
(4, 'Ibuprofeno', '20', '90.00', 'Pastillas'),
(5, 'Amoxilina', '25', '35.00', 'Pastillas'),
(13, 'Agua', '45', '12.00', 'Bebida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_empleado` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Usuario` varchar(50) DEFAULT NULL,
  `Clave` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_empleado`, `Nombre`, `Usuario`, `Clave`) VALUES
(2, 'Denicce', 'Deniccewoa', 20082),
(4, 'Victor', 'Victito', 20084),
(5, 'Marcos', 'Marquitos', 20085),
(9, 'Jose Manuel', 'Papoide', 20087),
(10, 'Luis Ernesto', 'Ernestito', 20088),
(11, 'Felipe ', 'Feliponsito', 20089),
(12, 'Juan Jose', 'Josesito', 20090),
(14, 'Chavin', 'Chavita', 20091),
(15, 'Leonardo', 'Leo', 20092);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `Id_venta` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `cantidad` int(100) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `Id_cte` int(11) DEFAULT NULL,
  `Id_producto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Id_venta`, `fecha`, `cantidad`, `total`, `Id_cte`, `Id_producto`) VALUES
(1, '2025-02-28', 4, 100, 1, 13),
(5, '2025-04-02', 12, 1080, 3, 4),
(6, '2025-04-09', 10, 255, 1, 2),
(7, '2025-04-09', 4, 102, 5, 2),
(8, '2025-11-11', 2, 51, 2, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`Id_cte`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_empleado`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_empleado`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Id_venta`),
  ADD KEY `Id_cte` (`Id_cte`),
  ADD KEY `Id_producto` (`Id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `Id_cte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `Id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`Id_cte`) REFERENCES `clientes` (`Id_cte`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`Id_producto`) REFERENCES `productos` (`Id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
