 <html>

 <head>
   <!--- https://grfixurdivice.000webhostapp.com -->
   <?php $server = "http://localhost:3000"; ?>
   <link rel="stylesheet" href="<?php echo $server; ?>/recursos/estilos-css/sesion.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

   <?php include($_SERVER['DOCUMENT_ROOT'] . "/shared/menu/conf-size.php"); ?>

   <title>Ingresar a cuenta</title>


 </head>

 <body>
   <header>
     <?php include($_SERVER['DOCUMENT_ROOT'] . '/shared/menu/menu.php'); ?>
   </header>

   <div class="row" style="justify-content: center; min-width:100%; margin-top: 40px; background-color: rgba(243, 243, 243, 0.76);">

     <div class="col-5">
       <div style="text-align: center;">
         Iniciar sesion
       </div>

       <div>
         <form method="POST">
           <div style="display: flex; flex-direction: column; align-items: center;">
             <input type="text" id="user" onkeyup="verificar()" placeholder="Numero telefonico">
             <div id="resultado"></div>
             <input type="password" placeholder="Contraseña">
             <button class="btn-iniciar" type="submit">Iniciar sesión</button>
           </div>
         </form>
       </div>

     </div>

     <div class="col-1 ">
       <div class="vl"></div>
     </div>

     <div class="col-5">
       <div>¿No tiene cuenta? Registrese</div>
     </div>

   </div>



 </body>

 </html>

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
         resul = "<p class='advertencia'>Entrada valida solo para numeros.</p>";
       } //Fin if

     } //Fin if vacio

     document.getElementById("resultado").innerHTML = resul;
   } //Fin verificar
 </script>