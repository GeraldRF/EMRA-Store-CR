<!--- https://grfixurdivice.000webhostapp.com | <n?php echo $server; ?> -->
<?php $server = "http://localhost:3000";
?>

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo $server; ?>/recursos/estilos-css/menu.css">
  <link rel="stylesheet" href="<?php echo $server; ?>/recursos/estilos-css/dropdown-menu.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

  <meta charset="UTF-8">

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/shared/menu/conf-size.php"); ?>

</head>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">

  <div class="navbar-brand">
    <!--- EMRA-Store-CR-Logo.png -->
    <img id="Logo" src="<?php echo $server; ?>/recursos/imagenes/img-ui/Logo.png" style="margin-right:25px; max-width:240px; max-height:70px;">
  </div>
  <div style="justify-content: end;">
    <button style="outline: none; " class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <img src="<?php echo $server; ?>/recursos/imagenes/img-ui/menu.png" style="max-width:75px">
    </button>

    <div id="Carrito"></div>
    <div id="Sesion"></div>

  </div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div style="max-width: max-content; display:flex">
      <div style="align-self: center;">
        <a id="texto-menu" class="nav-link btn-menu justify-content-center" href="<?php echo $server; ?>"><strong>Inicio</strong></a>
      </div>
      <div style="align-self: center;">
        <a id="texto-menu" class="nav-link btn-menu" href="<?php echo $server; ?>"><strong>Destacado</strong></a>
      </div>
      <div class="dropdown show" style="align-self: center;">
        <a class="nav-link btn-menu dropbtn">
          <strong>Categorias</strong>
          <i class="fa fa-caret-down"></i>
        </a>
        <div class="dropdown-content">
          <a href="<?php echo $server; ?>">Caballeros</a>
          <a href="#">Damas</a>
          <a href="#">Niños</a>
        </div>
      </div>
      <div style="align-self: center;">
        <a id="texto-menu" class="nav-link btn-menu" href=" <?php echo $server; ?>"><strong>Tus favoritos</strong> </a>
      </div>
    </div>

  </div>

</nav>

<nav class="navbar navbar-light bg-light row" style="max-height: 100px;">
  <div class="col" style="justify-content: end;">
    <img data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="max-width: 40px; cursor:hand; margin-left: 20px;" src="<?php echo $server; ?>/recursos/imagenes/img-ui/Lupa.png">
  </div>

  <div class="col"></div>

  <div class="col" style="justify-content: end;">
    <div style="align-content: center; align-items: center; text-align:end">
      <!--- <img src="< ?php echo $server; ?>/recursos/imagenes/img_ui/persona.ico" style="vertical-align:middle; max-width:50px;"> -->
      <span style="margin-right: 15px;"><?php $_SERVER['PHP_AUTH_USER'] = "Gerald";
                                        echo "Bienvenido " . $_SERVER['PHP_AUTH_USER'] . " !"; ?></span>
    </div>
  </div>
</nav>

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