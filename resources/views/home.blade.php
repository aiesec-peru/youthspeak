@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
@stop

@section('content')
<!-- Home-->
<section>
	<div id="index-banner" class="parallax-container parallax-overlay">
	    <div class="section no-pad-bot">
	      <div class="container center">
            <!--<img class="center responsive-img whitespace-large img-logo" src="{{URL::asset('img/liderazgo_sostenible.png')}}">-->
	        <img src="{{URL::asset('img/logo/logo.png')}}" alt="">
	        <h1 class="title-principal wow fadeInDown" data-wow-delay="0.1s">America Youth Speak Forum <br>2017</h1>
            <h5 class="header col s12 light center">
	        	<p class="wow fadeIn" data-wow-delay="0.4s"><strong>Un lugar donde la inspiración y la <br>colaboración se convierten en acción</strong></p>
            </h5>            
	        <div class="row"><div class="section"></div></div>
	        <!--<div class="row center wow zoomIn" data-wow-delay="0.3s">
	        	<div class="section"></div>
	         	<a href="#modal1" id="download-button" class="btn-large waves-effect waves-light modal-trigger y-blue amber accent-3 z-depth-3"><strong>Dona tus horas</strong></a>
	      	</div>-->
	      </div>
	    </div>
	    <div class="parallax"><img src="{{URL::asset('img/bg/home.png')}}" alt="Unsplashed background img 1"></div>
	</div>
</section>
<!-- /Home -->

<!--Explain-->
<section class="container y-azul-text  section center"  id="about">
    <h3 class="y-azul-text whitespace-short sub-title-x">El foro reunirá a empresas privadas, ONG's, gobierno y sociedad civil para <br>intercambiar ideas, compartir propuestas y generar acciones que <br>contribuyan a los <b>Objetivos del Desarrollo Sostenible</b></h3>
    <section class="row center">
        <div class="col s12 m12 l12 whitespace-large">
            <div class="col s4 m4 l4 center">
            	<i class="material-icons explain-icons">face</i>
                <h5 class="sub-title">+800 delegados</h5>
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
    <section class="row">
    	<article class="col s12 m6 offset-m3 l6 offset-l3">
	    	<div class="video-container">
	        	<iframe width="400" src="//www.youtube.com/embed/IQwGNZlW96A?rel=0" frameborder="0" allowfullscreen></iframe>
	      	</div>    		
    	</article>
    </section>
</section>
<!-- /Explain-->

<!-- Call to action-->
<section>
	<div class="parallax-overlay"  id="info">
	<div id="call_to_action" class="parallax-container parallax-container-info">
	    <div class="section no-pad-bot whitespace-large">
    	<h3 class="whitespace-short sub-title center info-title">Información General</h3>	    	
	      <div class="container section center">
	      	<article class="row">
	      		<div class="col s12 m4 l4 info-sub info-sub-x">
	      			<div class="col s12 m12 l12">
	      				<img class="img-responsive" src="{{URL::asset('img/icons/agenda.png')}}" width="150">	      				
	      			</div>
	      			<div class="col s12 m12 l12">
	      				<h4><span class="light">Jueves</span> <b>06 de Abril</b></h4>	      				
	      				<h5 class="light">8 am a 8 pm</h5>
	      			</div>
	      		</div>
	      		<div class="col s12 m4 l4 info-sub-y">
	      			<div class="col s12 m12 l12">
	      				<img class="img-responsive" src="{{URL::asset('img/icons/location.png')}}" width="150">
	      			</div>
	      			<div class="col s12 m12 l12">
	      				<h5><span class="light">Polideportivo</span> <b>PUCP</b></h5>
	      				<h5 class="light">Av. Universitaria 1801,<br>San Miguel</h5>
	      			</div>
	      		</div>
	      		<div class="col s12 m4 l4 info-sub-z">
	      			<div class="col s12 m12 l12">
	      				<img class="img-responsive" src="{{URL::asset('img/icons/sales.png')}}" width="150">
	      			</div>
	      			<div class="col s12 m12 l12">
	      				<h4><span class="light">General</span> <b>s/. 50</b></h4>
	      				<h5 class="light">Incluye: Charlas magistrales, <br>talleres, feria laboral, almuerzo<br> y coffee breaks</h5>
	      				<h5 class="light">Preventa hasta el 15 de Marzo: <br>s/. 45</h5>
	      			</div>
	      		</div>
	      	</article>
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
<section class="container y-azul-text  section"  id="metodologia">
    <h3 class="y-azul-text whitespace-short sub-title center"><span class="light">Metodología</span> <b>innovadora</b> <span class="light">para generar resultados</span></h3>
    <section class="row">
        <article class="col s12 m4 l4 center">
        	<h4><b>INSPIRAR</b></h4>
			<img class="activator" src="{{URL::asset('img/icons/sello1.jpg')}}">
			<p class="light">Líderes de diferentes sectores <br>comparten perspectivas, <br>dialogan sobre las <br>problemáticas del país e <br>incentivan a los jóvenes a <br>tomar acción.</p>
		</article>
		<article class="col s12 m4 l4 center">
        	<h4><b>INVOLUCRAR</b></h4>
			<img class="activator" src="{{URL::asset('img/icons/sello2.jpg')}}">
			<p class="light">Aliados de la organización <br>dictan talleres con temáticas <br>específicas que motivan el <br>intercambio de ideas, discusión <br>y síntesis de una problemática <br>entre los jóvenes asistentes.</p>
		</article>
		<article class="col s12 m4 l4 center">
        	<h4><b>ACTUAR</b></h4>
			<img class="activator" src="{{URL::asset('img/icons/sello3.jpg')}}">
			<p class="light">Los jóvenes son desafiados a <br>crear una iniciativa innovadora <br>o mejorar proyectos ya <br>existentes. Las ideas mejor <br>planteadas serán premiadas al <br>final del día.</p>
		</article>
		
        </div>
    </section>   
