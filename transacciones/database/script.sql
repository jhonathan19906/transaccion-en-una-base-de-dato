CREATE DATABASE trabajo;

use trabajo;

CREATE TABLE task(
  id INT(11) PRIMARY KEY AUTO_INCREMENT,
  nombre Char(100),
  title VARCHAR(255) NOT NULL,
  description TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE task;
