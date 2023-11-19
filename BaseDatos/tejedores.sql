--
-- Base de datos: `tejedores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idcarrto` int(11) NOT NULL,
  `fechayhora` datetime NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriaproducto`
--

CREATE TABLE `categoriaproducto` (
  `idcategoriaproducto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecarrito`
--

CREATE TABLE `detallecarrito` (
  `iddetallecarrito` int(11) NOT NULL,
  `cantidad` int(50) NOT NULL,
  `idcarrito` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `iddetallepedido` int(11) NOT NULL,
  `idpedido` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `idFoto` int(11) NOT NULL,
  `urlFoto` varchar(200) NOT NULL,
  `idProducto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `idpago` int(11) NOT NULL,
  `metodopago` varchar(100) NOT NULL,
  `inf_targeta` varchar(100) NOT NULL,
  `totalpago` decimal(10,0) NOT NULL,
  `fechayhora` datetime NOT NULL,
  `idpedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `fechayhora` datetime NOT NULL,
  `estado` varchar(30) NOT NULL,
  `idcarrito` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(5000) NOT NULL,
  `unidadesDisponibles` int(11) NOT NULL,
  `valorUnidad` decimal(10,0) NOT NULL,
  `idcategoriaproducto` int(11) NOT NULL,
  `idtalla` int(11) DEFAULT NULL,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE `talla` (
  `idtalla` int(11) NOT NULL,
  `talla` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `rol` varchar(100) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;








--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idcarrto`),
  ADD KEY `carrito_fk0` (`idusuario`);

--
-- Indices de la tabla `categoriaproducto`
--
  ALTER TABLE `categoriaproducto`
  ADD PRIMARY KEY (`idcategoriaproducto`);

--
-- Indices de la tabla `detallecarrito`
--
 ALTER TABLE `detallecarrito`
  ADD PRIMARY KEY (`iddetallecarrito`),
  ADD KEY `detallecarrito_fk0` (`idcarrito`),
  ADD KEY `detallecarrito_fk1` (`idproducto`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`iddetallepedido`),
  ADD KEY `detallepedido_fk0` (`idpedido`),
  ADD KEY `detallepedido_fk1` (`idproduto`);

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`idFoto`),
  ADD KEY `foto_fk0` (`idProducto`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`idpago`),
  ADD KEY `pago_fk0` (`idpedido`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `pedido_fk0` (`idcarrito`),
  ADD KEY `pedido_fk1` (`idusuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `producto_fk0` (`idcategoriaproducto`),
  ADD KEY `producto_fk1` (`idtalla`),
  ADD KEY `producto_fk2` (`idusuario`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
  ADD PRIMARY KEY (`idtalla`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `correo` (`correo`);






--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `idcarrto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoriaproducto`
--
ALTER TABLE `categoriaproducto`
  MODIFY `idcategoriaproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `detallecarrito`
--
ALTER TABLE `detallecarrito`
  MODIFY `iddetallecarrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  MODIFY `iddetallepedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `idFoto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `idpago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idpedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `talla`
--
ALTER TABLE `talla`
  MODIFY `idtalla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;








--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_fk0` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `detallecarrito`
--
ALTER TABLE `detallecarrito`
  ADD CONSTRAINT `detallecarrito_fk0` FOREIGN KEY (`idcarrito`) REFERENCES `carrito` (`idcarrto`),
  ADD CONSTRAINT `detallecarrito_fk1` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_fk0` FOREIGN KEY (`idpedido`) REFERENCES `pedido` (`idpedido`),
  ADD CONSTRAINT `detallepedido_fk1` FOREIGN KEY (`idproduto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_fk0` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`);

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_fk0` FOREIGN KEY (`idpedido`) REFERENCES `pedido` (`idpedido`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_fk0` FOREIGN KEY (`idcarrito`) REFERENCES `carrito` (`idcarrto`),
  ADD CONSTRAINT `pedido_fk1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_fk0` FOREIGN KEY (`idcategoriaproducto`) REFERENCES `categoriaproducto` (`idcategoriaproducto`),
  ADD CONSTRAINT `producto_fk1` FOREIGN KEY (`idtalla`) REFERENCES `talla` (`idtalla`),
  ADD CONSTRAINT `producto_fk2` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);
COMMIT;







--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre_completo`, `correo`, `usuario`, `rol`, `contrasena`) VALUES
(1, 'yeimer campo', 'yeimer@gmail.com', 'yei', 'administrador', '1234'),
(2, 'pedro perez', 'pedro@gmail.com', 'pedro', 'usuario', '345'),
(3, 'camilo lopez', 'camilo@gmail.com', 'camilo', 'usuario', '1234'),
(4, 'Sheylon', 'sheylon@gmail.com', 'mr.sheylon', 'Vendedor', '12s');


--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `talla` (`idtalla`, `talla`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L');

--
-- Volcado de datos para la tabla `talla`
--

INSERT INTO `categoriaproducto` (`idcategoriaproducto`, `nombre`, `descripcion`) VALUES
(1, 'Ropa', 'El término ropa, ​ vestimenta o indumentaria es la denominación genérica​ que reciben las prendas'),
(2, 'Accesorios', 'los accesorios de moda son detalles que le damos al estilismo para 
ponerle el broche final al mismo.Nos referimos a joyas o bisutería, gafas de sol, pañuelos, etc.' );
