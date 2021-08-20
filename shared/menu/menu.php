<!--- https://grfixurdivice.000webhostapp.com | <n?php echo $server; ?> -->
<?php $server = "http://localhost:3000";
?>

<head>
  <link rel="stylesheet" href="<?php echo $server; ?>/recursos/estilos-css/menu.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    window.onresize = resize;
    window.onload = resize;

    function resize() {
      var textos = ["Inicio", "Destacados", "Carrito", "Favoritos"];
      if (document.body.clientWidth < 991) {

        textos.forEach(Element => {
          var div = document.getElementById('texto-' + Element).innerHTML = "<div><img src='<?php $server ?>/recursos/imagenes/img-ui/" + Element + ".png' style='max-width: 50px;'></div>" +
            "<div><p style='display:block'><strong>" + Element + "</strong></p></div>";
        });

      } else {

        textos.forEach(Element => {
          var div = document.getElementById('texto-' + Element).innerHTML = "<div><img src='<?php $server ?>/recursos/imagenes/img-ui/" + Element + ".png' style='max-width: 50px;'></div>" +
            "<div><p><strong>" + Element + "</strong></p></div>";
        });

      }

    }
  </script>

</head>

<nav class="navbar navbar-expand-lg navbar-light">

  <div class="navbar-brand">
    <!--- EMRA-Store-CR-Logo.png -->
    <img src="<?php echo $server; ?>/recursos/imagenes/img-ui/Logo.png" style="margin-right:25px; max-width:220px; max-height:70px;">
  </div>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="min-width:100px;">
    <img src="<?php echo $server; ?>/recursos/imagenes/img-ui/menu.png" style="max-width:60px">
  </button>
  <div class="collapse navbar-collapse row" id="navbarSupportedContent">
    <div class="row" style="max-width: max-content;">
      <div class="col" style="align-self: center;">
        <a id="texto-Inicio" class="nav-link btn-menu justify-content-center" href="<?php echo $server; ?>"> </a>
      </div>
      <div class="col" style="align-self: center;">
        <a id="texto-Destacados" class="nav-link btn-menu" href="<?php echo $server; ?>"> </a>
      </div>
      <div class="col" style="align-self: center;">
        <a id="texto-Carrito" class="nav-link btn-menu" href="<?php echo $server; ?>"> </a>
      </div>
      <div class="col" style="align-self: center;">
        <a id="texto-Favoritos" class="nav-link btn-menu justify-content-center"" href=" <?php echo $server; ?>"> </a>
      </div>
    </div>

  </div>
</nav>

<nav class="navbar navbar-light bg-light" style="max-height: 60px; display: flex;
    flex-direction: column;">

  <div class="navbar-nav" style="min-width: 60%; " align-self:center; margin-left:20px">
    <form class="nav-item row " >
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" style="max-height: 40px"><img src="<?php echo $server; ?>/recursos/imagenes/img-ui/lupa.png" style="max-width: 30px; margin:4px"></span>
        </div>
        <input type="text" class="form-control" placeholder="¿Qué buscas?" aria-label="Search" style="max-height:40px;">
      </div>
    </form>
  </div>

  <div class="navbar-nav row" style="align-content: center; align-items: center; ">
    <div class="nav-item col-md-auto">
      <!--- <img src="< ?php echo $server; ?>/recursos/imagenes/img_ui/persona.ico" style="vertical-align:middle; max-width:50px;"> -->
      <a class="btn btn-iniciar-sesion " href="<?php echo $server; ?>/ui/inicia-sesion"><strong>Mi cuenta</strong></a>
    </div>

  </div>
</nav>