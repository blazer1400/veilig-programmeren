CREATE TABLE IF NOT EXISTS `vulnerable_db`.`article` (
  `idarticle` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(254) NULL,
  `content` TEXT(2000) NULL,
  PRIMARY KEY (`idarticle`))
ENGINE = InnoDB;



--Create user
CREATE USER 'admin'@'localhost' IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'localhost';

-- SET PASSWORD FOR 'admin'@'localhost' = PASSWORD('admin');
