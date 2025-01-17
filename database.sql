-- Crie o banco de dados
CREATE DATABASE budget_db;

-- Use o banco de dados criado
USE budget_db;

-- Crie a tabela budgets
CREATE TABLE budgets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    datetime DATETIME NOT NULL,
    status INT NOT NULL
);