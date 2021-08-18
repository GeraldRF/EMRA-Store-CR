<!--- https://grfixurdivice.000webhostapp.com | <n?php echo $server; ?> -->
<?php $server = "http://localhost:3000/public_html"; ?>

<head>
  <link rel="stylesheet" href="<?php echo $server; ?>/recursos/A_CSS/menu.css">

  <script src="<?php echo $server; ?>/recursos/A_JS/accionesMenu.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">

    <div id="nav">
      <div id="menu">
        <div id="fijo">

          <div>
            <div>
              <img src="<?php echo $server; ?>/recursos/Img_GUI/EMRA Store CR Logo.png" style="margin-top:5px;max-width:220px;">
            </div>
            <div>
              <table align="center">
                <tr>
                  <td>

                    <button id="boton_trasp" onclick="redirec('inicio')"><strong>Inicio</strong></button>

                  </td>

                  <td>
                    <button id="boton_trasp" onclick="redirec('nuevo')"><strong>Soy nuevo</strong></button>

                  </td>


                  <td>
                    <button id="boton_trasp" onclick="redirec('destacado')"><strong>Destacado</strong></button>
                  </td>

                  <td>
                    <button id="boton_trasp" onclick="redirec('carrito')"><strong>Carrito</strong></button>
                  </td>
                </tr>

              </table>
            </div>
            <div>
              <button id="ini" style="margin-top: 20px;" onclick="redirec('sesion')"><img src="<?php echo $server; ?>/recursos/Img_GUI/persona.ico" style="vertical-align:middle; max-width:50px;"><strong>Iniciar sesion</strong></button>
            </div>

          </div>

        </div>
      </div>
    </div>

  </nav>

</body>