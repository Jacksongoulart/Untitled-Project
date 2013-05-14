drop database if exists treinamento;
create database treinamento;

use treinamento;

CREATE TABLE usuario(
id_usuario INT NOT NULL auto_increment,
nome_completo VARCHAR(45) NOT NULL,
nome_usuario VARCHAR(20) NOT NULL UNIQUE,
password VARCHAR(20) NOT NULL,
data_nascimento DATE NOT NULL,
sexo CHAR NOT NULL,
email VARCHAR(80) NOT NULL UNIQUE,
PRIMARY KEY (id_usuario)
);

CREATE TABLE evento(
id_evento INT NOT NULL auto_increment,
id_usuario INT NOT NULL,
id_endereco INT, 
opcao_end TINYINT(1) NOT NULL,
descricao VARCHAR(45),
tipo_evento VARCHAR(45) NOT NULL,
cor_evento VARCHAR(45) NOT NULL,
horario_termino DATE NOT NULL,
horario_inicio DATE NOT NULL,
PRIMARY KEY (id_evento),
CONSTRAINT fk_id_usuario FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE enderecoevento(
id_endereco INT NOT NULL auto_increment, 
id_evento INT NOT NULL,
rua VARCHAR(45) NOT NULL,
numero VARCHAR(45) NOT NULL,
complemento VARCHAR(45),
bairro VARCHAR(45) NOT NULL,
cidade VARCHAR(45) NOT NULL,
estado VARCHAR(45) NOT NULL,
PRIMARY KEY (id_endereco),
CONSTRAINT fk_id_endereco FOREIGN KEY (id_evento) REFERENCES evento(id_evento)
);