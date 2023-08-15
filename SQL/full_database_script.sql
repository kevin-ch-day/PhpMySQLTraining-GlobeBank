create database globe_bank;
use globe_bank;
grant all PRIVILEGES on globe_bank.* to 'webuser'@'localhost' IDENTIFIED BY 'secretpassword';
CREATE TABLE subjects (
  id INT(11) NOT NULL AUTO_INCREMENT,
  menu_name VARCHAR(255),
  position INT(3),
  visible TINYINT(1),
  PRIMARY KEY (id)
);

insert into subjects (id, menu_name, position, visible)
    values (1, 'About Globe Bank', 1, 1);
insert into subjects (menu_name, position, visible)
    values ('Consumer', 2, 1);
insert into subjects (menu_name, position, visible)
    values ('Small Business', 3, 0);