 <html>

 <head>
   <!--- https://grfixurdivice.000webhostapp.com -->
   <?php $server = "http://localhost:3000"; ?>
   <link rel="stylesheet" href="<?php echo $server; ?>/recursos/estilos/sesion.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

   <?php include($_SERVER['DOCUMENT_ROOT'] . "/shared/menu/conf-size.php"); ?>

   <title>Ingresar a cuenta</title>


 </head>

 <body>
   <header>
     <?php include($_SERVER['DOCUMENT_ROOT'] . '/shared/menu/menu.php'); ?>
   </header>
   <div class="row" style="justify-content: center; min-width:100%;">

     <div class="col-5">
       <div>Iniciar sesion</div>
     </div>
     <div><hr class="hrvertical"></div>
     <div class="col-5">
       <div>¿No tiene cuenta? Registrese</div>
     </div>

   </div>

   <script>
     function iniciarSesion() {

       window.location = "";

     } //Fin function
     function registrar() {
       window.location = "";
     }

     function subirArchivo() {

       window.location = "";

     } //Fin function
   </script>


   <script>
     function verificar() {
       var x = document.getElementById("user");
       var resul = "";

       if (x.value !== "") {

         if (isNaN(x.value)) {
           resul = "Entrada valida solo para numeros.";
         } //Fin if

       } //Fin if vacio

       document.getElementById("resultado").innerHTML = resul;
     } //Fin verificar
   </script>
 </body>

 </html>