DELIMITER //
CREATE PROCEDURE `emra-store-cr`.insertar_usuario (telefono int, pass varchar(30), email varchar(50), f_registro datetime, id_dat_per varchar(6))
  BEGIN
    INSERT INTO `emra-store-cr`.usuarios VALUES(telefono, pass, email, f_registro, null, null, id_dat_per, null, 1);
  END //
DELIMITER ;