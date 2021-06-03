CREATE DATABASE `cabreramo`
use cabreramo
create table usuarios(
 `id_usuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `contrasena` varchar(25) NOT NULL,
  PRIMARY KEY (`id_usuario`) 
)

insert into login(usuario, contrasena)
values ('jose', 'cabrera'),
		('profe', '123'),
		('admin','1234')