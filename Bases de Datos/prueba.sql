/* 
	drop -> Conjunto completo
    truncate -> Modifica un conjunto
    create ->  Crea
    alter -> Altera
    
    users
    tablas
    database
    
    Cambiar un elemento de la columna
    alter table categorias change nombre_producto nombre_categoria varchar(100);
*/

create table categorias(
	id int not null auto_increment primary key,
    nombre_producto varchar(100) not null,
    descripcion  text null,
    created_at timestamp default now()
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

create table productos(
	id int not null auto_increment primary key,
    nombre_producto varchar(100) not null, 
    descripcion  text null,
    created_at timestamp default now()
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

use pruebadb;
alter table categorias change nombre_producto nombre_categoria varchar(100);
