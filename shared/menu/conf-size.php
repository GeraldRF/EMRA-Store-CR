<script>
window.onresize = resize;
window.onload = resize;

function resize() {

  var carro = "<a class='carrito' href='<?php echo $server; ?>''><img style='max-width: 70px;' src='<?php echo $server; ?>/recursos/imagenes/img-ui/Carrito.png'></a>";

  var sesion = "<a style='align-items: center;' title='Carrito'" +
    "href='<?php echo $server; ?>/ui/inicia-sesion'><img style='max-width: 70px;' src='<?php $server ?>/recursos/imagenes/img-ui/persona.png'></a>"

    var logoMaxWidth, logoMinWidth,bar_busquedaMinWidth
    ,menusMarginTop,menusFontSize,carritoInnerHTML,sesionInnerHTML;

  if (document.body.clientWidth < 991) {

    logoMaxWidth = "400px";
    logoMinWidth = "100px";
    bar_busquedaMinWidth = "70%";
    menusMarginTop = "15px";
    menusFontSize = "x-large";
    carritoInnerHTML = "<div style='align-self: center; position: fixed; top:30px; left: 53%;'>" + carro + "</div>";
    sesionInnerHTML = "<div style='align-self: center; position: fixed; top:30px; left: 68%;'>" + sesion + "</div>";

  } else {
    
    logoMaxWidth = "240px";
    logoMinWidth = "70px";
    bar_busquedaMinWidth = "45%";
    menusMarginTop = "0px";
    menusFontSize = "large";
    carritoInnerHTML = "<div style='align-self: center; position: fixed; top:15px; left: 86%;'>" + carro + "</div>";
    sesionInnerHTML = "<div style='align-self: center; position: fixed; top:15px; left: 93%;'>" + sesion + "</div>";

  }

  document.getElementById('Logo').style.maxWidth = logoMaxWidth;
  document.getElementById('Logo').style.maxHeight = logoMinWidth;

  document.getElementById('barra-busqueda').style.minWidth = bar_busquedaMinWidth;

  var menus = document.getElementsByClassName('btn-menu');
  for (var i = 0; i < 4; i++) {
    menus[i].style.marginTop = menusMarginTop;
    menus[i].style.fontSize = menusFontSize;
  }

  var div = document.getElementById('Carrito').innerHTML = carritoInnerHTML;
  div = document.getElementById('Sesion').innerHTML = sesionInnerHTML;

}
</script>