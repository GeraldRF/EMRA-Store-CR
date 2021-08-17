function redirec(cual){
    var url="";
  
  if(cual=="sesion"){
      url="https://grfixurdivice.000webhostapp.com/recursos/A_PHP/LogIn.php";
  } else if(cual=="inicio"){
     url="https://grfixurdivice.000webhostapp.com";
  
    }else if(cual=="nuevo"){
      url="https://grfixurdivice.000webhostapp.com/recursos/A_HTML/Registrarse.html";
   
    }else if(cual=="destacado"){
        url="";
  
   }else if(cual=="carrito"){
        url="";
    }
    
    window.location=url;
}//Fin function