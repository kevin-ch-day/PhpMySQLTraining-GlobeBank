-- create database for globe_bank

create database globe_bank;
-- show databases;
use globe_bank;
-- drop database globe_bank;
grant all PRIVILEGES on globe_bank.* to 'webuser'@'localhost' IDENTIFIED BY 'secretpassword';

--show tables;

CREATE TABLE subjects (
  id INT(11) NOT NULL AUTO_INCREMENT,
  menu_name VARCHAR(255),
  position INT(3),
  visible TINYINT(1),
  PRIMARY KEY (id)
);

--show tables;
--show columns from subjects;
-- drop table subjects;