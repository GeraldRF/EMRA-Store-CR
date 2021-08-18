 <html>

 <head>
   <!--- https://grfixurdivice.000webhostapp.com -->
   <?php $server = "http://localhost:3000/public_html"; ?>
   <link rel="stylesheet" href="<?php echo $server; ?>/recursos/A_CSS/LogIn.css">
   <title>Ingresar a cuenta</title>


 </head>

 <body>

   <div align="center">

     <div class="PanelArr">
       <a href="<?php echo $server; ?>" style="margin:0 380px 5px 0;"> <img src="<?php echo $server; ?>/recursos/Img_GUI/flecha2.ico" width=70px height=70px></a>
     </div>
    
     <div class="PanelAbj" align="center">
       <br>

       <div style="margin-top:10px; padding-top:10px; min-width:150px; min-height:150px"><img src="<?php echo $server; ?>/recursos/Img_GUI/persona.ico"></div>

       <br>
       <div>
         <input id="user" class="txtfield" type="text" placeholder="Numero telefonico" onkeyup="verificar()">
       </div>
       <div id="resultado" class="msgErr"></div>
       <br>
       <div><input type="password" class="txtfield" placeholder="Contraseña"></div>
      
       <br><br>
       <div><button name="Iniciar" class="btnIngre" onclick="iniciarSesion()">Iniciar sesion</button></div>

       <br> <br><br>
       <div>
         <p>¿No tiene cuenta? </p><button class="btnRegis"> Registrate</button>
       </div>

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