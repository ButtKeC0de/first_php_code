CREATE DATABASE sistema_carlos_buttke;

USE sistema_carlos_buttke;

CREATE TABLE usuario (
id INT AUTO_INCREMENT  PRIMARY KEY,
usuario VARCHAR (255) NOT NULL, 
senha VARCHAR (255) NOT NULL

);


INSERT INTO usuarios (usuario, senha) VALUES ('admin','123');