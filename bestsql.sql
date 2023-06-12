-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Bestlegacy
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Bestlegacy
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Bestlegacy` DEFAULT CHARACTER SET utf8 ;
USE `Bestlegacy` ;

-- -----------------------------------------------------
-- Table `Bestlegacy`.`term`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Bestlegacy`.`term` (
  `term_date` INT NOT NULL,
  `school_id` VARCHAR(45) NULL,
  `student_id` VARCHAR(45) NULL,
  PRIMARY KEY (`term_date`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bestlegacy`.`school`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Bestlegacy`.`school` (
  `school_name` INT NOT NULL,
  `school_email` VARCHAR(45) NULL,
  INDEX `fk3_idx` (`school_name` ASC) VISIBLE,
  CONSTRAINT `fk3`
    FOREIGN KEY (`school_name`)
    REFERENCES `Bestlegacy`.`term` (`term_date`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bestlegacy`.`student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Bestlegacy`.`student` (
  `student_id` INT NOT NULL AUTO_INCREMENT,
  `student_name` VARCHAR(45) NULL,
  `student_email` VARCHAR(45) NULL,
  `student_class` VARCHAR(45) NULL,
  PRIMARY KEY (`student_id`),
  CONSTRAINT `fk4`
    FOREIGN KEY (`student_id`)
    REFERENCES `Bestlegacy`.`school` (`school_name`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bestlegacy`.`Adm`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Bestlegacy`.`Adm` (
  `Adm_id` INT NULL AUTO_INCREMENT,
  `Adm_name` VARCHAR(45) NOT NULL,
  `school_id` VARCHAR(45) NULL,
  `adm_email` VARCHAR(45) NULL,
  PRIMARY KEY (`Adm_name`),
  INDEX `fk1_idx` (`Adm_id` ASC) VISIBLE,
  UNIQUE INDEX `adm_email_UNIQUE` (`adm_email` ASC) VISIBLE,
  CONSTRAINT `fk1`
    FOREIGN KEY (`Adm_id`)
    REFERENCES `Bestlegacy`.`school` (`school_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bestlegacy`.`parent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Bestlegacy`.`parent` (
  `parent_id` INT NOT NULL AUTO_INCREMENT,
  `parent_name` VARCHAR(45) NULL,
  `parent_email` VARCHAR(45) NULL,
  `password` VARCHAR(45) NULL,
  `confirm_password` VARCHAR(45) NULL,
  PRIMARY KEY (`parent_id`),
  UNIQUE INDEX `parent_email_UNIQUE` (`parent_email` ASC) VISIBLE,
  CONSTRAINT `fk2`
    FOREIGN KEY (`parent_id`)
    REFERENCES `Bestlegacy`.`student` (`student_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk14`
    FOREIGN KEY (`parent_id`)
    REFERENCES `Bestlegacy`.`Adm` (`Adm_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bestlegacy`.`teaher`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Bestlegacy`.`teaher` (
  `teacher_id` INT NOT NULL AUTO_INCREMENT,
  `teaher_name` VARCHAR(45) NULL,
  `school_id` VARCHAR(45) NULL,
  PRIMARY KEY (`teacher_id`),
  CONSTRAINT `fk5`
    FOREIGN KEY (`teacher_id`)
    REFERENCES `Bestlegacy`.`student` (`student_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bestlegacy`.`payment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Bestlegacy`.`payment` (
  `payment` INT NOT NULL,
  `student_id` VARCHAR(45) NULL,
  `school_name` VARCHAR(45) NULL,
  `payment_id` VARCHAR(45) NULL,
  PRIMARY KEY (`payment`),
  CONSTRAINT `fk9`
    FOREIGN KEY (`payment`)
    REFERENCES `Bestlegacy`.`school` (`school_name`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk10`
    FOREIGN KEY (`payment`)
    REFERENCES `Bestlegacy`.`student` (`student_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk11`
    FOREIGN KEY (`payment`)
    REFERENCES `Bestlegacy`.`term` (`term_date`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Bestlegacy`.`class`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Bestlegacy`.`class` (
  `class_name` INT NOT NULL,
  INDEX `fk12_idx` (`class_name` ASC) VISIBLE,
  CONSTRAINT `fk12`
    FOREIGN KEY (`class_name`)
    REFERENCES `Bestlegacy`.`student` (`student_id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
