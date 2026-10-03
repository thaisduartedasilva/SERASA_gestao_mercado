CREATE DATABASE gestao_mercado;
USE gestao_mercado;

CREATE TABLE produto(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(250) NOT NULL,
    categoria VARCHAR(250) NOT NULL,
    descricao VARCHAR(1000) NOT NULL,
    quantidade INT NOT NULL,
    validade DATE NOT NULL,
    preco FLOAT NOT NULL
);