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

      var carro = "<a class='carrito' href='<?php echo $server; ?>''><img style='max-width: 70px;' src='<?php echo $server; ?>/recursos/imagenes/img-ui/Carrito.png'></a>";

      if (document.body.clientWidth < 991) {

        document.getElementById('Logo').style.maxWidth="400px";
        document.getElementById('Logo').style.maxHeight="100px";

       var menus = document.getElementsByClassName('btn-menu');
       for(var i=0; i<4; i++){
         menus[i].style.marginTop = "15px";
         menus[i].style.fontSize = "x-large"
       }

        var div = document.getElementById('Carrito').innerHTML = "<div class='col' style='align-self: center; position: fixed; top:30px; left: 60%;'>" + carro + "</div>";

      } else {
        document.getElementById('Logo').style.maxWidth="240px";
        document.getElementById('Logo').style.maxHeight="70px";
     
        var menus = document.getElementsByClassName('btn-menu');

       for(var i=0; i<4; i++){
         menus[i].style.marginTop = "0px";
         menus[i].style.fontSize = "large"
       }

        var div = document.getElementById('Carrito').innerHTML = "<div class='col' style='align-self: center; position: fixed; top:17px; left: 89%;''>" + carro + "</div>";

      }

    }
  </script>

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

    <div id="Carrito" style="justify-content: end;"></div>

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
  <div style="min-width: 30%; align-self:center; margin-left:20px">
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
      <a class="btn btn-iniciar-sesion " style="align-items: center;" title="Carrito" href="<?php echo $server; ?>/ui/inicia-sesion"><img style="max-width: 55px;" src="<?php $server ?>/recursos/imagenes/img-ui/persona.png"><strong>Tu cuenta</strong></a>
    </div>
  </div>
</nav>