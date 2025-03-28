

/*Usando MYSQL para la base de datos y creando la base de datos prueba*/

CREATE DATABASE pruebaPHP;

/*Para usar la bd creada*/

use pruebaPHP;

/*
Script para crear los modelos de la base de datos

Para crear el modelo categorias
php artisan make:model categoria -mcr

Para crear el modelo productos
php artisan make:model producto -mcr

Para crear las tablas en MYSQL

php artisan migrate

*/

/*Categorias de prueba**/


insert into categorias(nombre)
values('vehiculos'),
('electronica'),
('deportes'),
('herramientas'),
('muebles');


/***Productos de prueba
Las imagenes estan incluidas en la carpeta uploads/productos
para visualizar las imagenes se ejecuta php artisan storage:link
**********/

insert into productos(id_categoria, nombre,descripcion, precio, imagen)
values(8,'Mochila','Mochila para deportes',1450.99,'uploads/productos/deportes1.jpg'),
(8,'Guantes','Guantes para deportes',390.99,'uploads/productos/deportes2.jpg'),
(8,'Escaladora','Escaladora para entrenamiento',7450.99,'uploads/productos/deportes3.jpg'),
(7,'pack de herramientas','Herramientas para electronica',674.50,'uploads/productos/electronica1.jpg'),
(10,'Mueble de madera','Mueble para decoracion',3450.99,'uploads/productos/muebles1.jpg'),
(10,'Ropero','Ropero minimalista',5680.99,'uploads/productos/muebles2.jpg'),
(9,'Herramientas','Conjunto herramientos pretul',3050.99,'uploads/productos/setherramientas1.jpg'),
(9,'Herramientas premium','Herramientas de titanio',5770.99,'uploads/productos/setherramientas2.jpg'),
(9,'Taladro','Taladro electrico',2111.99,'uploads/productos/taladro.jpg');
