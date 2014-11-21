@extends('layouts.home')

@section('javascript')
<?php echo HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js'); ?>
<?php echo HTML::script('js/jquery-1.9.1.min.js'); ?>
@stop

@section('content')
		
	
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->


  <!-- START THE FEATURETTES -->

 
 <div class="container marketing">

      <div class="col-md-12  featurette-encabezadoprincipal text-center">
            <h2>Bienvenido a Sinraim</h2>
       </div>

               
       <!-- fatures cuerpo parte 1-->
       <div class="row" style="margin-top:140px">

        <div class="col-md-6">
            <h2 class="featurette-heading">Departamento FV. <span class="text-muted">FarmacoVigilancia.</span></h2>
            <p class="lead">Panificar, evaluar y desarrollar un sistema como marco de referencia en materia de medicamentos de uso humano, para valorar, procesar y emitir informacion sobre las sospechas de reacciones adversas procedentes de la industria farmaceutica.</p>          
         </div>   
          <div class="col-md-6">
             {{HTML::image('img/features1.png','imagenfeatures1',array("class"=>"featurette-image pull-right"))}}
          </div>    
      </div><!-- /.row -->


       <!-- fatures cuerpo parte 2-->
       <div class=" row featurette" style="margin-top:30px">
          <div class="col-md-6">
             {{HTML::image('img/features2.png','imagenfeatures2',array("class"=>"featurette-image2 pull-left"))}}
          </div>
         <div class="col-md-6">
            <h2 class="featurette-heading">Ministerio de Salud, <span class="text-muted">Minsa Nicaragua.</span></h2>
             <p class="lead">hacer efectivo el derecho ciudadano a la salud con equidad, con enfoque género y generacional para contribuir a reducir las iniquidades existentes, mejorar las condiciones de vida de la población nicaragüense y el desarrollo del país.</p>          
         </div>       
      </div><!-- /.row -->
  </div>


      <hr class="featurette-divider">


  <div class= "container" >
        
      <div class="col-md-12  featurette-encabezadoprincipal text-center">
            <h2>Pasos para enviar hoja de notificación</h2>
       </div>
       <!-- Carousel
       ================================================== -->
       <div id="mislider" class="carousel slide" style="margin-top:120px">
          <!-- Indicators -->
          <ol class="carousel-indicators">
           <li data-target="#mislider" data-slide-to="0" class="active"></li>
           <li data-target="#mislider" data-slide-to="1"></li>
           <li data-target="#mislider" data-slide-to="2"></li>
          </ol>
            <div class="carousel-inner">

              <div class="item active ">
                {{HTML::image('img/slide1.png','pasonoti1',array("class"=>"img-responsive"))}}   
                <pthis is="" an="" example="" layout="" with="" carousel="" that="" uses="" the="" bootstrap="" 3="" styles.<="" small=""><p></p>          
              </div>
              <div class="item">
                {{HTML::image('img/slide2.png','pasonoti2',array("class"=>"img-responsive"))}}              
              </div>
              <div class="item">
                {{HTML::image('img/slide3.png','pasonoti3',array("class"=>"img-responsive"))}}               
              </div>      

        </div>
       
          
            <!-- Controls -->
            <a href="#mislider"  class="left carousel-control" data-slide="prev">
             <span class="icon-prev"></span>
            </a>
             <a href="#mislider" class="right carousel-control" data-slide="next">
              <span class="icon-next"></span>
            </a> 
        
       </div>
        <div class="col-md-12" style="margin-top:30px">
             <center>{{HTML::image('img/logosinraim.png','logosinraim',array("class"=>"logosinraim"))}}<center>
        </div>  

</div>
       
@stop

