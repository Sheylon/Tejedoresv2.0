CREATE TABLE usuario (
	idUsuario serial PRIMARY KEY,
	nombre_completo varchar(200) NOT NULL,
	correo varchar(50) NOT NULL,
	usuario varchar(50) NOT NULL,
	rol varchar(50) NOT NULL,
	contrasena varchar(50) NOT NULL
	
);
