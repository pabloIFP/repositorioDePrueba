DROP DATABASE IF EXISTS dbpablo;

CREATE DATABASE dbpablo;

use dbpablo;

CREATE TABLE IF NOT EXISTS usuarios 
(

	id			INT UNSIGNED	AUTO_INCREMENT	NOT NULL,
	nombre		VARCHAR(255)					NOT NULL,
	email		VARCHAR(255)	UNIQUE			NOT NULL,
	direccion	VARCHAR(255)							,
	telefono	INT(9)									,
	password	VARCHAR(255)	UNIQUE			NOT NULL,

	PRIMARY KEY (id)

) ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci;