@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
@stop

@section('content')
<!-- Home-->
<section>
	<div id="index-banner" class="parallax-container">
	    <div class="section no-pad-bot">
	      <div class="container center">
            <!--<img class="center responsive-img whitespace-large img-logo" src="{{URL::asset('img/liderazgo_sostenible.png')}}">-->
	        <img src="{{URL::asset('img/logo/logo.png')}}" alt="">
	        <i><h1 class="title-principal wow fadeInDown" data-wow-delay="0.1s">Americas Youth Speak Forum 2017</h1></i>
            <h5 class="header col s12 light center">
	        	<p class="wow fadeIn" data-wow-delay="0.4s"><strong>Un evento donde tus ideas serán<br>escuchadas por los tomadores de decisiones.</strong></p>
            </h5>            
	        <div class="row"><div class="section"></div></div>
	        <!--<div class="row center wow zoomIn" data-wow-delay="0.3s">
	        	<div class="section"></div>
	         	<a href="#modal1" id="download-button" class="btn-large waves-effect waves-light modal-trigger y-blue amber accent-3 z-depth-3"><strong>Dona tus horas</strong></a>
	      	</div>-->
	      </div>
	    </div>
	    <div class="parallax"><img src="{{URL::asset('img/bg/home.jpg')}}" alt="Unsplashed background img 1"></div>
	</div>
</section>
<!-- /Home -->

<!--Explain-->
<section class="container y-azul-text  section center">
    <h3 class="y-azul-text whitespace-short sub-title sub-title-x"><i>Un Foro donde la inspiración y la colaboración se convierten en acción</i></h3>
    <section class="row center">
        <div class="col s12 m12 l12 whitespace-large">
            <div class="col s4 m4 l4 center">
            	<i class="material-icons explain-icons">face</i>
                <h5 class="sub-title">+1000 delegados</h5>
            </div>
            <div class="col s4 m4 l4 center">            	                  
            	<i class="material-icons explain-icons">favorite</i>
                <h5 class="sub-title">Jóvenes en acción</h5>
            </div>
			<div class="col s4 m4 l4 center">                    
            	<i class="material-icons explain-icons">public</i>
				<h5 class="sub-title">+20 países presentes</h5>
			</div>
        </div>
    </section>   
</section>
<!-- /Explain-->

<!-- Call to action-->
<section>
	<div class="parallax-overlay">
	<div id="call_to_action" class="parallax-container">
	    <div class="section no-pad-bot">
	      <div class="container section center">
	      	<div class="row">
	      		<div class="col s12 m1 offset-m5 l1 offset-l5">
	        		<h1 class="call-to-action-title wow fadeInDown" data-wow-delay="0.1s"><i>6</i></h1>
	      		</div>	      		
	      		<div class="col s12 m1 l1">
					<i><h4 class="call-to-action-subtitle wow fadeInDown">ABRIL<br><span class="call-to-action-subtitle">2017</span></h4></i>
	      		</div>	      		
	      	</div>
            <h3 class="header col s12 light center">
	        	<i><p class="wow fadeIn poli" data-wow-delay="0.4s"><strong>Polideportivo de la PUCP</strong></p></i>
	        	<i><p class="wow fadeIn" data-wow-delay="0.4s"><strong>Lima, Perú</strong></p></i>
            </h3>            
	        <div class="row"><div class="section"></div></div>
	        <div class="row center wow zoomIn" data-wow-delay="0.3s">
	        	<div class="section"></div>
	         	<a href="https://podio.com/webforms/17985408/1208462" target="_blank" id="download-button" class="btn-large waves-effect waves-light modal-trigger y-celeste z-depth-3"><strong>Adquiere tu entrada</strong></a>
	      	</div>
	      </div>
	    </div>
	    <div class="parallax"><img src="{{URL::asset('img/bg/call_to_action.jpg')}}" alt="Unsplashed background img 1"></div>
	</div>
		</div>
</section>
<!-- /Call to action -->

