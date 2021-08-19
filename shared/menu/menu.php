<!--- https://grfixurdivice.000webhostapp.com | <n?php echo $server; ?> -->
<?php $server = "http://localhost:3000";
 ?>

<head>
  <link rel="stylesheet" href="<?php echo $server; ?>/recursos/estilos-css/menu.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
 
  window.onresize = resize;

function resize()
{
  var textos = ["Inicio, Destacado, Carrito, Favoritos"];
    if(document.body.clientWidth < 300){
      
      textos.forEach( Element => {
             var div = document.getElementById('texto-'+Element).innerHTML = "<p style=\"display: block;\"><strong>"+Element+"</strong></p>";
        });
    }else {
      textos.forEach( Element => {
             var div = document.getElementById('texto-'+Element).innerHTML = "<p><strong>"+Element+"</strong></p>";
      });
    }
   
}
  
</script>
</head>



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="navbar-brand">
      <!--- EMRA-Store-CR-Logo.png -->
      <img src="<?php echo $server; ?>/recursos/imagenes/img-ui/Logo.png" style="margin-right:90px; max-width:220px; max-height:70px;">
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="min-width:100px;">
      <img src="<?php echo $server; ?>/recursos/imagenes/img-ui/menu.png" style="max-width:60px">
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      
    <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
        <li class="nav-item" style="align-self: center;">
          <a class="nav-link btn-menu" href="<?php echo $server; ?>"><img src="<?php echo $server; ?>/recursos/imagenes/img-ui/inicio.png" style="max-width: 50px;">
           <div id="texto-Inicio"></div>
          </a>
        </li>
        <li class="nav-item" style="align-self: center;">
          <a class="nav-link btn-menu" href="<?php echo $server; ?>"><img src="<?php echo $server; ?>/recursos/imagenes/img-ui/destacados.png" style="max-width: 50px;">
          <div id="texto-Destacado"></div>
          </a>
        </li>
        <li class="nav-item" style="align-self: center;">
          <a class="nav-link btn-menu" href="<?php echo $server; ?>"><img src="<?php echo $server; ?>/recursos/imagenes/img-ui/Carrito.png" style="max-width: 50px;">
          <div id="texto-Carrito"></div>
          </a>
        </li>
        <li class="nav-item" style="align-self: center;">
          <a class="nav-link btn-menu" href="<?php echo $server; ?>"><img src="<?php echo $server; ?>/recursos/imagenes/img-ui/favoritos.png" style="max-width: 50px;">
          <div id="texto-Favoritos"></div>
          </a>
        </li>
      </ul>

    </div>
    <form class="container col-md-auto contenedor-busqueda">
      
        <img src="<?php echo $server; ?>/recursos/imagenes/img-ui/lupa.png" style="max-width: 30px; margin:4px"><input type="text" placeholder="¿Qué buscas?" style="border: none; outline:none">
    </form>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-align: center;"> 
      <div class="flex-grow-1 col-lg-auto row" style="align-content: center; align-items: center; ">
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
