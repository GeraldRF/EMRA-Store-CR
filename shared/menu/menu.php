<!--- https://grfixurdivice.000webhostapp.com | <n?php echo $server; ?> -->
<?php include($_SERVER['DOCUMENT_ROOT'] . "/servidor.php");
session_start();
?>

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo $server; ?>/recursos/estilos-css/menu.css">
  <link rel="stylesheet" href="<?php echo $server; ?>/recursos/estilos-css/dropdown-menu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/shared/menu/conf-size.php"); ?>


</head>
<div>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark ">

    <div style="max-width: 25%;">
      <div class="navbar-brand">
        <!--- EMRA-Store-CR-Logo.png -->
        <img id="Logo" src="<?php echo $server; ?>/recursos/imagenes/img-ui/Logo.png" style="margin-right:25px; max-width:240px; max-height:70px;">
      </div>
    </div>

    <div id="menu1" style="min-width: 75%;display: flex;
    justify-content: flex-end;">
      <div style="justify-content: end; display: flex; align-items: center;">

        <div id="CarritoP1"></div>
        <div id="SesionP1"></div>

        <button class="btn-toggler" style="outline: none; " data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <img src="<?php echo $server; ?>/recursos/imagenes/img-ui/menu.png" style="max-width:75px">
        </button>
      </div>
    </div>
    <div style="min-width: 75%; display: flex;">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div style="max-width: max-content; display:contents; justify-items:center">
          <div style="align-self: center;">
            <a id="texto-menu" class="nav-link btn-menu justify-content-center" href="<?php echo $server; ?>">Inicio</a>
          </div>
          <div style="align-self: center;">
            <a id="texto-menu" class="nav-link btn-menu" href="<?php echo $server; ?>/ui/sesion">Destacado</a>
          </div>
          <div class="dropdown show" style="align-self: center;">
            <a class="nav-link btn-menu dropbtn">
              Categorias
              <i class="fa fa-caret-down"></i>
            </a>
            <div class="dropdown-content">
              <a href="<?php echo $server; ?>">Caballeros</a>
              <a href="#">Damas</a>
              <a href="#">Niños</a>
            </div>
          </div>
          <div style="align-self: center;">
            <a id="texto-menu" class="nav-link btn-menu" href=" <?php echo $server; ?>">Tus favoritos</a>
          </div>
        </div>


      </div>

      <div id="opciones" style="display: inline-flex; justify-content:flex-end">
        <div id="CarritoP2"></div>
        <div id="SesionP2"></div>
      </div>
    </div>


  </nav>

  <nav class="navbar navbar-light bg-light row sombra-nav" style="max-height: 100px;">
    <div class="col" style="justify-content: end;">
      <img data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="max-width: 40px; cursor:hand; margin-left: 20px;" src="<?php echo $server; ?>/recursos/imagenes/img-ui/Lupa.png">
    </div>

    <div class="col"></div>

    <div class="col" style="justify-content: end;">
      <div style="align-content: center; align-items: center; text-align:end">
        <!--- <img src="< ?php echo $server; ?>/recursos/imagenes/img_ui/persona.ico" style="vertical-align:middle; max-width:50px;"> -->
        <span style="margin-right: 15px;"><?php include($_SERVER['DOCUMENT_ROOT'] . "/shared/menu/comprobacion-login.php");  ?> </span>

      </div>
    </div>
  </nav>
</div>
<div class="modal" id="staticBackdrop" tabindex="-1">
  <div class="modal-dialog" style="opacity: 90%;">
    <div class="modal-content">

      <div class="modal-body">
        <div style="text-align: end;">
          <button style="margin-bottom: 10px;" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div style="display: flex;">
          <img style="max-width: 40px; max-height:40px; margin-right: 5px;" src="<?php echo $server; ?>/recursos/imagenes/img-ui/Lupa.png">
          <form style="min-width: 90%;" id="barra-busqueda">
            <input type="text" style="min-width: 100%; min-height: 40px; font-size: x-large; border:none; border-bottom:solid 0.5px black; outline: none;" placeholder="¿Qué buscas?">
          </form>

        </div>

      </div>
    </div>
  </div>
</div>