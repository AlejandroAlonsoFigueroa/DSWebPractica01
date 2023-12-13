CREATE USER alejandro;
CREATE DATABASE practica1;
GRANT ALL PRIVILEGES ON DATABASE practica1 TO alejandro;
ALTER DATABASE practica1 OWNER TO alejandro;
ALTER USER alejandro WITH PASSWORD 'postgres';

connect practica1

CREATE TABLE empleados (
    clave VARCHAR(50),
    nombre VARCHAR(255),
    direccion VARCHAR(255),
    telefono VARCHAR(15)
);
