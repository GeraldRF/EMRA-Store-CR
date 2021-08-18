<!--- https://grfixurdivice.000webhostapp.com | <n?php echo $server; ?> -->
<?php $server = "http://localhost:3000/public_html"; ?>

<head>
  <link rel="stylesheet" href="<?php echo $server; ?>/recursos/A_CSS/menu.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

  <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-lsg border-bottom box-shadow mb-3">
    <div class="container" style="min-width:100%">
      <div>
        <img src="<?php echo $server; ?>/recursos/Img_GUI/EMRA Store CR Logo.png" style="margin-right:20px; max-width:220px;">
      </div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse d-sm-inline-flex justify-content-between" id="collapseExample">
        <ul class="navbar-nav flex-grow-1">

          <li class="nav-item">
            <a class="nav-link" id="boton_trasp" href="<?php echo $server; ?>"><strong>Inicio</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="boton_trasp" href="<?php echo $server; ?>/registrarse"><strong>Soy nuevo</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="boton_trasp" href="<?php echo $server; ?>"><strong>Destacado</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="boton_trasp" href="<?php echo $server; ?>"><strong>Carrito</strong></a>
          </li>

        </ul>
        <div>
          <a class="btn" id="ini" style="margin-top: 20px;" href="<?php echo $server; ?>/inicia-sesion"><img src="<?php echo $server; ?>/recursos/Img_GUI/persona.ico" style="vertical-align:middle; max-width:50px;"><strong>Iniciar sesion</strong></a>
        </div>
      </div>
    </div>
  </nav>
