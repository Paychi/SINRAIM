<!DOCTYPE html>
<!--[if IE 8]>         
	<html class="no-js lt-ie9" lang="en"> 
<![endif]-->
<!--[if gt IE 8]><!--> 
	<html class="no-js" lang="es"> 
<!--<![endif]-->

	<head>
		<meta charset="utf-8" />
	  	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	  	<title>SINRAIM</title>

	  	<!-- FONT -->
	  	<link rel="stylesheet" href="{{URL::to('/')}}/css/font.css" /> 

	  	<!-- CSS -->
	  	<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/bootstrap.css"/>		
		<link rel="stylesheet" href="css/app.css"/>		
		<link rel="stylesheet" href="css/texto.css"/>
		<link rel="stylesheet" href="css/stylesMenu.css"/>

	</head>
	
	<body class="colorfondo">
		<header>
			<nav id="cssmenu" class="menu">
				<ul>
				   <li><a href='{{URL::to('/')}}/site/inicio/'><span>Notificar</span></a></li>
				   <li><a href='#'><span>Ver Notificaciones</span></a> </li>	
				</ul>
			</nav>
		</header>

		<section class="contenedor">
			
			@yield('content')
			
		</section>
	
		<footer>
		</footer>
		
		<script src="js/bootstrap.min.js"></script>
		<script src="js/bootstrap.js"></script>
		
		<script src="js/jquery.js"></script>
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/app.js"></script>
		<script src="js/agregarfila.js"></script>
	</body>
</html> 

