SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `cs601` ;
CREATE SCHEMA IF NOT EXISTS `cs601` DEFAULT CHARACTER SET latin1 ;
USE `cs601` ;

-- -----------------------------------------------------
-- Table `cs601`.`categories`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cs601`.`categories` ;

CREATE TABLE IF NOT EXISTS `cs601`.`categories` (
  `categoryId` INT(11) NOT NULL AUTO_INCREMENT,
  `category_name` VARCHAR(30) NOT NULL,
  `category_desc` VARCHAR(256) NULL,
  PRIMARY KEY (`categoryId`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cs601`.`recipes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cs601`.`recipes` ;

CREATE TABLE IF NOT EXISTS `cs601`.`recipes` (
  `recipeId` INT NOT NULL AUTO_INCREMENT,
  `recipe_title` VARCHAR(256) NOT NULL,
  `recipe_desc` MEDIUMTEXT NOT NULL,
  `recipe_steps` MEDIUMTEXT NOT NULL,
  `recipe_image` LONGBLOB NULL,
  `user_email` VARCHAR(255) NULL,
  `ingredients` MEDIUMTEXT NULL,
  `category_name` VARCHAR(45) NULL,
  PRIMARY KEY (`recipeId`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cs601`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cs601`.`users` ;

CREATE TABLE IF NOT EXISTS `cs601`.`users` (
  `userId` INT NOT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(256) NOT NULL,
  `user_email` VARCHAR(256) NOT NULL,
  `user_password` VARCHAR(45) NULL,
  PRIMARY KEY (`userId`),
  UNIQUE INDEX `user_email_UNIQUE` (`user_email` ASC),
  UNIQUE INDEX `userId_UNIQUE` (`userId` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `cs601`.`categories`
-- -----------------------------------------------------
START TRANSACTION;
USE `cs601`;
INSERT INTO `cs601`.`categories` (`categoryId`, `category_name`, `category_desc`) VALUES (NULL, 'Appetizer', 'Appetizer desc');
INSERT INTO `cs601`.`categories` (`categoryId`, `category_name`, `category_desc`) VALUES (NULL, 'Dessert', 'Desert desc');
INSERT INTO `cs601`.`categories` (`categoryId`, `category_name`, `category_desc`) VALUES (NULL, 'Soup', NULL);
INSERT INTO `cs601`.`categories` (`categoryId`, `category_name`, `category_desc`) VALUES (NULL, 'Fish', NULL);
INSERT INTO `cs601`.`categories` (`categoryId`, `category_name`, `category_desc`) VALUES (NULL, 'Pasta', NULL);
INSERT INTO `cs601`.`categories` (`categoryId`, `category_name`, `category_desc`) VALUES (NULL, 'Beef', NULL);
INSERT INTO `cs601`.`categories` (`categoryId`, `category_name`, `category_desc`) VALUES (NULL, 'Vegetable', NULL);

COMMIT;


-- -----------------------------------------------------
-- Data for table `cs601`.`recipes`
-- -----------------------------------------------------
START TRANSACTION;
USE `cs601`;
INSERT INTO `cs601`.`recipes` (`recipeId`, `recipe_title`, `recipe_desc`, `recipe_steps`, `recipe_image`, `user_email`, `ingredients`, `category_name`) VALUES (NULL, 'Pasta Dish', 'pasta pasta', '1 2 3', NULL, 'jdarosa@us.ibm.com', 'ingredient 1', 'Pasta');
INSERT INTO `cs601`.`recipes` (`recipeId`, `recipe_title`, `recipe_desc`, `recipe_steps`, `recipe_image`, `user_email`, `ingredients`, `category_name`) VALUES (NULL, 'Fish', 'fish fish ', '456', NULL, 'cpersad@bu.edu', 'kkjkjdfkj', 'Fish');

COMMIT;


-- -----------------------------------------------------
-- Data for table `cs601`.`users`
-- -----------------------------------------------------
START TRANSACTION;
USE `cs601`;
INSERT INTO `cs601`.`users` (`userId`, `user_name`, `user_email`, `user_password`) VALUES (NULL, 'Jaime DaRosa', 'jdarosa2000@hotmail.com', '594bdc173eb61c83c33f752e2b2348f8');
INSERT INTO `cs601`.`users` (`userId`, `user_name`, `user_email`, `user_password`) VALUES (NULL, 'Carolyn Persad', 'cpersad@bu.edu', 'd86f37595e6aeac1c84174736968695b');
INSERT INTO `cs601`.`users` (`userId`, `user_name`, `user_email`, `user_password`) VALUES (NULL, 'James Bransford', 'jamesb@bu.edu', '2a6d452f70afaa7974eedd08e68310e5');

COMMIT;

