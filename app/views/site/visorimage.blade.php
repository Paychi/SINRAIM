@extends('layouts.home')

@section('titulo')
Galeria
@stop

@section('css')
<?php HTML::style('css/base.css'); ?>
@stop

@section('content')
		
	<h2 id="txtM">
            Galer&iacute;a de im&aacute;genes de Reacciones Adversas Causadas por Insumos Medicos
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
		<p class="colortexto_galeria">
			La necrólisis epidérmica tóxica es una enfermedad cutánea grave caracterizada por la aparición de ampollas y lesiones 
			exfoliativas de la piel, por lo general provocado por la reacción a un medicamento, frecuentemente antibióticos o 
			anticonvulsivantes. La necrólisis epidérmica tóxica comparte aspectos causales, patogenéticos, histológicos y terapéuticos
			con el síndrome de Stevens-Johnson y considerada una enfermedad distinta del eritema multiforme. Tiene una 
			mortalidad de aproximadamente el 30%
		<p>				
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
		<p class="colortexto_galeria">
			El síndrome de Stevens-Johnson es el eritema multiforme mayor, o sea, la más grave de sus manifestaciones.
			La forma más grave es causada generalmente por reacciones a medicamentos, en lugar de infecciones. 
			Es una variante severa del eritema multiforme, consistente en una reacción de hipersensibilización que afecta la 
			piel y las membranas mucosas. Adicionalmente, pueden quedar implicados algunos otros órganos. El síndrome de 
			Stevens-Johnson y la necrólisis epidérmica tóxica tienen tasas altas de mortalidad.
		<p>				
	</section>
	
@stop
 
