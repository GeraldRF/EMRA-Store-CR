<html>

<head>

  <!--- https://grfixurdivice.000webhostapp.com | < ?php echo $server; ?> -->
  <?php $server = "http://localhost:3000"; ?>

  <link rel="stylesheet" href="<?php echo $server; ?>/recursos/A_CSS/estiloRegistrar.css">

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="<?php echo $server; ?>/recursos/A_JS/impotarMenu.js"></script>
  <script src="<?php echo $server; ?>/recursos/A_JS/verificarRegistro.js"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <meta charset="UTF-8">

  <title>Registrese</title>

</head>

<body>
  <header>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/recursos/menu/menu.php'); ?>
  </header>

  <div text-align="center">

    <form action="<?php echo $server; ?>/recursos/A_PHP/leerNuevoRegistro.php" method="post">

      <h1>LLene los datos solicitados para completar el registro</h1>
      <br>

      <div> <input placeholder="Nombre" class="txtfield" type="text" id="Nombre" onkeyup="verificarNombre()"></div>
      <div id="nombre" class="divS"></div>

      <div><input placeholder="Apellidos" class="txtfield" type="text" id="Apellidos" onkeyup="verificarApellidos();"></div>
      <div id="apellidos" class="divS"></div>

      <div>
        <p>Campo no obligatorio por el momento, puede omitirlo.</p>
      </div>
      <div><textarea placeholder="Direccion" class="textA" type="textarea" id="Direccion" onkeyup="verificarDireccion()"></textarea></div>
      <div id="direccion" class="divS"></div>

      <div><input placeholder="Correo electronico" class="txtfield" type="email" id="Correo" onkeyup="verificarCorreo()"></div>
      <div id="correo" class="divS"></div>

      <p>Evite poner +506 por ejemplo.</p>
      <div><input placeholder="Numero telefonico" class="txtfield" type="text" id="Telefono" onkeyup="verificarTelefono()"></div>
      <div id="telefono" class="divS"></div><br><br>

      <div><input placeholder="Contraseña" type="password" class="txtfield" id="Contra" onkeyup="verificarContra()"></div>
      <div id="contra" class="divS"></div>

      <div><input placeholder="Verifique su contraseña" class="txtfield" type="password" id="Contra2" onkeyup="verificarContra()"></div>
      <div id="cotra2" class="divS"></div><br>

      <input class="btn btn-primary" type="submit" content="Registrar">
      <!--<div name="Boton"></div>-->

    </form><br><br>
    <h3 style="color:green;">¿Ya tiene cuenta?</h3>
    <h3><a href="">Inicie sesion</a></h3>
  </div>

</body>

</html>