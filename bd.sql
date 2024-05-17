CREATE DATABASE Entrenador;
use Entrenador;
CREATE TABLE datos(
    nombre varchar(30),
    apellido varchar(30),
    pais varchar(30),
    curso varchar(30),
    email varchar(30),
    telefono INT(30)
);

CREATE TABLE comentario(
    nombre varchar(30),
    correo varchar(30),
    comentario varchar(30)
);

CREATE TABLE citas(
    id int(25),
    nombre varchar(25),
    apellido varchar(25),
    identificacion int(25),
    fecha date
);

CREATE TABLE admin(
    codigo int(25),
    nombre varchar(25),
    correo varchar(25),
    fecha_alta date,
    fecha_baja date
);