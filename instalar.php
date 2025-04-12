<?php
    include "conexao.php";

    $sql = 'CREATE TABLE  IF NOT EXISTS USUARIOS(
                ID INT PRIMARY KEY AUTO_INCREMENT,
                LOGIN VARCHAR(50) NOT NULL,
                SENHA VARCHAR(80) NOT NULL,
                ATIVO BIT DEFAULT 1
    );   
            ';

    $conexao->query($sql);
    
    if ($conexao->query($sql)) {
        echo "Tabela criada com sucesso.<br>";
    } else {
        echo "Erro ao criar a tabela: " . $conexao->error . "<br>";
    }
    
  ///////////////////////////bloco para inserir usuario////////////////////////////
    //$sql_insert = "INSERT INTO USUARIOS (LOGIN, SENHA) VALUES ('ADMIN','123');";
    $sql_insert = "selet " from usuario";
 
    if ($conexao->query($sql_insert)) {
        echo "Nova linha inserida com sucesso.<br>";
    } else {
        echo "Erro ao inserir dados: " . $conexao->error . "<br>";
    }

    ///////////////////////////////fim do bloco para inserir usuario///////////////

    $conexao->close();
    
?>