<?php include($_SERVER['DOCUMENT_ROOT'] . '/shared/menu/menu.php'); ?>

<html>

<head>
  <script src="<?php echo $server; ?>/ui/sesion/validacion.js"></script>
  <link rel="stylesheet" href="/recursos/estilos-css/sesion.css">
  <title>Tu sesión</title>
</head>

<body>
  <div style="display:flex; justify-content: center;">
    <div id="contenedor" class="sombra-div">

      <div class="contenedor-form">
        <h5 style="text-align: center;">
          Iniciar sesion
        </h5>

        <div>
          <?php
          if (isset($_GET['sesion'])) {
            if ($_GET['sesion'] == "no-encontrada") {
              echo "<p><span style='color:red; font-size:large;'>*</span> La cuenta no existe</p>";
            } else if ($_GET['sesion'] == "incorrecta") {
              echo "<p><span style='color:red; font-size:large;'>*</span>Contraseña incorrecta</p>";
            }
          }
          ?>
        </div>

        <div>
          <form action="/controllers/sesion/iniciar-sesion.php" method="post" style="display: flex; flex-direction: column; align-items: center;">
            <input type="text" id="user" name="user" onkeyup="verificar()" placeholder="Numero telefonico">
            <div id="resultado"></div>
            <input type="password" id="pass" name="pass" placeholder="Contraseña">
            <input class="btn-iniciar" type="submit" value="Iniciar sesión">
          </form>
        </div>
      </div>

      <div class="contenedor-form">
        <h5 style="text-align: center;">¿No tiene cuenta? Registrese</h5>
        <div>
          <form action="<?php echo $server; ?>/controllers/sesion/iniciar-sesion.php" method="post" style="display: flex; flex-direction: column; align-items: center;">
            <input type="text" id="user" name="user" onkeyup="verificar()" placeholder="Numero telefonico">
            <div id="resultado"></div>
            <input type="text" id="correo" name="correo" onkeyup="verificar()" placeholder="Correo electrónico">
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
            <input type="text" id="p_apellido" name="p_apellido" placeholder="Primer apellido">
            <input type="text" id="s_apellido" name="s_apellido" placeholder="Segundo apellido">
            <div style="display:flex; flex-direction: column;">
              Fecha de nacimiento:
              <input type="date" id="fechaNacimiento">
            </div>
            <input type="password" id="pass" name="pass" placeholder="Contraseña">
            <input type="password" id="passConf" name="passConf" placeholder="Confirme su contraseña">
            <input class="btn-registrar" type="submit" value="Registrarse">
          </form>
        </div>
      </div>

    </div>

  </div>

</body>

</html>