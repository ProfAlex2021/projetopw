CREATE DATABASE modular;
USE modular;

CREATE TABLE tb_usuario(
    id_us int PRIMARY KEY AUTO_INCREMENT,
    nome_us VARCHAR(100),
    email_us VARCHAR(100)
);

INSERT INTO tb_usuario VALUES(NULL, 'carlos', 'carlos@etec.sp.gov.br');
INSERT INTO tb_usuario VALUES(NULL, 'luiz', 'luiz@etec.sp.gov.br');