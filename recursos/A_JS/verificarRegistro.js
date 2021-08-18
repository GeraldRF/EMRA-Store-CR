
function verificarNombre(){
      
         var x = document.getElementById("Nombre");
         var resul="";
    if((x.value).trim()==""){  
         resul= "<p class='pAnim'>Debe llenar el espacio</p>";
 }//Fin if vacio
 
 document.getElementById("nombre").innerHTML=resul;
    }//Fin verificar nombre
    
    function verificarApellidos(){
         var x = document.getElementById("Apellidos");
         var resul="";
    if((x.value).trim()==""){
         resul= "<p class='pAnim'>Debe llenar el espacio</p>";
 }//Fin if vacio
 
 document.getElementById("apellidos").innerHTML=resul;
    }//Fin verificar apellidos
    
    function verificarDireccion(){
        
         var x = document.getElementById("Direccion");
         var resul="";
         if((x.value).trim()==""){
         resul= "<p class='pAnim' style='color:green;'>Puede llenar el espacio si lo desea</p>";
 }//Fin if vacio
 
 document.getElementById("direccion").innerHTML=resul;
        
    }//Fin verificar direccion
    
    function verificarCorreo(){
         var x = document.getElementById("Correo");
         var resul="";
    if((x.value).trim()==""){
         resul= "<p class='pAnim'>Debe llenar el espacio</p>";
 }//Fin if vacio
 
 document.getElementById("correo").innerHTML=resul;
    }//Fin verificar correo
    
    function verificarTelefono(){
        var x = document.getElementById("Telefono");
         var resul="";
    
if((x.value).trim()=="") {
        resul= "<p class='pAnim'> Debe llenar este campo.</p>"; 
 }//Fin if vacio
 else {
     
     if(isNaN(x.value)){
         resul= "<p class='pAnim'> Entrada valida solo para numeros.</p>";
        }//Fin if
        
        }//Fin else
 
 document.getElementById("telefono").innerHTML=resul;
    }//Fin verificar telefono
    
    function verificarContra(){
         var x = document.getElementById("Contra");
         var resul="";
    if((x.value).trim()==""){
         resul= "<p class='pAnim'>Debe llenar el espacio</p>";
 }//Fin if vacio
 
 document.getElementById("contra").innerHTML=resul;
    }//Fin verificar contra