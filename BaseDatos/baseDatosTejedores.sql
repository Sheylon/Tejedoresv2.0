CREATE TABLE usuario (
	idUsuario serial PRIMARY KEY,
	nombre_completo varchar(200) NOT NULL,
	correo varchar(50) NOT NULL,
	usuario varchar(50) NOT NULL,
	rol varchar(50) NOT NULL,
	contrasena varchar(50) NOT NULL
	
);

CREATE TABLE usuario (
    idUsuario serial PRIMARY KEY,
    nombre_completo varchar(200) NOT NULL,
    correo varchar(50) NOT NULL,
    usuario varchar(50) NOT NULL,
    rol varchar(50) NOT NULL,
    contrasena varchar(50) NOT NULL
);

CREATE TABLE color (
    idColor serial PRIMARY KEY,
    Color varchar(50) NOT NULL
);

CREATE TABLE talla (
    idTalla serial PRIMARY KEY,
    talla varchar(50) NOT NULL
);

CREATE TABLE tipoProducto (
    idTipoProducto serial PRIMARY KEY,
    nombre_Tipoproducto varchar(50) NOT NULL
);

CREATE TABLE fotos (
    idFoto serial PRIMARY KEY,
    urlFoto varchar(200) NOT NULL,
    idProducto integer NOT NULL,
    FOREIGN KEY (idProducto) REFERENCES productos(idProducto)
);

CREATE TABLE productos (
    idProducto serial PRIMARY KEY,
    nombre_producto varchar(50) NOT NULL,
    descripcion varchar(250) NOT NULL,
    unidadesDisponibles integer NOT NULL,
    valorUnidad DECIMAL NOT NULL,
    idColor integer NOT NULL,
    idTalla integer NOT NULL,
    idFoto integer NOT NULL,
    idTipoProducto integer NOT NULL,
    FOREIGN KEY (idColor) REFERENCES color(idColor),
    FOREIGN KEY (idTalla) REFERENCES talla(idTalla),
    FOREIGN KEY (idFoto) REFERENCES fotos(idFoto), 
    FOREIGN KEY (idTipoProducto) REFERENCES tipoProducto(idTipoProducto)
);

CREATE TABLE compras (
	idCompra integer PRIMARY KEY,
	idUsuario integer NOT NULL,
	idProducto integer NOT NULL,
	fecha DATE NOT NULL,
	Cantidad integer NOT NULL,
	FOREIGN KEY (idProducto) REFERENCES productos(idProducto),
	FOREIGN KEY (idUsuario) REFERENCES usuarios(idUsuario)
);