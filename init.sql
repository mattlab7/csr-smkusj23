CREATE DATABASE sitedb;
USE sitedb;
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    fullName VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    address TEXT,
    class VARCHAR(255)
);