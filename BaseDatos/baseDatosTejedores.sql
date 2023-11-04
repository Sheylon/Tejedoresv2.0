CREATE TABLE usuarios (
	idUsuario serial PRIMARY KEY,
	nombre varchar(200) NOT NULL,
	email varchar(50) NOT NULL,
	usuario varchar(50) NOT NULL,
	rol varchar(50) NOT NULL,
	clave varchar(50) NOT NULL
	
);
