USE inscripciones;
CREATE TABLE datosPersonales (
	id INT AUTO_INCREMENT, 
    nombre VARCHAR(150) NOT NULL,
    edad INT NOT NULL,
    whatsApp INT(10) NOT NULL,
    email VARCHAR(150) NOT NULL,
    facebook VARCHAR(150)  NOT NULL,
    domicilio VARCHAR(150) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE datosAcademicos (
	id_universidad VARCHAR(150) NOT NULL,
    carrera VARCHAR(150) NOT NULL,
    escuela VARCHAR(150) NOT NULL,
    horario VARCHAR(150) NOT NULL,
    razonIngreso VARCHAR(500) NOT NULL,
	FOREIGN KEY (id) REFERENCES datosPersonales(id)
);

CREATE TABLE datosReferencia (
	saberNosotros VARCHAR(150) NOT NULL,
    nombreTutor VARCHAR(150) NOT NULL,
    telefonoTutor INT(10) NOT NULL,
    FOREIGN KEY (id) REFERENCES datosPersonales(id)
);

