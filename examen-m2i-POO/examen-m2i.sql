-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema exam_m2i
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema exam_m2i
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `exam_m2i` DEFAULT CHARACTER SET utf8 ;
USE `exam_m2i` ;

-- -----------------------------------------------------
-- Table `exam_m2i`.`stagiaire`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `exam_m2i`.`stagiaire` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `created_at` DATETIME NOT NULL,
  `phone` VARCHAR(255) NULL,
  `birthday` VARCHAR(255) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
