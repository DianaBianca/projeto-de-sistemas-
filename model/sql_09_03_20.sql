SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `mydb` ;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
SHOW WARNINGS;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `Usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Usuario` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `Usuario` (
  `Prontuario` INT(6) NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(45) NOT NULL ,
  `Cpf` VARCHAR(11) NOT NULL ,
  `Rg` VARCHAR(9) NOT NULL ,
  `Senha` VARCHAR(1024) NOT NULL ,
  `email` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`Prontuario`) )
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `Cpf_UNIQUE` ON `Usuario` (`Cpf` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `Cat`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Cat` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `Cat` (
  `idCat` INT NOT NULL AUTO_INCREMENT ,
  `tipo` VARCHAR(3) NOT NULL ,
  PRIMARY KEY (`idCat`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `Autor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Autor` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `Autor` (
  `idAutor` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  `Cat_idCat` INT NOT NULL ,
  PRIMARY KEY (`idAutor`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `Livro`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Livro` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `Livro` (
  `idLivro` INT(4) NOT NULL AUTO_INCREMENT ,
  `Nome` VARCHAR(45) NOT NULL ,
  `Cat_idCat` INT NOT NULL ,
  `Autor_idAutor` INT NOT NULL ,
  `Autor_nome` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idLivro`) )
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `idLivro_UNIQUE` ON `Livro` (`idLivro` ASC) ;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `Emprestimo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Emprestimo` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `Emprestimo` (
  `idEmprestimo` INT NOT NULL AUTO_INCREMENT ,
  `Data` DATE NOT NULL ,
  `Usuario_Prontuario` INT(6) NOT NULL ,
  `Livro_idLivro` INT(4) NOT NULL ,
  PRIMARY KEY (`idEmprestimo`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `Agendar`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Agendar` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `Agendar` (
  `idAgendar` INT NOT NULL AUTO_INCREMENT ,
  `Data` DATE NOT NULL ,
  `Usuario_Prontuario` INT(6) NOT NULL ,
  `Livro_idLivro` INT(4) NOT NULL ,
  PRIMARY KEY (`idAgendar`) )
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `Comentario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Comentario` ;

SHOW WARNINGS;
CREATE  TABLE IF NOT EXISTS `Comentario` (
  `idComentario` INT NOT NULL AUTO_INCREMENT ,
  `Comentario` VARCHAR(1000) NOT NULL ,
  `Usuario_Prontuario` INT(6) NOT NULL ,
  `Livro_idLivro` INT(4) NOT NULL ,
  PRIMARY KEY (`idComentario`) )
ENGINE = InnoDB;

SHOW WARNINGS;
USE `mydb` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
