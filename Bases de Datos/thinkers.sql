drop database formularioIngresoThinkersDB;
create database formularioIngresoThinkersDB;
use formularioIngresoThinkersDB;

create table universidades(
	id int auto_increment primary key,
    nombre_universidad varchar(100) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

create table ingresos_semestrales(
	id int auto_increment primary key,
    id_universidad int,
    dp_nombre varchar(150) not null,
    dp_edad int not null,
    dp_whatsApp int(10) not null,
    dp_email varchar(150) not null,
    dp_facebook varchar(150)  not null,
    dp_domicilio varchar(150) not null,
    data_carrera varchar(150) not null,
    data_escuela varchar(150) not null,
    data_horario varchar(150) not null,
    data_razonIngreso text not null,
    ref_saberNosotros varchar(150) not null,
    ref_nombreTutor varchar(150) not null,
    ref_telefonoTutor int(10) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

alter table ingresos_semestrales add foreign key (id_universidad) references universidades (id) on delete restrict on update cascade;
alter table ingresos_semestrales rename ingresos;
alter table ingresos add curso varchar(100);
alter table ingresos change curso id_curso int;

create table cursos(
	id int auto_increment primary key,
    nombre_curso varchar(100) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

alter table ingresos add foreign key (id_curso) references cursos (id) on delete restrict on update cascade;

insert into cursos (id, nombre_curso) values (1, "Curso Semestral");
insert into cursos (id, nombre_curso) values (2, "Curso Anual");
insert into cursos (id, nombre_curso) values (3, "Curso semi-Intensivo");
select * from cursos;

insert into universidades (id, nombre_universidad) values (1, "UNAM");
insert into universidades (id, nombre_universidad) values (2, "IPN");
insert into universidades (id, nombre_universidad) values (3, "UANL");
insert into universidades (id, nombre_universidad) values (4, "UDEG");
insert into universidades (id, nombre_universidad) values (5, "UASLP");
select * from universidades;

alter table ingresos add created_at timestamp default now();
alter table ingresos change dp_whatsApp dp_whatsApp varchar(10) not null;
alter table ingresos change ref_telefonoTutor ref_telefonoTutor varchar(10) not null;

insert into ingresos (id, id_universidad, dp_nombre, dp_edad, dp_whatsApp, dp_email, dp_facebook, dp_domicilio, data_carrera,
	data_escuela, data_horario, data_razonIngreso, ref_saberNosotros, ref_nombreTutor, ref_telefonoTutor, id_curso, created_at) 
values (1, 2, "Josué Alberto Lopez Flores", 18, "4442074330", "josueflores@hotmail.com", "https://facebook.com/Josue Alberto", 
	"Avenida de las Presas 117", "Ingeniería en Sistemas Computacionales", "Cobach 28", "Matutino (de 9:00 AM a 12:00 PM)",
    "Las oportunidades de esa universidad me interesan", "Unos amigos que han venido me recomendarón ingresar aquí para tomar cursos",
    "Luis Alberto Lopez Flores", "4442399904", 3, now());
    
insert into ingresos (id_universidad, dp_nombre, dp_edad, dp_whatsApp, dp_email, dp_facebook, dp_domicilio, data_carrera,
	data_escuela, data_horario, data_razonIngreso, ref_saberNosotros, ref_nombreTutor, ref_telefonoTutor, id_curso) 
values (1, "Bryant Israel Ponce Palomo", 18, "4861046581", "bryantIsrael@hotmail.com", "https://facebook.com/Bryant Ponce", 
	"Industrias", "Ingeniería en Sistemas Computacionales", "Cobach 26", "Vespertino (de 4:00 PM a 7:00 PM)",
    "Las oportunidades de esa universidad me interesan", "Unos amigos que han venido me recomendarón ingresar aquí para tomar cursos",
    "Juan Ponce Palomo", "4442399904", 2);
    
insert into ingresos (id_universidad, dp_nombre, dp_edad, dp_whatsApp, dp_email, dp_facebook, dp_domicilio, data_carrera,
	data_escuela, data_horario, data_razonIngreso, ref_saberNosotros, ref_nombreTutor, ref_telefonoTutor, id_curso) 
values (5, "Ana Laura Gonzalez", 18, "4861046581", "anaLaura@hotmail.com", "https://facebook.com/Ana Laura", 
	"Col. Amatista", "Ingeniería en Sistemas Computacionales", "Cobach 26", "Sabatino (de 8:00 AM a 4:00 PM)",
    "Las oportunidades de esa universidad me interesan", "Unos amigos que han venido me recomendarón ingresar aquí para tomar cursos",
    "Linda Gonzalez", "4442345904", 3);
   
insert into ingresos (id_universidad, dp_nombre, dp_edad, dp_whatsApp, dp_email, dp_facebook, dp_domicilio, data_carrera,
	data_escuela, data_horario, data_razonIngreso, ref_saberNosotros, ref_nombreTutor, ref_telefonoTutor, id_curso) 
values (4, "Ulises Contreras Vega", 18, "4445876123", "ulisesContreras@hotmail.com", "https://facebook.com/Ulises Contreras", 
	"Col. Matemáticos 113", "Ingeniería en Sistemas Computacionales", "Cobach 28", "Matutino (de 9:00 AM a 12:00 PM)",
    "Las oportunidades de esa universidad me interesan", "Unos amigos que han venido me recomendarón ingresar aquí para tomar cursos",
    "Anya Contreras", "4444598762", 2);

/* FALTA */ 
insert into ingresos (id_universidad, dp_nombre, dp_edad, dp_whatsApp, dp_email, dp_facebook, dp_domicilio, data_carrera,
	data_escuela, data_horario, data_razonIngreso, ref_saberNosotros, ref_nombreTutor, ref_telefonoTutor, id_curso) 
values (3, "Arath Martinez Vazquez", 18, "4861046581", "bryantIsrael@hotmail.com", "https://facebook.com/Bryant Ponce", 
	"Industrias", "Ingeniería en Sistemas Computacionales", "Cobach 26", "Vespertino (de 4:00 PM a 7:00 PM)",
    "Las oportunidades de esa universidad me interesan", "Unos amigos que han venido me recomendarón ingresar aquí para tomar cursos",
    "Juan Ponce Palomo", "4442399904", 2);
    
insert into ingresos (id_universidad, dp_nombre, dp_edad, dp_whatsApp, dp_email, dp_facebook, dp_domicilio, data_carrera,
	data_escuela, data_horario, data_razonIngreso, ref_saberNosotros, ref_nombreTutor, ref_telefonoTutor, id_curso) 
values (5, "Ana Laura Gonzalez", 18, "4861046581", "anaLaura@hotmail.com", "https://facebook.com/Ana Laura", 
	"Col. Amatista", "Ingeniería en Sistemas Computacionales", "Cobach 26", "Sabatino (de 8:00 AM a 4:00 PM)",
    "Las oportunidades de esa universidad me interesan", "Unos amigos que han venido me recomendarón ingresar aquí para tomar cursos",
    "Linda Gonzalez", "4442345904", 3);
    
insert into ingresos (id_universidad, dp_nombre, dp_edad, dp_whatsApp, dp_email, dp_facebook, dp_domicilio, data_carrera,
	data_escuela, data_horario, data_razonIngreso, ref_saberNosotros, ref_nombreTutor, ref_telefonoTutor, id_curso) 
values (2, "Josué Alberto Lopez Flores", 18, "4442074330", "josueflores@hotmail.com", "https://facebook.com/Josue Alberto", 
	"Avenida de las Presas 117", "Ingeniería en Sistemas Computacionales", "Cobach 28", "Matutino (de 9:00 AM a 12:00 PM)",
    "Las oportunidades de esa universidad me interesan", "Unos amigos que han venido me recomendarón ingresar aquí para tomar cursos",
    "Luis Alberto Lopez Flores", "4442399904", 3);
    
insert into ingresos (id_universidad, dp_nombre, dp_edad, dp_whatsApp, dp_email, dp_facebook, dp_domicilio, data_carrera,
	data_escuela, data_horario, data_razonIngreso, ref_saberNosotros, ref_nombreTutor, ref_telefonoTutor, id_curso) 
values (1, "Bryant Israel Ponce Palomo", 18, "4861046581", "bryantIsrael@hotmail.com", "https://facebook.com/Bryant Ponce", 
	"Industrias", "Ingeniería en Sistemas Computacionales", "Cobach 26", "Vespertino (de 4:00 PM a 7:00 PM)",
    "Las oportunidades de esa universidad me interesan", "Unos amigos que han venido me recomendarón ingresar aquí para tomar cursos",
    "Juan Ponce Palomo", "4442399904", 2);
    
insert into ingresos (id_universidad, dp_nombre, dp_edad, dp_whatsApp, dp_email, dp_facebook, dp_domicilio, data_carrera,
	data_escuela, data_horario, data_razonIngreso, ref_saberNosotros, ref_nombreTutor, ref_telefonoTutor, id_curso) 
values (5, "Ana Laura Gonzalez", 18, "4861046581", "anaLaura@hotmail.com", "https://facebook.com/Ana Laura", 
	"Col. Amatista", "Ingeniería en Sistemas Computacionales", "Cobach 26", "Sabatino (de 8:00 AM a 4:00 PM)",
    "Las oportunidades de esa universidad me interesan", "Unos amigos que han venido me recomendarón ingresar aquí para tomar cursos",
    "Linda Gonzalez", "4442345904", 3);
    
insert into ingresos (id_universidad, dp_nombre, dp_edad, dp_whatsApp, dp_email, dp_facebook, dp_domicilio, data_carrera,
	data_escuela, data_horario, data_razonIngreso, ref_saberNosotros, ref_nombreTutor, ref_telefonoTutor, id_curso) 
values (2, "Josué Alberto Lopez Flores", 18, "4442074330", "josueflores@hotmail.com", "https://facebook.com/Josue Alberto", 
	"Avenida de las Presas 117", "Ingeniería en Sistemas Computacionales", "Cobach 28", "Matutino (de 9:00 AM a 12:00 PM)",
    "Las oportunidades de esa universidad me interesan", "Unos amigos que han venido me recomendarón ingresar aquí para tomar cursos",
    "Luis Alberto Lopez Flores", "4442399904", 3);
select * from ingresos;

delete from ingresos where id=3;