<!--- https://grfixurdivice.000webhostapp.com | <n?php echo $server; ?> -->
<?php $server = "http://localhost:3000"; ?>

<head>
  <link rel="stylesheet" href="<?php echo $server; ?>/recursos/estilos-css/menu.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-lsg border-bottom box-shadow mb-3">
  <div class="container" style="min-width:100%">
    <div>
      <img src="<?php echo $server; ?>/recursos/imagenes/img_ui/EMRA Store CR Logo.png" style="margin-right:20px; max-width:220px; max-height:70px;">
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between" id="collapseExample">
      <ul class="navbar-nav flex-grow-1">

        <li class="nav-item">
          <a class="nav-link btn-menu" href="<?php echo $server; ?>"><strong>Inicio</strong></a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-menu" href="<?php echo $server; ?>"><strong>Destacado</strong></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link btn-menu" href="<?php echo $server; ?>"><strong>Carrito</strong></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link btn-menu" href="<?php echo $server; ?>"><strong>Favoritos</strong></a>
        </li>

      </ul>

      <div class="row" style="align-content: center; align-items: center;">
        <div class="col-md-auto">
          <!--- <img src="< ?php echo $server; ?>/recursos/imagenes/img_ui/persona.ico" style="vertical-align:middle; max-width:50px;"> -->
          <a class="btn btn-iniciar-sesion " href="<?php echo $server; ?>/ui/inicia-sesion"><strong>Iniciar sesion</strong></a>
        </div>
        <div class="col-md-auto">
          <a class="btn btn-registrar " href="<?php echo $server; ?>/ui/registrarse"><strong>Registrate</strong></a>
        </div>
      </div>

    </div>
  </div>
</nav>