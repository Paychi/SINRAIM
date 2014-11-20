@extends('layouts.home')

@section('content')
		
	
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<!-- JAVASCRIPT -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
     <script src="js/paralax.js"></script>


  <!-- START THE FEATURETTES -->

 
 <div class="container marketing">

      <div class="col-md-12  featurette-encabezadoprincipal text-center">
            <h2>-Bienvenido a Sinraim-</h2>
       </div>

               
       <!-- fatures cuerpo parte 1-->
       <div class="row" style="margin-top:130px">

        <div class="col-md-6">
            <h2 class="featurette-heading">Responsive Design. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">In simple terms, a responsive web design figures out what resolution of device it's being served on. Flexible grids then size correctly to fit the screen.</p>          
         </div>   
          <div class="col-md-6">
            <img  class "featurette-image pull-right" src="img/testfeatures.png">
          </div>    
      </div><!-- /.row -->


       <hr class="featurette-divider">


       <!-- fatures cuerpo parte 2-->
       <div class=" row featurette">
          <div class="col-md-6">
            <img class="featurette-image pull-left" src="img/testfeatures2.png">
          </div>
         <div class="col-md-6">
            <h2 class="featurette-heading">Responsive Design. <span class="text-muted">It'll blow your mind.</span></h2>
            <p class="lead">In simple terms, a responsive web design figures out what resolution of device it's being served on. Flexible grids then size correctly to fit the screen.</p>          
         </div>       
      </div><!-- /.row -->
  </div>


      <hr class="featurette-divider">


  <div class= "container" >
        
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
                <img src="img/banner_medicina1.png" class="img-responsive">
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
               <img src="img/banner_medicina2.png" class="img-responsive">
               <div class="container">
                 <div class="carousel-caption texto_banner1">
                   <h1>Sintema Nacional de FarmacoVigilancia</h1>
                   <p>pensando en la poblacion Nicaraguense</p>
                   <p><a class="btn btn-large btn-primary" href='{{URL::to('/')}}/notificar'>Notificar</a></p>
                 </div>
               </div>
             </div>
            <div class="item">
               <img src="img/banner_medicina3.png" class="img-responsive">
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
              </ul>
            </nav>            
        </div>

         <!-- fecha y link MINSA
               ================================================== -->
               <div class="texto_header">
                  {{date("d-m-Y")}} | {{HTML::link("http://www.minsa.gob.ni/","Minsa Nicaragua")}} |
                </div>
              
                 <div class="col-md-12  featurette-encabezadoprincipal text-center">
                    <h2>-Bienvenido a Sinraim-</h2>
                 </div>
       </div>

@stop

