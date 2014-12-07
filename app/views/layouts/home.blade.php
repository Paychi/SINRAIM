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
		<link rel="stylesheet" href="{{URL::to('/')}}/css/stylesMenu.css"/>    
		<link rel="stylesheet" href="{{URL::to('/')}}/css/font.css"/>
		<link rel="stylesheet" href="{{URL::to('/')}}/css/base.css"/>
		<link rel="stylesheet" href="{{URL::to('/')}}/css/less.css"/>
		@yield('css')
		
		<!-- JAVASCRIPT -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		 <script src="js/paralax.js"></script>

	</head>
	
	<body class="colorfondo" >
		<header>
      <div>
        
			 <!-- Carousel
			 ================================================== -->
			 <div id="myCarousel" class="carousel slide">
  		  	<!-- Indicators -->
 			    <ol class="carousel-indicators">
    			 <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    			 <li data-target="#myCarousel" data-slide-to="1"></li>
    			 <li data-target="#myCarousel" data-slide-to="2"></li>
  			 </ol>
            <div class="carousel-inner">
              <div class="item active">
                {{HTML::image('img/banner_medicina1.png','banner1',array("class"=>"img-responsive"))}}
                <div class="container ">
                  <div class="carousel-caption texto_headerbanner">
                    <h1>Sistema de notificacion Sinraim,</h1>
                    <p>El futuro de la prevencion.</p>
                    <pthis is="" an="" example="" layout="" with="" carousel="" that="" uses="" the="" bootstrap="" 3="" styles.<="" small=""><p></p>
                    <p><a class="btn btn-lg btn-primary"  href='{{URL::to('/')}}/notificar'>Notificar</a>
                  </p></pthis></div>
                </div>
              </div>
             <div class="item">
              
               {{HTML::image('img/banner_medicina2.png','banner2',array("class"=>"img-responsive"))}}
               <div class="container">
                 <div class="carousel-caption texto_banner1">
                   <h1>Sistema Nacional de FarmacoVigilancia</h1>
                   <p>pensando en la poblacion Nicaraguense</p>
                   <p><a class="btn btn-large btn-primary" href='{{URL::to('/')}}/notificar'>Notificar</a></p>
                 </div>
               </div>
             </div>
            <div class="item">
               {{HTML::image('img/banner_medicina3.png','banner3',array("class"=>"img-responsive"))}}
              <div class="container">
                <div class="carousel-caption texto_headerbanner ">
                  <h1>Notificar, es tu derecho</h1>
                  <p>Ministerio de Salud MINSA.</p>
                  <p><a class="btn btn-large btn-primary" href='{{URL::to('/')}}/notificar'>Notificar</a></p>
                </div>
              </div>
            </div>
          </div>
           <!-- Controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
             <span class="icon-prev"></span>
            </a>
             <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="icon-next"></span>
            </a>  

             <nav id="cssmenu" class="menu" >
               <ul>
                <li><a href='{{URL::to('/')}}'><span>Inicio</span></a></li>
                 <li><a href='{{URL::to('/')}}/notificar'><span>Notificar</span></a></li>
                 <li><a href='{{URL::to('/')}}/notificaciones'><span>Notificaciones</span></a> </li>  
                 <li><a href='{{URL::to('/')}}/galeria'><span>Reacciones Adversas</span></a> </li> 
              </ul>
            </nav>   
          
		    </div>     

             <!-- fecha y link MINSA
               ================================================== -->
               <div class="texto_header">
                  {{date("d-m-Y")}} | {{HTML::link("http://www.minsa.gob.ni/","Minsa Nicaragua")}} |
                </div>                                   
       </div>
  </header>

 
        <section class="contenedor">
			     @yield('content')
		    </section>     
 
		  <!-- FOOTER -->

    <footer style="margin-top:80px">
      <div class="footer">
        <!-- Desarroladores-->
        <div class="container marketing">
        <center>{{HTML::image('img/isoft.png','logo iSoft Corporations',array("class"=>"footer-image"))}}</center>

        <div class="row ">
         <div class="col-md-3 text-center">
           {{HTML::image('img/desarrollosantiago.png','santiago',array("class"=>"img-circle"))}}
           <h3>Santiago Aguilar Silva</h3>
           <p>Analista, Desarrollador, programador.</p>
          </div>
         <div class="col-md-3 text-center">
           {{HTML::image('img/desarrolloalvin.png','alvin',array("class"=>"img-circle"))}}
           <h3>Alvin Antonio Baltodano</h3>
           <p>Analista, Desarrollador, programador.</p>           
         </div>
         <div class="col-md-3 text-center">
           {{HTML::image('img/desarrollomelvin.png','melvin',array("class"=>"img-circle"))}}
           <h3>Melvin Mendieta Mendoza</h3>
           <p>Analista, Desarrollador, programador.</p>          
         </div>
          <div class="col-md-3 text-center">
           {{HTML::image('img/desarrollocanales.png','canales',array("class"=>"img-circle"))}}
           <h3>Carlos Canales Lopez</h3>
           <p>Analista, Desarrollador, programador.</p>           
         </div>
        </div><!-- /.row -->

              <!-- logo iSoft-->
          <center><p style="margin-top: 15px ">Copyright © 2014 iSoft Corporation S,A. <a href="#">isoftcorporation.com</a></p></center>
          </div>
        </div>
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

