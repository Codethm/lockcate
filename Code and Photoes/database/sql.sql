-- MySQL Script generated by MySQL Workbench
-- Tue Mar 27 15:30:28 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`seller`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`seller` ;

CREATE TABLE IF NOT EXISTS `mydb`.`seller` (
  `idseller` INT NOT NULL AUTO_INCREMENT,
  `ชื่อ` VARCHAR(45) NULL,
  `เบอร์ติดต่อ` VARCHAR(45) NULL,
  `ที่อยู่` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  PRIMARY KEY (`idseller`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`bank account`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`bank account` ;

CREATE TABLE IF NOT EXISTS `mydb`.`bank account` (
  `idbank account` INT NOT NULL,
  `seller_idseller` INT NOT NULL,
  `ชื่อธนาคาร` VARCHAR(45) NULL,
  PRIMARY KEY (`idbank account`),
  INDEX `fk_bank account_seller_idx` (`seller_idseller` ASC),
  CONSTRAINT `fk_bank account_seller`
    FOREIGN KEY (`seller_idseller`)
    REFERENCES `mydb`.`seller` (`idseller`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`receipt`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`receipt` ;

CREATE TABLE IF NOT EXISTS `mydb`.`receipt` (
  `idreceipt` INT NOT NULL,
  `ข้อมูลการจองพื้นที่` VARCHAR(45) NULL,
  `เวลา` VARCHAR(45) NULL,
  `จำนวนเงิน` VARCHAR(45) NULL,
  `seller_idseller` INT NOT NULL,
  PRIMARY KEY (`idreceipt`),
  INDEX `fk_receipt_seller1_idx` (`seller_idseller` ASC),
  CONSTRAINT `fk_receipt_seller1`
    FOREIGN KEY (`seller_idseller`)
    REFERENCES `mydb`.`seller` (`idseller`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`event`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`event` ;

CREATE TABLE IF NOT EXISTS `mydb`.`event` (
  `idevent` INT NOT NULL,
  `ชื่องาน Event` VARCHAR(45) NULL,
  `คำอธิบาย` VARCHAR(45) NULL,
  `ประเภทงานEvent` VARCHAR(45) NULL,
  `เวลา` VARCHAR(45) NULL,
  `ที่ตั้ง` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `เบอร์ติดต่อ` VARCHAR(45) NULL,
  `Page` VARCHAR(45) NULL,
  `วันที่` VARCHAR(45) NULL,
  PRIMARY KEY (`idevent`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`market`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`market` ;

CREATE TABLE IF NOT EXISTS `mydb`.`market` (
  `idmarket` INT NOT NULL,
  `ชื่อเจ้าของตลาด` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NULL,
  `เบอร์ติดต่อ` VARCHAR(45) NULL,
  `Page` VARCHAR(45) NULL,
  `ที่อยู่` VARCHAR(45) NULL,
  `ชื่อตลาด` VARCHAR(45) NULL,
  PRIMARY KEY (`idmarket`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`store`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`store` ;

CREATE TABLE IF NOT EXISTS `mydb`.`store` (
  `idstore` INT NOT NULL,
  `Email` VARCHAR(45) NULL,
  `เบอร์ติดต่อ` VARCHAR(45) NULL,
  `ประเภทสินค้า` VARCHAR(45) NULL,
  `seller_idseller` INT NOT NULL,
  `event_idevent` INT NOT NULL,
  `market_idmarket` INT NOT NULL,
  `ชื่อเจ้าของร้าน` VARCHAR(45) NULL,
  `สินค้า` VARCHAR(45) NULL,
  `คำอธิบายสินค้า` VARCHAR(45) NULL,
  `ชื่อร้าน` VARCHAR(45) NULL,
  PRIMARY KEY (`idstore`),
  INDEX `fk_store_seller1_idx` (`seller_idseller` ASC),
  INDEX `fk_store_event1_idx` (`event_idevent` ASC),
  INDEX `fk_store_market1_idx` (`market_idmarket` ASC),
  CONSTRAINT `fk_store_seller1`
    FOREIGN KEY (`seller_idseller`)
    REFERENCES `mydb`.`seller` (`idseller`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_store_event1`
    FOREIGN KEY (`event_idevent`)
    REFERENCES `mydb`.`event` (`idevent`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_store_market1`
    FOREIGN KEY (`market_idmarket`)
    REFERENCES `mydb`.`market` (`idmarket`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`market area`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`market area` ;

CREATE TABLE IF NOT EXISTS `mydb`.`market area` (
  `idmarket area` INT NOT NULL,
  `ขนาดพื้นที่ตลาด` VARCHAR(45) NULL,
  `ราคาพื้นที่` VARCHAR(45) NULL,
  `รูปภาพ` VARCHAR(45) NULL,
  `market_idmarket` INT NOT NULL,
  `สถานะ` VARCHAR(45) NULL,
  PRIMARY KEY (`idmarket area`),
  INDEX `fk_market area_market1_idx` (`market_idmarket` ASC),
  CONSTRAINT `fk_market area_market1`
    FOREIGN KEY (`market_idmarket`)
    REFERENCES `mydb`.`market` (`idmarket`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`event area`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `mydb`.`event area` ;

CREATE TABLE IF NOT EXISTS `mydb`.`event area` (
  `idevent area` INT NOT NULL,
  `ขนาดพื้นที่งานEvent` VARCHAR(45) NULL,
  `event_idevent` INT NOT NULL,
  `ราคาพื้นที่` VARCHAR(45) NULL,
  `รูปภาพ` VARCHAR(45) NULL,
  `สถานะ` VARCHAR(45) NULL,
  PRIMARY KEY (`idevent area`),
  INDEX `fk_event area_event1_idx` (`event_idevent` ASC),
  CONSTRAINT `fk_event area_event1`
    FOREIGN KEY (`event_idevent`)
    REFERENCES `mydb`.`event` (`idevent`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
