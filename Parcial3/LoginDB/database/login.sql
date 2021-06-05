CREATE DATABASE `cabreramo`
use cabreramo
create table usuarios(
 `id_usuario` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `contrasena` varchar(25) NOT NULL,
  PRIMARY KEY (`id_usuario`) 
)

insert into login(usuario, contrasena)
values ('jose', '2aacd6088b178aa10391f45dd275059c'),
	  ('admin','81dc9bdb52d04dc20036dbd8313ed055'),
		('profe', '202cb962ac59075b964b07152d234b70')
	