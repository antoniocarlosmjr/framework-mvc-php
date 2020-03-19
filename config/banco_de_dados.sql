CREATE DATABASE framework_mvc_php;

USE framework_mvc_php;

CREATE TABLE empresa (
    emp_id INT(11) NOT NULL AUTO_INCREMENT,
    emp_ativo ENUM ('S', 'N') NOT NULL DEFAULT 'S' COMMENT 'S => Sim, N => Não',
    emp_data_cad DATETIME NOT NULL,
    emp_nome VARCHAR(50) NOT NULL,
    emp_cnpj VARCHAR(14) NOT NULL,
    emp_email VARCHAR(50) NOT NULL,
    emp_cep VARCHAR(10) NOT NULL,
    emp_estado VARCHAR(50) NOT NULL,
    emp_cidade VARCHAR(50) NOT NULL,
    emp_bairro VARCHAR(50) NOT NULL,
    emp_logradouro VARCHAR(50) NOT NULL,
    emp_telefone VARCHAR(20) NOT NULL,
    PRIMARY KEY(emp_id)
);

CREATE TABLE cargo (
    car_id INT(11) NOT NULL AUTO_INCREMENT,
    car_ativo ENUM ('S', 'N') NOT NULL DEFAULT 'S' COMMENT 'S => Sim, N => Não',
    car_data_cad DATETIME NOT NULL,
    car_nome VARCHAR(150) NOT NULL,
    PRIMARY KEY(car_id)
);

CREATE TABLE pessoa (
    pes_id INT(11) NOT NULL AUTO_INCREMENT,
    pes_ativo ENUM ('S', 'N') NOT NULL DEFAULT 'S' COMMENT 'S => Sim, N => Não',
    pes_data_cad DATETIME NOT NULL,
    pes_nome VARCHAR(150) NOT NULL,
    pes_cpf VARCHAR(11) NOT NULL,
    pes_nascimento DATE NOT NULL,
    emp_id INT(11) NULL,
    car_id INT(11) NULL,
    PRIMARY KEY(pes_id),
    CONSTRAINT fk_empresa_pessoa FOREIGN KEY (emp_id) REFERENCES empresa (emp_id),
    CONSTRAINT fk_cargo_pessoa FOREIGN KEY (car_id) REFERENCES cargo (car_id)
    ON DELETE NO ACTION ON UPDATE NO ACTION
);