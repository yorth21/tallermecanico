-- MySQL Script generated by MySQL Workbench
-- Tue Oct  4 23:09:17 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

-- -----------------------------------------------------
-- Schema tallermecanicodb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tallermecanicodb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tallermecanicodb` DEFAULT CHARACTER SET utf8mb4 ;
USE `tallermecanicodb` ;

-- -----------------------------------------------------
-- Table `tallermecanicodb`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`usuarios` (
  `cedula` VARCHAR(20) NOT NULL,
  `nombres` VARCHAR(50) NOT NULL,
  `apellidos` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(50) NOT NULL,
  `telefono` VARCHAR(10) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `idmunicipio` CHAR(5) NOT NULL,
  `fechanac` DATE NOT NULL,
  `usuario` VARCHAR(15) NOT NULL,
  `clave` VARCHAR(16) NOT NULL,
  `estado` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`cedula`),
  UNIQUE INDEX `cedula_UNIQUE` (`cedula` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`roles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rol` VARCHAR(15) NOT NULL,
  `estado` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`detallesrol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`detallesrol` (
  `cedula` VARCHAR(20) NOT NULL,
  `rol` INT NOT NULL,
  PRIMARY KEY (`cedula`, `rol`),
  INDEX `fk_detallesrol_usuarios_idx` (`cedula` ASC) ,
  INDEX `fk_detallesrol_roles1_idx` (`rol` ASC) ,
  CONSTRAINT `fk_detallesrol_usuarios`
    FOREIGN KEY (`cedula`)
    REFERENCES `tallermecanicodb`.`usuarios` (`cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_detallesrol_roles1`
    FOREIGN KEY (`rol`)
    REFERENCES `tallermecanicodb`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`tiposvehiculos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`tiposvehiculos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `tipovehiculo` VARCHAR(20) NOT NULL,
  `estado` INT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`especialidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`especialidades` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `especialidad` VARCHAR(20) NOT NULL,
  `tiposvehiculo` INT NOT NULL,
  `estado` INT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`, `tiposvehiculo`),
  INDEX `fk_especialidades_tiposvehiculos1_idx` (`tiposvehiculo` ASC) ,
  CONSTRAINT `fk_especialidades_tiposvehiculos1`
    FOREIGN KEY (`tiposvehiculo`)
    REFERENCES `tallermecanicodb`.`tiposvehiculos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`empleados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`empleados` (
  `cedula` VARCHAR(20) NOT NULL,
  `fechaingreso` DATE NOT NULL,
  `sueldo` INT NOT NULL DEFAULT 0,
  `especialidad` INT(2) NOT NULL,
  INDEX `fk_empleado_usuarios1_idx` (`cedula` ASC) ,
  PRIMARY KEY (`cedula`, `especialidad`),
  INDEX `fk_empleados_especialidades1_idx` (`especialidad` ASC) ,
  CONSTRAINT `fk_empleado_usuarios1`
    FOREIGN KEY (`cedula`)
    REFERENCES `tallermecanicodb`.`usuarios` (`cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_empleados_especialidades1`
    FOREIGN KEY (`especialidad`)
    REFERENCES `tallermecanicodb`.`especialidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`clientes` (
  `cedula` VARCHAR(20) NOT NULL,
  `nombres` VARCHAR(50) NOT NULL,
  `apellidos` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(50) NOT NULL,
  `telefono` VARCHAR(10) NOT NULL,
  `email` VARCHAR(50) NULL,
  `idmunicipio` CHAR(5) NOT NULL,
  `fechanac` DATE NOT NULL,
  `estado` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`cedula`),
  UNIQUE INDEX `cedula_UNIQUE` (`cedula` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`vehiculos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`vehiculos` (
  `placa` VARCHAR(7) NOT NULL,
  `modelo` VARCHAR(20) NOT NULL,
  `color` VARCHAR(20) NOT NULL,
  `marca` VARCHAR(45) NOT NULL,
  `observacion` TEXT(1000) NULL,
  `estado` INT(1) NULL DEFAULT 1,
  `propierario` VARCHAR(20) NOT NULL,
  `tipovehiculo` INT NOT NULL,
  PRIMARY KEY (`placa`),
  INDEX `fk_vehiculos_clientes1_idx` (`propierario` ASC) ,
  INDEX `fk_vehiculos_tiposvehiculos1_idx` (`tipovehiculo` ASC) ,
  CONSTRAINT `fk_vehiculos_clientes1`
    FOREIGN KEY (`propierario`)
    REFERENCES `tallermecanicodb`.`clientes` (`cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vehiculos_tiposvehiculos1`
    FOREIGN KEY (`tipovehiculo`)
    REFERENCES `tallermecanicodb`.`tiposvehiculos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`cat_producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`cat_producto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `categoria` VARCHAR(20) NOT NULL,
  `estado` INT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`productos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`productos` (
  `codigo` CHAR(5) NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `categoria` INT NOT NULL,
  `fechaingreso` DATE NOT NULL,
  `preciocompra` INT NOT NULL,
  `precioventa` INT NOT NULL,
  `stock` INT NOT NULL DEFAULT 0,
  `estado` INT(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`codigo`),
  INDEX `fk_productos_cat_producto1_idx` (`categoria` ASC) ,
  CONSTRAINT `fk_productos_cat_producto1`
    FOREIGN KEY (`categoria`)
    REFERENCES `tallermecanicodb`.`cat_producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`tipostrabajos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`tipostrabajos` (
  `id` INT NOT NULL,
  `tipotrabajo` VARCHAR(20) NOT NULL,
  `estado` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`planillaingresos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`planillaingresos` (
  `id` INT NOT NULL,
  `cliente` VARCHAR(20) NOT NULL,
  `fechaingreso` DATETIME NOT NULL,
  `fechaentrega` DATETIME NULL,
  `placavehiculo` VARCHAR(7) NOT NULL,
  `descripciontrabajo` VARCHAR(45) NOT NULL,
  `observacion` TEXT(1000) NULL,
  `empleado` VARCHAR(20) NOT NULL,
  `tipotrabajo` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_plantillaingresos_clientes1_idx` (`cliente` ASC) ,
  INDEX `fk_planillaingresos_empleados1_idx` (`empleado` ASC) ,
  INDEX `fk_planillaingresos_tipostrabajos1_idx` (`tipotrabajo` ASC) ,
  CONSTRAINT `fk_plantillaingresos_clientes1`
    FOREIGN KEY (`cliente`)
    REFERENCES `tallermecanicodb`.`clientes` (`cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_planillaingresos_empleados1`
    FOREIGN KEY (`empleado`)
    REFERENCES `tallermecanicodb`.`empleados` (`cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_planillaingresos_tipostrabajos1`
    FOREIGN KEY (`tipotrabajo`)
    REFERENCES `tallermecanicodb`.`tipostrabajos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`formaspago`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`formaspago` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `formapago` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`facturas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`facturas` (
  `numfactura` INT NOT NULL,
  `fecha` DATETIME NOT NULL,
  `cajero` VARCHAR(20) NOT NULL,
  `planilla` INT NOT NULL,
  `totalapagar` FLOAT(11,2) NOT NULL,
  `descuentos` FLOAT(11,2) NOT NULL,
  `observacion` TEXT(1000) NULL,
  `formadepago` INT NOT NULL,
  `estado` INT NOT NULL DEFAULT 0,
  PRIMARY KEY (`numfactura`),
  INDEX `fk_facturas_usuarios1_idx` (`cajero` ASC) ,
  INDEX `fk_facturas_planillaingresos1_idx` (`planilla` ASC) ,
  INDEX `fk_facturas_formaspago1_idx` (`formadepago` ASC) ,
  CONSTRAINT `fk_facturas_usuarios1`
    FOREIGN KEY (`cajero`)
    REFERENCES `tallermecanicodb`.`usuarios` (`cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_facturas_planillaingresos1`
    FOREIGN KEY (`planilla`)
    REFERENCES `tallermecanicodb`.`planillaingresos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_facturas_formaspago1`
    FOREIGN KEY (`formadepago`)
    REFERENCES `tallermecanicodb`.`formaspago` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`facturacionproductos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`facturacionproductos` (
  `codigoproducto` CHAR(5) NOT NULL,
  `numfactura` INT NOT NULL,
  `cantidad` INT NOT NULL,
  `estado` INT NOT NULL DEFAULT 1,
  PRIMARY KEY (`codigoproducto`, `numfactura`),
  INDEX `fk_cantidadproductos_productos1_idx` (`codigoproducto` ASC) ,
  INDEX `fk_facturacionproductos_facturas1_idx` (`numfactura` ASC) ,
  CONSTRAINT `fk_cantidadproductos_productos1`
    FOREIGN KEY (`codigoproducto`)
    REFERENCES `tallermecanicodb`.`productos` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_facturacionproductos_facturas1`
    FOREIGN KEY (`numfactura`)
    REFERENCES `tallermecanicodb`.`facturas` (`numfactura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`facturacioncredito`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`facturacioncredito` (
  `numfactura` INT NOT NULL,
  `tiempofinanciacion` INT NOT NULL,
  `tasainteres` INT NOT NULL,
  `interes` FLOAT(3,2) NOT NULL,
  PRIMARY KEY (`numfactura`),
  INDEX `fk_facturacioncredito_facturas1_idx` (`numfactura` ASC) ,
  CONSTRAINT `fk_facturacioncredito_facturas1`
    FOREIGN KEY (`numfactura`)
    REFERENCES `tallermecanicodb`.`facturas` (`numfactura`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`departamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`departamentos` (
  `iddepto` CHAR(2) NOT NULL,
  `departamento` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`iddepto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`municipios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`municipios` (
  `idmunicipio` CHAR(5) NOT NULL,
  `municipio` VARCHAR(30) NOT NULL,
  `iddepto` CHAR(2) NOT NULL,
  PRIMARY KEY (`idmunicipio`, `iddepto`),
  INDEX `fk_municipios_departamentos1_idx` (`iddepto` ASC) ,
  CONSTRAINT `fk_municipios_departamentos1`
    FOREIGN KEY (`iddepto`)
    REFERENCES `tallermecanicodb`.`departamentos` (`iddepto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`sorteos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`sorteos` (
  `idsorteos` INT NOT NULL,
  `clientes_cedula` VARCHAR(20) NOT NULL,
  `premio` VARCHAR(45) NULL,
  PRIMARY KEY (`idsorteos`, `clientes_cedula`),
  INDEX `fk_sorteos_clientes1_idx` (`clientes_cedula` ASC) ,
  UNIQUE INDEX `clientes_cedula_UNIQUE` (`clientes_cedula` ASC) ,
  CONSTRAINT `fk_sorteos_clientes1`
    FOREIGN KEY (`clientes_cedula`)
    REFERENCES `tallermecanicodb`.`clientes` (`cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tallermecanicodb`.`descuentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tallermecanicodb`.`descuentos` (
  `iddescuentos` INT NOT NULL,
  `clientes_cedula` VARCHAR(20) NOT NULL,
  `fecha` DATE NULL,
  PRIMARY KEY (`iddescuentos`),
  INDEX `fk_descuentos_clientes1_idx` (`clientes_cedula` ASC) ,
  CONSTRAINT `fk_descuentos_clientes1`
    FOREIGN KEY (`clientes_cedula`)
    REFERENCES `tallermecanicodb`.`clientes` (`cedula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


