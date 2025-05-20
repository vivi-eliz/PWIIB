<?php 
$servidor = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$banco = "PW_BD"; 


$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}


$script = "
    CREATE DATABASE PW_BD;
    USE PW_BD;

    CREATE TABLE USUARIOS (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        LOGIN VARCHAR(50) NOT NULL,
        SENHA VARCHAR(80) NOT NULL,
        ATIVO BIT DEFAULT 1
    );

    INSERT INTO USUARIOS 
        (LOGIN, SENHA, ATIVO) 
    VALUES
        ('admin', '123456', 1);

    CREATE TABLE PRODUTOS (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        DESCRICAO VARCHAR(150) NOT NULL,
        CODIGO_BARRAS VARCHAR(25) NOT NULL,
        VALOR DECIMAL(10,2) NOT NULL,
        IMAGEM VARCHAR(50),
        ATIVO BIT NOT NULL
    );
    INSERT INTO PRODUTOS (DESCRICAO, CODIGO_BARRAS, VALOR, ATIVO) VALUES ( 'Amendoin Verde', '7898728640096', 5.50, 1);
    INSERT INTO PRODUTOS (DESCRICAO, CODIGO_BARRAS, VALOR, ATIVO) VALUES ( 'Goiabinha Saborosa', '7898045700725', 1.50, 1);
    INSERT INTO produtos (DESCRICAO, VALOR, CODIGO_BARRAS, ATIVO) VALUES
    ('Camiseta Estampada - 100% Algodão', 49.90, '1234567890123', 1),
    ('Tênis Esportivo - Conforto e Estilo', 299.90, '1234567890124', 1),
    ('Smartphone XPro - 128GB, Câmera 48MP', 1999.00, '1234567890125', 1),
    ('Caderno Universitário - 200 Folhas', 29.90, '1234567890126', 1),
    ('Mochila de Couro - Elegante e Espaçosa', 249.90, '1234567890127', 1),
    ('Fone de Ouvido Bluetooth - Cancelamento de Ruído', 149.90, '1234567890128', 1),
    ('Relógio Digital - À Prova D\'água', 199.90, '1234567890129', 1),
    ('Lavadora de Roupas - 10Kg', 1599.00, '1234567890130', 1),
    ('Batedeira Elétrica - 5 Velocidades', 399.90, '1234567890131', 1),
    ('Kit de Maquiagem - 12 Peças', 89.90, '1234567890132', 1),
    ('Cafeteira Elétrica - 12 Xícaras', 299.90, '1234567890133', 1),
    ('Conjunto de Panelas - Antiaderente', 349.90, '1234567890134', 1),
    ('TV LED 50\" - Full HD', 2499.00, '1234567890135', 1),
    ('Geladeira Inverse - 450 Litros', 3499.00, '1234567890136', 1),
    ('Assento de Carro - Conforto e Segurança', 199.90, '1234567890137', 1),
    ('Conjunto de Facas de Cozinha - 6 Peças', 129.90, '1234567890138', 1),
    ('Roupão de Banho - Microfibra', 89.90, '1234567890139', 1),
    ('Aspirador de Pó - Sem Fio', 599.90, '1234567890140', 1),
    ('Secador de Cabelo - 2200W', 199.90, '1234567890141', 1),
    ('Jogo de Lençóis - 150 Fios', 159.90, '1234567890142', 1);

    ALTER TABLE PRODUTOS
    ADD COLUMN CATEGORIA_ID INT;


     CREATE TABLE CATEGORIAS (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        NOME VARCHAR(100) NOT NULL
    );

    ALTER TABLE PRODUTOS ADD CONSTRAINT FK_PRODUTOS_CATEGORIAS FOREIGN KEY (CATEGORIA_ID) REFERENCES CATEGORIAS ( ID );

     INSERT INTO CATEGORIAS (NOME) VALUES ('Eletrônicos');
     INSERT INTO CATEGORIAS (NOME) VALUES ('Vestuário'); 
     INSERT INTO CATEGORIAS (NOME) VALUES ('Alimentos'); 
     INSERT INTO CATEGORIAS (NOME) VALUES ('Utilidades Domésticas');
     INSERT INTO CATEGORIAS (NOME) VALUES ('Gamer');

     CREATE TABLE USUARIOS (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        LOGIN VARCHAR(50) NOT NULL,
        SENHA VARCHAR(80) NOT NULL,
        ATIVO BIT DEFAULT 1
    );

    CREATE TABLE PERMISSOES (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        DESCRICAO VARCHAR(150) NOT NULL,
        ROLE VARCHAR(50) NOT NULL
    );

    CREATE TABLE USUARIOS_PERMISSOES (
        ID INT PRIMARY KEY AUTO_INCREMENT,
        USUARIO_ID INT NOT NULL,
        PERMISSAO_ID INT NOT NULL,
        CONSTRAINT FK_USUARIO FOREIGN KEY (usuario_id) REFERENCES USUARIOS(ID) ON DELETE CASCADE,
        CONSTRAINT FK_PERMISSAO FOREIGN KEY (permissao_id) REFERENCES PERMISSOES(ID) ON DELETE CASCADE
    );

    INSERT INTO `usuarios_permissoes` (`ID`, `USUARIO_ID`, `PERMISSAO_ID`) VALUES (NULL, '1', '6'), (NULL, '1', '5');
";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>