/* comentario en sql
SQL Structure Query Language - Lenguaje Estructurado de Consultas

Base de Datos: Una coleccion de datos que estan organizados.

Que es un campo
Que es un registro
Que es una tabla
Que es un tipo de dato y ejemplos

Gestores o Manejadores de BD son los programas que nos permiten administrar los datos

Ejemplo de Gestores de BD: Microsoft Acces, Microsoft SQL Server, ORACLE, Informiz, DBase, SQL Lite, PostgreSQL, MySQL

mysql con clase
mysql

una sentencia sql es una linea de codigo para trabajar con nuestra BD

Existen 2 tipos de sentencias SQL:

!)Sentencias Estructurales: Son las que nos permite crear, modificar o eliminar objetos, usuarios, y propiedades de nuestra BD

2)Sentecias de Datos: son las que nos permitiran insertar, eliminar, modificar y buscar informacion en nuestra BD

En MySQL existen 2 tipos de engine para tablas:
1)MyISAM - Tablas Planas, son como si fuera a trabajar datos en Excel
2)InnoDB - Tablas Relacionales, son como si fuera a trabajar dador en Access

Modelo Entidad-Relacion de una BD
Normalizacion de una BD
 */

CREATE DATABASE mis_contactos;
 
USE mis_contactos;

CREATE TABLE contactos(
  email VARCHAR(50) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  sexo CHAR(1),
  nacimiento DATE,
  telefono VARCHAR(13),
  pais VARCHAR(50)NOT NULL,
  imagen VARCHAR(50),
  PRIMARY KEY(email),
  FULLTEXT KEY buscador(email, nombre, sexo, telefono, pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1 ;

CREATE TABLE pais(
  id_pais INT NOT NULL AUTO_INCREMENT,
  pais VARCHAR(50) NOT NULL,
  PRIMARY KEY(id_pais)
)ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO pais(id_pais,pais) VALUES
  (1,"mexico"),
  (2,"colombia"),
  (3,"guatemala"),
  (4,"Espana"),
  (5,"brasil"),
  (6,"uruguay"),
  (7,"peru"),
  (8,"argentina"),
  (9,"chile"),
  (10,"paraguay"),
  (11,"honduras"),
  (12,"el salvador"),
  (13,"Nicaragua"),
  (14,"costa rica"),
  (15,"panama"),
  (16,"venezuela"),
  (17,"ecuador"),
  (18,"bolivia"),
  (19,"canada"),
  (20,"estados unidos"),
  (21,"groenlandia"),
  (22,"republica dominicana"),
  (23,"haiti"),
  (24,"cuba"),
  (25,"belice"),
  (26,"inglaterra"),
  (27,"francia"),
  (28,"alemania"),
  (29,"italia"),
  (30,"japon"),
  (31,"china"),
  (32,"egipto"),
  (33,"sudafrica"),
  (34,"australia"),
  (35,"nueva zelanda");