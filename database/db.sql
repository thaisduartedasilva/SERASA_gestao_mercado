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

INSERT INTO produto (nome, categoria, descricao, quantidade, validade, preco) VALUES
('feijão', 'alimento', 'feijão preto', '20', '2027/02/10', '30'),
('macarrão', 'alimento', 'macarrão 500g', '90', '2027/05/11', '70'),
('sabão', 'limpesa', 'sabão liquido', '50', '2028/10/01', '3');