</section>
<!-- /Explain-->

<!-- Agenda Desktop-->
<section class="hide-on-small-only" id="programa">
	<div class="parallax-overlay">
	<div id="agenda" class="parallax-container">
	    <div class="section no-pad-bot">
	      <div class="container section center">
	      	<div class="row">
	      		<div class="center">
	      			<h2>El Programa</h2>
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

<!-- Agenda Desktop-->
<section class="hide-on-med-and-up" id="programa">
	<div class="parallax-overlay">
	<div id="agenda" class="parallax-container">
	    <div class="no-pad-bot">
	      <div class="container center">
	      	<div class="row center">
	      			<h2>El Programa</h2>
	      			<div class="col s12">
	      					<img class="img-responsive" src="{{URL::asset('img/agenda/inspirar_m.png')}}" alt="" width="300">
	      			</div>
	      			<div class="row">
	      				<img class="img-responsive" src="{{URL::asset('img/agenda/involucrar_m.png')}}" alt="" width="300">
	      			</div>
	      			<div class="row">
	      				<img class="img-responsive" src="{{URL::asset('img/agenda/actuar_m.png')}}" alt="" width="300">
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
<section class="container-fluid section" id="ponentes">
    <article class="container y-azul-text">
        <h4 class="center-align whitespace-short y-azul-text"><span class="light">Ponentes</span> Magistrales</h4>
        <div class="row section center">
            <article class="col s12 m3 offset-m2 l3 offset-l2">
                <div><img class="responsive-img" src="{{URL::asset('img/ponentes/maria_sacasa.png')}}" alt=""></div>
                <h4><b>Maria Sacasa</b></h4>
                <h5 class="light">Coordinadora Residente <br>de ONU Perú</h5>
            </article>
            <article class="col s12 m3 offset-m2 l3 offset-l2">
                <div><img class="responsive-img" src="{{URL::asset('img/ponentes/nancy_lange.png')}}" alt=""></div>
                <h4><b>Nancy Lange</b></h4>
                <h5 class="light">Primera Dama de la <br>Nación del Perú</h5>
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
	
<!--Partners-->
<section class="container-fluid section" id="aliados">
    <article class="container y-azul-text">
        <h4 class="center-align whitespace-short light">Youth Speak Forum es <b>organizado</b> por</h4>
        <div class="row section center">
            <article class="col s12 m4 offset-m4 l4 offset-l4">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/aiesec.png')}}" alt=""></div>
            </article>
        </div>
        <h4 class="center-align whitespace-short light">Con la <b>colaboración</b> de</h4>
        <div class="row section center">        
            <article class="col s12 m4 l4">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/plastic_oceans.png')}}" alt=""></div>
            </article>       
            <article class="col s12 m4 l4">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/onu.png')}}" alt=""></div>
            </article>       
            <article class="col s12 m4 l4">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/equipu.png')}}" alt=""></div>
            </article>
		</div>
		<div class="row section center">        
            <article class="col s12 m4 offset-m2 l4 offset-l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/crea.png')}}" alt=""></div>
            </article>       
            <article class="col s12 m4 l4">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/wwf.png')}}" alt=""></div>
            </article>
		</div>
    </article>
</section>

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