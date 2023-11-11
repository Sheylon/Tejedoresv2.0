-- Crear la tabla usuario
CREATE TABLE usuario (
    idUsuario serial PRIMARY KEY,
    nombre_completo varchar(200) NOT NULL,
    correo varchar(50) NOT NULL,
    usuario varchar(50) NOT NULL,
    rol varchar(50) NOT NULL,
    contrasena varchar(50) NOT NULL
);

-- Crear la tabla color
CREATE TABLE color (
    idColor serial PRIMARY KEY,
    Color varchar(50) NOT NULL
);

-- Crear la tabla talla
CREATE TABLE talla (
    idTalla serial PRIMARY KEY,
    talla varchar(50) NOT NULL
);

-- Crear la tabla tipoProducto
CREATE TABLE tipoProducto (
    idTipoProducto serial PRIMARY KEY,
    nombre_producto varchar(50) NOT NULL
);

-- Crear la tabla foto
CREATE TABLE foto (
    idFoto serial PRIMARY KEY,
    urlFoto varchar(200) NOT NULL,
    idProducto integer NOT NULL
);

-- Crear la tabla producto
CREATE TABLE producto (
    idProducto serial PRIMARY KEY,
    nombre_producto varchar(50) NOT NULL,
    descripcion varchar(250) NOT NULL,
    unidadesDisponibles integer NOT NULL,
    valorUnidad DECIMAL NOT NULL,
    idColor integer NOT NULL,
    idTalla integer NOT NULL,
    idFoto integer NOT NULL,
    idTipoProducto integer NOT NULL
);

-- Crear la tabla compra
CREATE TABLE compra (
    idCompra integer PRIMARY KEY,
    idUsuario integer NOT NULL,
    idProducto integer NOT NULL,
    fecha DATE NOT NULL,
    Cantidad integer NOT NULL
);

-- Agregar las restricciones de clave foránea
ALTER TABLE foto
ADD CONSTRAINT fk_producto FOREIGN KEY (idProducto) REFERENCES producto(idProducto);

ALTER TABLE producto
ADD CONSTRAINT fk_color FOREIGN KEY (idColor) REFERENCES color(idColor),
ADD CONSTRAINT fk_talla FOREIGN KEY (idTalla) REFERENCES talla(idTalla),
ADD CONSTRAINT fk_foto FOREIGN KEY (idFoto) REFERENCES foto(idFoto), 
ADD CONSTRAINT fk_tipoProducto FOREIGN KEY (idTipoProducto) REFERENCES tipoProducto(idTipoProducto);

ALTER TABLE compra
ADD CONSTRAINT fk_producto FOREIGN KEY (idProducto) REFERENCES producto(idProducto),
ADD CONSTRAINT fk_usuario FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario);
