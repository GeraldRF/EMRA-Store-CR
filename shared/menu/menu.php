<!--- https://grfixurdivice.000webhostapp.com | <n?php echo $server; ?> -->
<?php $server = "http://localhost:3000";
?>

<head>
  <link rel="stylesheet" href="<?php echo $server; ?>/recursos/estilos-css/menu.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <?php include($_SERVER['DOCUMENT_ROOT']."/shared/menu/conf-size.php"); ?>

</head>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">

  <div class="navbar-brand">
    <!--- EMRA-Store-CR-Logo.png -->
    <img id="Logo" src="<?php echo $server; ?>/recursos/imagenes/img-ui/Logo.png" style="margin-right:25px; max-width:240px; max-height:70px;">
  </div>
  <div style="justify-content: end;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="min-width:100px;">
      <img src="<?php echo $server; ?>/recursos/imagenes/img-ui/menu.png" style="max-width:60px">
    </button>

    <div id="Carrito"></div>
    <div id="Sesion"></div>

  </div>
  <div class="collapse navbar-collapse row" id="navbarSupportedContent">
    <div class="row" style="max-width: max-content;">
      <div class="col col-lg-auto" style="align-self: center;">
        <a id="texto-menu" class="nav-link btn-menu justify-content-center" href="<?php echo $server; ?>"><strong>Inicio</strong></a>
      </div>
      <div class="col col-lg-auto" style="align-self: center;">
        <a id="texto-menu" class="nav-link btn-menu" href="<?php echo $server; ?>"><strong>Destacado</strong></a>
      </div>
      <div class="col col-lg-auto" style="align-self: center;">
        <a id="texto-menu" class="nav-link btn-menu" href="<?php echo $server; ?>"><strong>Categorias</strong></a>
      </div>
      <div class="col col-lg-auto" style="align-self: center;">
        <a id="texto-menu" class="nav-link btn-menu" href=" <?php echo $server; ?>"><strong>Tus favoritos</strong> </a>
      </div>
    </div>

  </div>

</nav>

<nav class="navbar navbar-light bg-light " style="max-height: 100px;">
  <div id="barra-busqueda" style="min-width: 45%; align-self:center; margin-left:20px;">
    <div class="row" id="busca">
      <form class="nav-item row ">
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text" style="max-height: 40px"><img src="<?php echo $server; ?>/recursos/imagenes/img-ui/lupa.png" style="max-width: 30px; margin:4px"></span>
          </div>
          <input type="text" class="form-control" placeholder="¿Qué buscas?" aria-label="Search" style="max-height:40px;">
        </div>
      </form>
    </div>
  </div>
  <div style="justify-content: end;">
    <div style="align-content: center; align-items: center; ">
      <!--- <img src="< ?php echo $server; ?>/recursos/imagenes/img_ui/persona.ico" style="vertical-align:middle; max-width:50px;"> -->
      <span><?php $_SERVER['PHP_AUTH_USER']="Gerald"; echo $_SERVER['PHP_AUTH_USER'].""; ?></span>
    </div>
  </div>
</nav>