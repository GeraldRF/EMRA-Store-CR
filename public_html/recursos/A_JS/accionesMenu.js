function redirec(cual){
  // https://grfixurdivice.000webhostapp.com
 var server = "http://localhost:3000/public_html"
  
  var url="";
  
  if(cual=="sesion"){
      url=server+"/inicia-sesion";
  } else if(cual=="inicio"){
     url=server;
  
    }else if(cual=="nuevo"){
      url=server+"/registrarse";
   
    }else if(cual=="destacado"){
        url="";
  
   }else if(cual=="carrito"){
        url="";
    }
    
    window.location=url;
}//Fin function