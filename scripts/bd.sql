CREATE DATABASE `pocphplaurent`;

USE `pocphplaurent`;
DROP TABLE IF EXISTS `service`;

CREATE TABLE `service` (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  description TEXT,
  tarif DECIMAL(5, 2) NOT NULL DEFAULT 0,
  image VARCHAR(255)
);

INSERT INTO service(name, description, tarif, image) VALUES('service 1', 'description 1', 25.10, 'http://...');
INSERT INTO service(name, description, tarif, image) VALUES('service 2', 'description 2', 55.10, 'http://...');
INSERT INTO service(name, description, tarif, image) VALUES('service 3', 'description 3', 155.10, 'http://...');
INSERT INTO service(name, description, tarif, image) VALUES('service 4', 'description 4', 200.10, 'http://...');
