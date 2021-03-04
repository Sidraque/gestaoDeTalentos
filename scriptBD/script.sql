CREATE DATABASE gestaotalentos;

USE gestaotalentos;

CREATE TABLE Usuario (
idUsuario INT AUTO_INCREMENT PRIMARY KEY,
nomeCompleto VARCHAR(150) NOT NULL,
email VARCHAR(100) NOT NULL,
senha VARCHAR(30) NOT NULL,
tipoUser INT(10) NOT NULL,
ctps CHAR(7) UNIQUE,
rg CHAR(9) UNIQUE,
cpf CHAR(14) UNIQUE,
nasc VARCHAR(10),
admissao VARCHAR(10),
setor VARCHAR(50),
cargo VARCHAR(50),
habilidades VARCHAR(150),
telefone CHAR(14),
endereco VARCHAR(100),
complemento VARCHAR(150),
estado CHAR(2),
cidade CHAR(50),
cep CHAR(7),
cursosComplementares VARCHAR(200),
curso VARCHAR(150),
instituicao VARCHAR(150),
nivel CHAR(50),
situacao CHAR(50) 
);