<!--Explain 2-->
<section class="container y-azul-text  section">
    <h3 class="y-azul-text whitespace-short sub-title center">Inspírate, Involúcrate y Actúa frente<br>a la realidad del país</h3>
    <section class="row">
        <article class="col s12 m4 l4">
			<div class="card sticky-action  column-equal">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="{{URL::asset('img/facts/cuadro01.jpg')}}">
			    </div>
			    <div class="card-content center">
			      	<span class="card-title activator grey-text text-darken-4">
			      		<a class="light-blue-text accent-4"><b>Gobierno, Empresas y ONG's en el mismo lugar</b></a>
			      	</span>
			      	<p class="card-content-text section">La Hora del Planeta, el movimiento ambiental más grande del mundo que inspira y moviliza a personas de todo el mundo para hacerle frente al cambio climático.</p>
			      	<div class="section"></div>
			    </div>
			</div>
		</article>
		<article class="col s12 m4 l4">
			<div class="card sticky-action column-equal">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="{{URL::asset('img/facts/cuadro02.jpg')}}">
			    </div>
			    <div class="card-content center">
			      	<span class="card-title activator grey-text text-darken-4">
			      		<a class="light-blue-text accent-4"><b>Un evento donde tus ideas importan</b></a>
			      	</span>
			      	<p class="card-content-text section">Un espacio para co-crear propuestas y proyectos que contribuyan directamente al desarrollo del país a través de los Objetivos de Desarrollo Sostenible hacia el 2030</p>
			      	<div class="section"></div>
			    </div>
			</div>
		</article>
		<article class="col s12 m4 l4">
			<div class="card sticky-action column-equal">
				<div class="card-image waves-effect waves-block waves-light">
					<img class="activator" src="{{URL::asset('img/facts/cuadro01.jpg')}}">
			    </div>
			    <div class="card-content center">
			      	<span class="card-title activator grey-text text-darken-4">
			      		<a class="light-blue-text accent-4"><b>¡Ponte en acción!</b></a>
			      	</span>
			      	<p class="card-content-text section">Presenta tu propuesta o proyecto a los representantes de las organizaciones. Las mejores propuestas serán premiadas en base a la sostenibilidad, innovación e impacto que generen.</p>
			      	<div class="section"></div>
			    </div>
			</div>
		</article>
        </div>
    </section>   
</section>
<!-- /Explain-->

<!-- Agenda-->
<section class="hide-on-small-only">
	<div class="parallax-overlay">
	<div id="agenda" class="parallax-container">
	    <div class="section no-pad-bot">
	      <div class="container section center">
	      	<div class="row">
	      		<div class="center">
	      			<h2>AGENDA</h2>
	      			<div class="row">
	      				<img class="img-responsive" src="{{URL::asset('img/agenda/inspirar.png')}}" alt="">
	      			</div>
	      			<div class="row">
	      				<img class="img-responsive" src="{{URL::asset('img/agenda/involucrar.png')}}" alt="">
	      			</div>
	      			<div class="row">
	      				<img class="img-responsive" src="{{URL::asset('img/agenda/actuar.png')}}" alt="">
	      			</div>
	      		</div>
	      	</div>
	        <div class="row center wow zoomIn" data-wow-delay="0.3s">
	        	<div class="section"></div>
	         	<a href="https://podio.com/webforms/17985408/1208462" target="_blank" id="download-button" class="btn-large waves-effect waves-light modal-trigger y-celeste z-depth-3"><strong>Adquiere tu entrada</strong></a>
	      	</div>
	      </div>
	    </div>
	    <div class="parallax"><img src="{{URL::asset('img/bg/ysf.jpg')}}" alt="Unsplashed background img 1"></div>
	</div>
	</div>
</section>
<!-- /Agenda -->

<!-- To do: Agenda movil -->
<!-- /Agenda movil -->

<!--Partners-->
<section class="container-fluid section">
    <article class="container">
        <h4 class="center-align whitespace-short">Ellos confían en #YouthSpeakForum</h4>
        <div class="your-class row section center">
            <article class="col s12 m3 offset-m3 l3 offset-l3">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/aiesec.png')}}" alt=""></div>
            </article>
            <article class="col s12 m3 l3">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/onu.png')}}" alt=""></div>
            </article>
        </div>
    </article>
</section>

<!-- Y4GG-->
<section>
	<div class="parallax-overlay">
	<div id="y4gg" class="parallax-container">
	    <div class="section no-pad-bot">
	      <div class="container center">
	      	<div class="row">
	      		<div class="center ods-image">
	      			<img src="{{URL::asset('img/logo/y4gg.png')}}" alt="">
	      		</div>
	      	</div>
	      	<div class="section"></div>
	      	<div class="row">
	            <h3 class="header col s12 light center">
		        	<p class="y4ggcont wow fadeIn" data-wow-delay="0.4s">Este evento contribuye <br>a los Objetivos de Desarrollo Sostenible</p>
	            </h3>	      		
	      	</div>
	        <div class="row center wow zoomIn" data-wow-delay="0.3s">
	        	<div class="section"></div>
	         	<a href="https://podio.com/webforms/17985408/1208462" target="_blank" id="download-button" class="btn-large waves-effect waves-light modal-trigger y-celeste z-depth-3"><strong>Adquiere tu entrada</strong></a>
	      	</div>
	      </div>
	    </div>
	    <div class="parallax"><img src="{{URL::asset('img/bg/y4gg.jpg')}}" alt="Unsplashed background img 1"></div>
	</div>
	</div>
</section>
<!-- /Y4GG -->
	

@stop

@section('js')

<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{URL::asset('js/materialize.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/wow.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{URL::asset('js/columns.js')}}" charset="UTF-8"></script>

<script>
	new WOW().init();
	(function($){		
  		$(function(){
            $('select').material_select();
            $('.modal-trigger').leanModal();	
  		}); // end of document ready
	}); // end of jQuery name space
</script>
<script>
	$('.column-equal').matchHeight();
</script>