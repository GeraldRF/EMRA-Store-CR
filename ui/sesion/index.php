 <html>

 <head>
   <?php include($_SERVER['DOCUMENT_ROOT'] . "/servidor.php"); ?>
   <link rel="stylesheet" href="/recursos/estilos-css/sesion.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


   <title>Ingresar a cuenta</title>


 </head>

 <body>
n
    <header>
     <?php include($_SERVER['DOCUMENT_ROOT'] . '/shared/menu/menu.php'); ?>
   </header>

   <div style="display:flex; justify-content: center;">
     <div id="contenedor" class="sombra-div">

       <div>
         <div style="text-align: center;">
           Iniciar sesion
         </div>

         <div>
           <?php
            if (isset($_GET['sesion'])) {
              if ($_GET['sesion'] == "no-encontrada") {
                echo "<p><span style='color:red; font-size:large;'>*</span> La cuenta no existe</p>";
              } else if ($_GET['sesion'] == "incorrecta") {
                echo "<p><span style='color:red; font-size:large;'>*</span>Contraseña incorrecta</p>";
              }
            }
            ?>
         </div>

         <div>
           <form action="/controllers/sesion/iniciar-sesion.php" method="post" style="display: flex; flex-direction: column; align-items: center;">
             <input type="text" id="user" name="user" onkeyup="verificar()" placeholder="Numero telefonico">
             <div id="resultado"></div>
             <input type="password" id="pass" name="pass" placeholder="Contraseña">
             <input class="btn-iniciar" type="submit" values="Iniciar sesión">
           </form>
         </div>
       </div>
      
       <div>
         <div>¿No tiene cuenta? Registrese</div>
       </div>

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