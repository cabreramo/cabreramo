CREATE DATABASE `cabreramo`
use cabreramo
CREATE TABLE agendaviaje (
  `id_numviaje` int NOT NULL AUTO_INCREMENT,
  `origen` varchar(25) NOT NULL,
  `destino` varchar(25) NOT NULL,
  `gasto_hotel` double NOT NULL, 
  `gasto_transporte` double not null,
  `gasto_comida` double not null, 
  `gastas_extras` double not null, 
  `fecha_inicio` date not null, 
  `fecha_fin` date not null,
  PRIMARY KEY (`id_numviaje`) 
) 
/*Pruebas realizadas en DBeaver Mysql*/ 

insert into agendaviajes (origen, destino, gasto_hotel, gasto_transporte, gasto_comida, gastas_extras, fecha_inicio, fecha_fin)
values ('Nuevo Laredo', 'Mazatlan','5000.99','7500.99','2500.99','1500.00','2021-06-30','2021-07-03'),
      ('Nuevo Laredo', 'Riviera Maya','4500.99','7500.99','2500.99','1500.00','2021-07-05','2021-07-08'),
      ('Nuevo Laredo', 'Monterrey','1500.99','1000.99','2500.99','1500.00','2021-07-15','2021-07-20'),
      ('Monterrey', 'Guanajuato','4200.99','4500.99','2500.99','1500.00','2021-07-24','2021-07-27'),
      ('Nuevo Laredo', 'Michoacan','1200.99','8500.99','1850.99','1500.00','2021-07-30','2021-08-03'),
      ('Monterrey', 'Tijuana','5000.99','6500.99','2800.99','1500.00','2021-08-10','2021-07-13'),
      ('Nuevo Laredo', 'Los Cabos','100000.99','9500.99','3500.99','1500.00','2021-08-15','2021-08-20')