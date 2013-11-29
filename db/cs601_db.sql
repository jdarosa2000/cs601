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
  `categoryId` INT(11) NOT NULL,
  `category_name` VARCHAR(30) NOT NULL,
  `category_desc` VARCHAR(256) NULL,
  PRIMARY KEY (`categoryId`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cs601`.`ingredients`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cs601`.`ingredients` ;

CREATE TABLE IF NOT EXISTS `cs601`.`ingredients` (
  `ingredientId` INT NOT NULL,
  `ingredient_name` VARCHAR(45) NOT NULL,
  `ingredient_desc` VARCHAR(256) NULL,
  PRIMARY KEY (`ingredientId`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cs601`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cs601`.`users` ;

CREATE TABLE IF NOT EXISTS `cs601`.`users` (
  `userId` INT NOT NULL,
  `user_email` VARCHAR(256) NOT NULL,
  `user_name` VARCHAR(256) NOT NULL,
  PRIMARY KEY (`userId`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cs601`.`tags`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cs601`.`tags` ;

CREATE TABLE IF NOT EXISTS `cs601`.`tags` (
  `tagId` INT NOT NULL,
  `tag_name` VARCHAR(256) NOT NULL,
  `tagscol` VARCHAR(45) NULL,
  PRIMARY KEY (`tagId`, `tag_name`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cs601`.`recipe`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cs601`.`recipe` ;

CREATE TABLE IF NOT EXISTS `cs601`.`recipe` (
  `recipeId` INT NOT NULL,
  `userId` INT NOT NULL,
  `recipe_title` VARCHAR(256) NOT NULL,
  `recipe_desc` MEDIUMTEXT NOT NULL,
  `recipe_steps` MEDIUMTEXT NOT NULL,
  `categoryId` INT NOT NULL,
  `ingredientId` INT NOT NULL,
  `tagId` INT NULL,
  `recipe_image` LONGBLOB NULL,
  PRIMARY KEY (`recipeId`),
  INDEX `caetegoryId_idx` (`categoryId` ASC),
  INDEX `ingredientId_idx` (`ingredientId` ASC),
  INDEX `tagId_idx` (`tagId` ASC),
  INDEX `userId_idx` (`userId` ASC),
  CONSTRAINT `caetegoryId`
    FOREIGN KEY (`categoryId`)
    REFERENCES `cs601`.`categories` (`categoryId`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE,
  CONSTRAINT `ingredientId`
    FOREIGN KEY (`ingredientId`)
    REFERENCES `cs601`.`ingredients` (`ingredientId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `userId`
    FOREIGN KEY (`userId`)
    REFERENCES `cs601`.`users` (`userId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `tagId`
    FOREIGN KEY (`tagId`)
    REFERENCES `cs601`.`tags` (`tagId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cs601`.`recipe_ingredient`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cs601`.`recipe_ingredient` ;

CREATE TABLE IF NOT EXISTS `cs601`.`recipe_ingredient` (
  `recipe_ingredient_id` INT NOT NULL,
  `recipeId` INT NULL,
  `ingredientId` INT NULL,
  PRIMARY KEY (`recipe_ingredient_id`),
  INDEX `recipeId_idx` (`recipeId` ASC),
  INDEX `ingredientId_idx` (`ingredientId` ASC),
  CONSTRAINT `recipe_ingredients_recipeId_fk`
    FOREIGN KEY (`recipeId`)
    REFERENCES `cs601`.`recipe` (`recipeId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `recipe_ingredients_ingredientId_fk`
    FOREIGN KEY (`ingredientId`)
    REFERENCES `cs601`.`ingredients` (`ingredientId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `cs601`.`recipe_tag`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `cs601`.`recipe_tag` ;

CREATE TABLE IF NOT EXISTS `cs601`.`recipe_tag` (
  `recipe_tag_id` INT NOT NULL,
  `recipeId` INT NOT NULL,
  `tagId` INT NOT NULL,
  `recipe_tagcol` VARCHAR(45) NULL,
  PRIMARY KEY (`recipe_tag_id`),
  INDEX `recipeId_idx` (`recipeId` ASC),
  INDEX `tagId_idx` (`tagId` ASC),
  CONSTRAINT `recipe_tag_recipeId_fk`
    FOREIGN KEY (`recipeId`)
    REFERENCES `cs601`.`recipe` (`recipeId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `recipe_tag_tagId_fk`
    FOREIGN KEY (`tagId`)
    REFERENCES `cs601`.`tags` (`tagId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
