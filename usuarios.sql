
-- -----------------------------------------------------
-- Schema usuarios
-- -----------------------------------------------------
CREATE DATABASE IF NOT EXISTS usuarios DEFAULT CHARACTER SET = 'utf8' DEFAULT COLLATE 'utf8_general_ci';
USE usuarios;

-- -----------------------------------------------------
-- TABLE user
-- -----------------------------------------------------


DROP TABLE IF EXISTS user;

CREATE TABLE IF NOT EXISTS user(
  
id int(11) NOT NULL AUTO_INCREMENT,
 
name varchar(100) NOT NULL,
 
correo varchar(100) NOT NULL,
 
date varchar(50) NOT NULL,
  
phone varchar(50) NOT NULL,
  
registered varchar(50) DEFAULT NULL,
 
account varchar(50) NOT NULL,
 
PRIMARY KEY (`id`)
) 
ENGINE=InnoDB;




INSERT INTO user (id, name, correo, date, phone, registered, account) 
VALUES
(1, 'Pol Reyes', 'pol@gmail.com', '2000-01-01', '123456789', '2021-02-18 11:12:05', 'activo'),
(2, 'Wilmer', 'wilmer@gmail.com', '2021-02-12', '987654321','2021-02-18 12:48:42', 'activo');

