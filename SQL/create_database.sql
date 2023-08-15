-- create database for globe_bank

create database globe_bank;
-- show databases;
use globe_bank;
-- drop database globe_bank;
grant all PRIVILEGES on globe_bank.* to 'webuser'@'localhost' IDENTIFIED BY 'secretpassword';
