CREATE DATABASE db_todo;
USE db_todo;

CREATE TABLE tb_usuarios(
    id_us INT AUTO_INCREMENT,
    nome_us VARCHAR(50),
    sobrenome_us VARCHAR(50),
    email_us VARCHAR(30),
    senha_us VARCHAR(30),
    PRIMARY KEY(id_us)
);

CREATE TABLE tb_tarefas(
    id_tf INT AUTO_INCREMENT,
    titulo_tf VARCHAR(20),
    descricao_tf VARCHAR(50),
    data_tf DATE,
    concluida_tf VARCHAR(1),
    classificacao_tf VARCHAR(15),
    id_us INT,
    PRIMARY KEY(id_tf)
);

ALTER TABLE tb_tarefas ADD FOREIGN KEY(id_us) REFERENCES tb_usuarios(id_us);

INSERT INTO `tb_tarefas` (`id_tf`, `titulo_tf`, `descricao_tf`, `data_tf`, `concluida_tf`, `classificacao_tf`, `id_us`) 
VALUES ('1', 'Calculadora', 'Realizar uma calculadora', '2022-06-20', 's', '3', '1');