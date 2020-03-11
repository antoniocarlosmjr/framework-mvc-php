CREATE TABLE framework_mvc_php;

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

// TODO FAZER
-- CREATE TABLE pessoa (
--   psa_id INT(11) NOT NULL AUTO_INCREMENT,
--   psa_nome VARCHAR(150) NOT NULL,
--   psa_cpf VARCHAR(11) NOT NULL,
--   psa_data_nascimento DATE NOT NULL,
--   PRIMARY KEY(psa_id)
-- );
--
-- CREATE TABLE cargo (
--   psa_id INT(11) NOT NULL AUTO_INCREMENT,
--   psa_nome VARCHAR(150) NOT NULL,
--   psa_cpf VARCHAR(11) NOT NULL,
--   psa_data_nascimento DATE NOT NULL,
--   PRIMARY KEY(psa_id)
-- );