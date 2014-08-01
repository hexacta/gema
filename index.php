<?php 
require_once 'class/evento.php';

$evento = new Evento();
$evento->getEvento();


?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="ISO-8859-1" />
		<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
		<title>Titulo del sitio</title>
		
		<meta name="keywords" content="agregar,keywords"/>
		<!-- agregar una descripción -->	
		<link rel="icon" type="image/png" href="favicon.png">
		<!-- Webfonts -->
		<link href='http://fonts.googleapis.com/css?family=Vast+Shadow|Josefin+Slab:700italic|Abril+Fatface|Lemon|Megrim|Montserrat&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<!-- Reset -->
		<link rel="stylesheet" href="css/normalize.css">
		<!-- Style -->
		<link rel="stylesheet" href="css/style.css">
	</head>

	<body>

		<div class="container" style="opacity: 1; top: 0px; margin-top: 0px;"> 
<!--		style="opacity: 0;"> -->
			<!-- Regular day -->
			<div id="normal" style="opacity: 1; margin-left: 0px;">
				<div id="faltan" style="font-size: 60px;">faltan</div>
				<div id="contador" style="font-size: 400px; line-height: 261.6px;"><?php $evento->getDaysNextEvent(); ?></div> <!-- HACER FUNCIÓN EN PHP QUE CALCULE LOS DIAS -->
				<div id="dias" style="font-size: 60px;">dias</div>
<!--				<div id="separador" style="height: 25px; line-height: 2px;"><img src="2014/separador.gif?v2013"/></div>-->
				<div id="fecha" style="font-size: 32px;"><?php $evento->formatDate(); ?></div> <!-- HACER FUNCIÓN EN PHP QUE MUESTRE LA FECHA EN ESTE FORMATO DiaDeLaSemana NN de Mes -->
				<div id="motivo" style="font-size: 24px; margin-top:10px;"><?php echo $evento->nombre; ?></div> <!-- HACER FUNCIÓN EN PHP QUE MUESTRE EL NOMBRE DEL EVENTO -->
				<div id="motivo" style="font-size: 17px;"><?php echo $evento->descripcion; ?></div> <!-- HACER FUNCIÓN EN PHP QUE MUESTRE LA DESCRIPCION DEL EVENTO -->
				<div id="motivo" style="font-size: 20px; margin-top:10px;">Lugar: <?php echo $evento->lugar; ?></div>
				
				<div class="flechas izquierda"></div>
				<div class="flechas derecha"></div>
			</div>

		</div>

		<!-- Javascript -->
		<script src="2014/js/jquery.min.js"></script>
		<script src="2014/js/jquery.smartresize.js"></script>
		<script src="2014/js/jquery.fittext.js"></script>
		<script src="2014/js/app.js?v5"></script>

	</body>
</html>
