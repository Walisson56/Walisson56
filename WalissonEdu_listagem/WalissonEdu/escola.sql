CREATE DATABASE escolawalisson;
USE escolawalisson;

CREATE TABLE aluno (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    idade INT,
    genero VARCHAR(15),
    observacoes VARCHAR(100)
);

CREATE TABLE curso (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    descricao VARCHAR(100),
    carga_horaria INT
);

CREATE TABLE professor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    especialidade VARCHAR(100),
    email VARCHAR(100)
);

CREATE TABLE supervisor (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    setor VARCHAR(50),
    telefone VARCHAR(20)
);
