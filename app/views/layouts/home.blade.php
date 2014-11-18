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
	  	<title>
			SINRAIM | @section('titulo')Inicio
			@show
		</title>

	  	<!-- FONT -->
	  	<link rel="stylesheet" href="{{URL::to('/')}}/css/font.css" /> 

	  	<!-- CSS -->
	  	<link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap.css"/>		
		<link rel="stylesheet" href="{{URL::to('/')}}/css/app.css"/>			
		<link rel="stylesheet" href="{{URL::to('/')}}/css/less.css"/>	
		<link rel="stylesheet" href="{{URL::to('/')}}/css/stylesMenu.css"/>
		@yield('css')
		
		<!-- JAVASCRIPT -->
		
		

	</head>
	
	<body class="colorfondo container">
		<header>
			<div class="texto_header">
				{{date("d-m-Y")}} | {{HTML::link("http://www.minsa.gob.ni/","Minsa Nicaragua")}} |
				<!--{{ HTML::image('img/logo.png','logo_header',array("class"=>"logo_header"))}}-->
				{{ HTML::image('img/banner_medicina.png','banner_header',array("class"=>"banner_header"))}}
			</div>
			
			<nav id="cssmenu" class="menu">
				<ul>
					<li><a href='{{URL::to('/')}}'><span>Inicio</span></a></li>
				   <li><a href='{{URL::to('/')}}/notificar'><span>Notificar</span></a></li>
				   <li><a href='{{URL::to('/')}}/notificaciones'><span>Notificaciones</span></a> </li>	
				</ul>
			</nav>
		</header>

		<section class="contenedor">
			
			@yield('content')
			
		</section>
	
		<footer>
			<section class="footer">
				<div class="contenedor-footer">
					<center><p class="texto-callado creditos">SINRAIM El futuro de la prevenci&oacute;n</p></center>
				</div>
			</section>
		</footer>
		
		<script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>
		<script src="{{URL::to('/')}}/js/bootstrap.js"></script>
		
		<script src="{{URL::to('/')}}/js/jquery.js"></script>
		<script src="{{URL::to('/')}}/js/jquery-1.9.1.min.js"></script>
		<script src="{{URL::to('/')}}/js/app.js"></script>
		<!--<script src="{{URL::to('/')}}/js/agregarfila.js"></script>-->
		@yield('javascript')
	</body>
</html> 

