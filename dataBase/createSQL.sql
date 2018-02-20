-- MySQL Script generated by MySQL Workbench
-- Fri Feb 16 00:54:23 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema lockcateDB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema lockcateDB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `lockcateDB` DEFAULT CHARACTER SET utf8 ;
USE `lockcateDB` ;

-- -----------------------------------------------------
-- Table `lockcateDB`.`sellerType`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lockcateDB`.`sellerType` (
  `idsellerType` INT NOT NULL,
  `typeName` VARCHAR(45) NULL,
  `whereEat` VARCHAR(45) NULL,
  PRIMARY KEY (`idsellerType`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lockcateDB`.`consumerBehavior`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lockcateDB`.`consumerBehavior` (
  `idconsumerBehavior` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `quantity` INT NULL,
  `Timetotake` TIME(6) NULL,
  `like` VARCHAR(45) NULL,
  PRIMARY KEY (`idconsumerBehavior`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lockcateDB`.`shopStyle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lockcateDB`.`shopStyle` (
  `idshopStyle` INT NOT NULL,
  `styleName` VARCHAR(45) NULL,
  `consumerBehavior_idconsumerBehavior` INT NOT NULL,
  PRIMARY KEY (`idshopStyle`),
  INDEX `fk_shopStyle_consumerBehavior1_idx` (`consumerBehavior_idconsumerBehavior` ASC),
  CONSTRAINT `fk_shopStyle_consumerBehavior1`
    FOREIGN KEY (`consumerBehavior_idconsumerBehavior`)
    REFERENCES `lockcateDB`.`consumerBehavior` (`idconsumerBehavior`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lockcateDB`.`location`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lockcateDB`.`location` (
  `idlocation` INT NOT NULL,
  `LocationName` VARCHAR(45) NULL,
  `market_idmarket` INT NOT NULL,
  `locationcol` FLOAT(10,6) NULL,
  `market_idmarket1` INT NOT NULL,
  PRIMARY KEY (`idlocation`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lockcateDB`.`shop`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lockcateDB`.`shop` (
  `idshop` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `shopStyle_idshopStyle` INT NOT NULL,
  `location_idlocation` INT NOT NULL,
  PRIMARY KEY (`idshop`),
  INDEX `fk_shop_shopStyle1_idx` (`shopStyle_idshopStyle` ASC),
  INDEX `fk_shop_location1_idx` (`location_idlocation` ASC),
  CONSTRAINT `fk_shop_shopStyle1`
    FOREIGN KEY (`shopStyle_idshopStyle`)
    REFERENCES `lockcateDB`.`shopStyle` (`idshopStyle`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_shop_location1`
    FOREIGN KEY (`location_idlocation`)
    REFERENCES `lockcateDB`.`location` (`idlocation`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lockcateDB`.`seller`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lockcateDB`.`seller` (
  `idseller` INT NOT NULL,
  `type` INT NULL,
  `bandOnwer` VARCHAR(45) NULL,
  `sellerType_idsellerType` INT NOT NULL,
  `shop_idshop` INT NOT NULL,
  PRIMARY KEY (`idseller`, `sellerType_idsellerType`),
  INDEX `fk_seller_sellerType1_idx` (`sellerType_idsellerType` ASC),
  INDEX `fk_seller_shop1_idx` (`shop_idshop` ASC),
  CONSTRAINT `fk_seller_sellerType1`
    FOREIGN KEY (`sellerType_idsellerType`)
    REFERENCES `lockcateDB`.`sellerType` (`idsellerType`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_seller_shop1`
    FOREIGN KEY (`shop_idshop`)
    REFERENCES `lockcateDB`.`shop` (`idshop`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lockcateDB`.`owner`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lockcateDB`.`owner` (
  `idowner` INT NOT NULL,
  PRIMARY KEY (`idowner`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lockcateDB`.`account`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lockcateDB`.`account` (
  `idaccount` INT NOT NULL,
  `firstName` VARCHAR(45) NULL,
  `lastName` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `phoneNumber` VARCHAR(45) NULL,
  `seller_idseller` INT NULL,
  `owner_idowner` INT NULL,
  INDEX `fk_account_owner1_idx` (`owner_idowner` ASC),
  PRIMARY KEY (`idaccount`),
  CONSTRAINT `fk_account_seller`
    FOREIGN KEY (`seller_idseller`)
    REFERENCES `lockcateDB`.`seller` (`idseller`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_account_owner1`
    FOREIGN KEY (`owner_idowner`)
    REFERENCES `lockcateDB`.`owner` (`idowner`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lockcateDB`.`market`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lockcateDB`.`market` (
  `idmarket` INT NOT NULL,
  `name` VARCHAR(45) NULL,
  `supported` INT NULL,
  `owner_idowner` INT NOT NULL,
  `location_idlocation` INT NOT NULL,
  PRIMARY KEY (`idmarket`),
  INDEX `fk_market_owner1_idx` (`owner_idowner` ASC),
  INDEX `fk_market_location1_idx` (`location_idlocation` ASC),
  CONSTRAINT `fk_market_owner1`
    FOREIGN KEY (`owner_idowner`)
    REFERENCES `lockcateDB`.`owner` (`idowner`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_market_location1`
    FOREIGN KEY (`location_idlocation`)
    REFERENCES `lockcateDB`.`location` (`idlocation`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lockcateDB`.`marketStyle`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lockcateDB`.`marketStyle` (
  `idmarketStyle` INT NOT NULL,
  `styleName` VARCHAR(45) NULL,
  PRIMARY KEY (`idmarketStyle`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lockcateDB`.`marketStyle_has_market`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lockcateDB`.`marketStyle_has_market` (
  `marketStyle_idmarketStyle` INT NOT NULL,
  `market_idmarket` INT NOT NULL,
  PRIMARY KEY (`marketStyle_idmarketStyle`, `market_idmarket`),
  INDEX `fk_marketStyle_has_market_market1_idx` (`market_idmarket` ASC),
  INDEX `fk_marketStyle_has_market_marketStyle1_idx` (`marketStyle_idmarketStyle` ASC),
  CONSTRAINT `fk_marketStyle_has_market_marketStyle1`
    FOREIGN KEY (`marketStyle_idmarketStyle`)
    REFERENCES `lockcateDB`.`marketStyle` (`idmarketStyle`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marketStyle_has_market_market1`
    FOREIGN KEY (`market_idmarket`)
    REFERENCES `lockcateDB`.`market` (`idmarket`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lockcateDB`.`consumerBehavior_has_location`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `lockcateDB`.`consumerBehavior_has_location` (
  `consumerBehavior_idconsumerBehavior` INT NOT NULL,
  `location_idlocation` INT NOT NULL,
  PRIMARY KEY (`consumerBehavior_idconsumerBehavior`, `location_idlocation`),
  INDEX `fk_consumerBehavior_has_location_location1_idx` (`location_idlocation` ASC),
  INDEX `fk_consumerBehavior_has_location_consumerBehavior1_idx` (`consumerBehavior_idconsumerBehavior` ASC),
  CONSTRAINT `fk_consumerBehavior_has_location_consumerBehavior1`
    FOREIGN KEY (`consumerBehavior_idconsumerBehavior`)
    REFERENCES `lockcateDB`.`consumerBehavior` (`idconsumerBehavior`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_consumerBehavior_has_location_location1`
    FOREIGN KEY (`location_idlocation`)
    REFERENCES `lockcateDB`.`location` (`idlocation`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;