
CREATE TABLE `id17488232_emra_store_cr`.`usuarios` (
  `telefono` INT(8) NOT NULL,
  `password` VARCHAR(30) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `fecha-registro` DATETIME NOT NULL,
  `fin-bloqueo` DATETIME NULL,
  `id-direccion` VARCHAR(6) NULL,
  `id-datos-personales` VARCHAR(6) NOT NULL,
  `id-favoritos` VARCHAR(6) NULL,
  `activo` TINYINT NOT NULL,
  PRIMARY KEY (`telefono`));

  CREATE TABLE `id17488232_emra_store_cr`.`datos-personales` (
  `id` VARCHAR(6) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `p-apellido` VARCHAR(45) NOT NULL,
  `s-apellido` VARCHAR(45) NOT NULL,
  `fecha-nacimiento` DATETIME NOT NULL,
  `sexo` CHAR NULL,
  PRIMARY KEY (`id`));

  CREATE TABLE `id17488232_emra_store_cr`.`favoritos` (
  `id` VARCHAR(6) NOT NULL,
  `id-productos` VARCHAR(50) NULL,
  PRIMARY KEY (`id`));

  CREATE TABLE `id17488232_emra_store_cr`.`destacados` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id-producto` INT NOT NULL,
  PRIMARY KEY (`id`));

  CREATE TABLE `id17488232_emra_store_cr`.`direccion` (
  `id` VARCHAR(6) NOT NULL,
  `provincia` VARCHAR(45) NOT NULL,
  `canton` VARCHAR(45) NOT NULL,
  `distrito` VARCHAR(45) NOT NULL,
  `barrio` VARCHAR(45) NOT NULL,
  `detalles` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`id`));

  CREATE TABLE `id17488232_emra_store_cr`.`productos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `precio` DECIMAL(10) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `categoria` VARCHAR(45) NOT NULL,
  `imagen` VARCHAR(100) NOT NULL,
  `detalles` VARCHAR(100) NOT NULL,
  `stock` INT NOT NULL,
  `cantidad-vendida` INT NULL,
  PRIMARY KEY (`id`));

  CREATE TABLE `id17488232_emra_store_cr`.`carrito` (
  `telefono` INT(8) NOT NULL,
  `id-productos` VARCHAR(60) NOT NULL,
  `cantidades` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`telefono`));

