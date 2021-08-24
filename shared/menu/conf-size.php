<script>
window.onresize = resize;
window.onload = resize;

function resize() {

  var carro = "<a class='carrito' title='Carrito' href='/'><img style='max-width: 70px; margin-right:15px' src='/recursos/imagenes/img-ui/Carrito.png'></a>";

  var sesion = "<a style='align-items: center;' title='Mi cuenta'" +
    "href='/ui/sesion'><img style='max-width: 70px;' src='/recursos/imagenes/img-ui/persona.png'></a>"

    var logoMaxWidth, logoMinWidth
    ,menusMarginTop,menusFontSize,carritoInnerHTML,sesionInnerHTML;

  if (document.body.clientWidth < 991) {

    logoMaxWidth = "400px";
    logoMinWidth = "100px";
    menusMarginTop = "15px";
    menusFontSize = "x-large";
    carritoInnerHTML = "<div style='align-self: center;'>" + carro + "</div>";
    sesionInnerHTML = "<div style='align-self: center;'>" + sesion + "</div>";
    
  } else {
    
    logoMaxWidth = "240px";
    logoMinWidth = "70px";
    menusMarginTop = "0px";
    menusFontSize = "large";
    carritoInnerHTML = "<div style='align-self: center;'>" + carro + "</div>";
    sesionInnerHTML = "<div style='align-self: center;'>" + sesion + "</div>";

  }

  document.getElementById('Logo').style.maxWidth = logoMaxWidth;
  document.getElementById('Logo').style.maxHeight = logoMinWidth;

  var menus = document.getElementsByClassName('btn-menu');
  for (var i = 0; i < 4; i++) {
    menus[i].style.marginTop = menusMarginTop;
    menus[i].style.fontSize = menusFontSize;
  }

  if (document.body.clientWidth < 991) {
  var div = document.getElementById('CarritoP1').innerHTML = carritoInnerHTML;
  div = document.getElementById('SesionP1').innerHTML = sesionInnerHTML;
  var div = document.getElementById('CarritoP2').innerHTML = "";
  div = document.getElementById('SesionP2').innerHTML = "";

  // document.getElementById('opciones').style.minWidth="0";
  document.getElementById('opciones').style.display="none";
  document.getElementById('menu1').style.display = "flex";

  }else{
  var div = document.getElementById('CarritoP1').innerHTML = "";
  div = document.getElementById('SesionP1').innerHTML = "";
  var div = document.getElementById('CarritoP2').innerHTML = carritoInnerHTML;
  div = document.getElementById('SesionP2').innerHTML = sesionInnerHTML;
  
  // var wi = document.body.clientWidth;
  // if(wi < 1190){
  // document.getElementById('opciones').style.minWidth="35%";
  // }else if(wi < 1260){
  // document.getElementById('opciones').style.minWidth="45%";
  // }else if(wi < 1446){
  // document.getElementById('opciones').style.minWidth="50%";
  // }else {
  //   document.getElementById('opciones').style.minWidth="55%"; 
  // }
 
  document.getElementById('opciones').style.display="flex";
  document.getElementById('menu1').style.display = "none";


  }
}

</script>