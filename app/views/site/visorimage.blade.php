@extends('layouts.home')

@section('titulo')
Galeria
@stop

@section('css')
<?php HTML::style('css/base.css'); ?>
@stop

@section('content')
		
	<h2 id="txtM">
            Reacciones Adversas Causadas por Insumos Medicos
    </h2>
    
    <section class="section" id="sec">
		<center></c><h4 class="colortexto_galeria">Sind. Lyell (necr&oacute;lisis epid&eacute;mica t&oacute;xica)</h4></center>
		<article class="article">
			<figure>
				{{HTML::image('img/reaccion_adversa/sind-lyell_1.png','sind-lyell_1')}}
			</figure>
		</article>
		<article class="article">
			<figure>
				{{HTML::image('img/reaccion_adversa/sind-lyell_2.png','sind-lyell_2')}}
			</figure>
		</article>
		<article class="article">
			<figure>
				{{HTML::image('img/reaccion_adversa/sind-lyell_3.png','sind-lyell_3')}}
			</figure>
		</article>
		<p class="colortexto_galeria">Descripcion de la resaccion adversa al insumo medico suministado<p>				
	</section>
	
	 <section class="section" id="sec">
		<center></c><h4 class="colortexto_galeria">Sind. Stevens Johnson</h4></center>
		<article class="article">
			<figure>
				{{HTML::image('img/reaccion_adversa/sind-stevensjohnson_1.png','sind-stevensjohnson_1')}}
			</figure>
		</article>
		<article class="article">
			<figure>
				{{HTML::image('img/reaccion_adversa/sind-stevensjohnson_2.png','sind-stevensjohnson_2')}}
			</figure>
		</article>
		<article class="article">
			<figure>
				{{HTML::image('img/reaccion_adversa/sind-stevensjohnson_3.png','sind-stevensjohnson_3')}}
			</figure>
		</article>
		<article class="article">
			<figure>
				{{HTML::image('img/reaccion_adversa/sind-stevensjohnson_4.png','sind-stevensjohnson_4')}}
			</figure>
		</article>
		<p class="colortexto_galeria">Descripcion de la resaccion adversa al insumo medico suministado<p>				
	</section>
	
@stop
 
