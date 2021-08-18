<html>

<head>

	<!--- https://grfixurdivice.000webhostapp.com | < ?php echo $server; ?> -->
	<?php $server = "http://localhost:3000/public_html"; ?>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="<?php echo $server; ?>/recursos/A_JS/impotarMenu.js"></script>
	<script src="<?php echo $server; ?>/recursos/A_JS/accionesMenu.js"></script>

	<meta charset="UTF-8">

	<title>EMRA Store CR</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

	<header>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/public_html/recursos/A_HTML/menu.php'); ?>
	</header>

	<div style="margin-top:100px">
		<div style="text-align:center">
			<h1>Bienvenidos</h1>
		</div>
		<div>

		</div>
	</div>

</body>


</html>