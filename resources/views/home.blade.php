@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
@stop

@section('content')
<!-- Home-->
<section>
	<div id="index-banner" class="parallax-container parallax-container-home parallax-overlay">
	    <div class="section no-pad-bot">
	      <div class="container center">
            <!--<img class="center responsive-img whitespace-large img-logo" src="{{URL::asset('img/liderazgo_sostenible.png')}}">-->
	        <img id="logo-principal" src="{{URL::asset('img/logo/logo.png')}}" alt="">
			<h1 class="title-principal wow fadeInDown" data-wow-delay="0.1s">Youth Speak Forum<br>2018</h1>
			<div class="col s12 m12 l12 center">
			    <a href="https://www.atrapalo.pe/entradas/youth-speak-forum-aiesec_e4814434/" class="btn btn-primary btn-comprar btn-lg active" role="button" aria-pressed="true">Comprar entrada</a>
    	    </div>
            <!--<h5 class="header col s12 light center">
	        	<p class="wow fadeIn" data-wow-delay="0.4s"><strong>Un lugar donde la inspiración y la <br>colaboración se convierten en acción</strong></p>
            </h5>-->
	        <div class="row center wow zoomIn" data-wow-delay="0.3s">
	         	<!--<a href="https://podio.com/webforms/17985408/1208462" target="_blank" id="download-button" class="btn-large waves-effect waves-light modal-trigger y-celeste z-depth-3"><strong>Adquiere tu entrada</strong></a>-->
	      	</div>
		  </div>
	    </div>
	    <div class="parallax"><img src="{{URL::asset('img/bg/LandingImagen.png')}}" alt="Unsplashed background img 1"></div>
	</div>
</section>
<!-- /Home -->

<!--Explain-->
<section class="container y-azul-text  section center"  id="about">
    <h3 class="y-azul-text whitespace-short sub-title-x">Un lugar donde la inspiración y la colaboración se convierten en acción en favor de los <b>Objetivos de Desarrollo Sostenible</b></h3>	
</section>
<!-- /Explain-->

<!--Explain 2-->
<section class="container y-azul-text section"  id="informacion_ysf">
    <h3 class="y-azul-text whitespace-short sub-title center"><span class="light">Datos</span> <b>Generales</b></h3>
    <section>
		<article class="row">
			<div class="col s12 m5 offset-m2 l5 offset-l1 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/calendar.png')}}">
				<p class="valign explain-text padd-left"><b>Fecha:</b> Sábado 21 de Abril</p>
			</div>
			<div class="col s12 m5 l5 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/keynotes.png')}}">
				<p class="valign explain-text padd-left"><b>Charlas Magistrales:</b> 4</p>
			</div>
		</article>
		<article class="row">
			<div class="col s12 m5 offset-m2 l5 offset-l1 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/time.png')}}">
				<p class="valign explain-text padd-left"><b>Hora: </b>8am a 8pm</p>
			</div>
			<div class="col s12 m5 l5 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/workshops.png')}}">
				<p class="valign explain-text padd-left"><b>Talleres de ODS: </b>20 en simultáneo</p>
			</div>
		</article>
		<article class="row">
			<div class="col s12 m5 offset-m2 l5 offset-l1 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/place.png')}}">
				<p class="valign explain-text padd-left"><b>Lugar: </b>Av. La Fontana 750, Campus 2 USIL, La Molina (Almirante Miguel Grau)</p>
			</div>
			<div class="col s12 m5 l5 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/feria.png')}}">
				<p class="valign explain-text padd-left"><b>Feria de Responsabilidad Social: </b>15 stands</p>				
			</div>
		</article>
		<article class="row">
			<div class="col s12 m5 offset-m2 l5 offset-l1 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/capacity.png')}}">
				<p class="valign explain-text padd-left"><b>Capacidad: </b>800 asistentes</p>
			</div>
			<div class="col s12 m5 l5 valign-wrapper">
				<img class="responsive-img section" src="{{URL::asset('img/icons/data/include.png')}}">
				<p class="valign explain-text padd-left"><b>Incluye: </b>Almuerzo y Coffee Breaks</p></div>
		</article>
		<!-- <article class="row">
			<div class="col s12 m5 offset-m2 l5 offset-l1 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/countries.png')}}">
				<p class="valign explain-text padd-left"><b>Países participantes: </b>20 países</p>
			</div>
		</article> -->
    </section>   
    <!-- <h3 class="y-azul-text whitespace-short sub-title center"><span class="light">Precio</span> <b>Entrada</b></h3> -->
    <section>
    	<article class="row">
    		<div class="col s12 m12 l12 center">
    			<h5 class="red-text"><b>Cierre de inscripciones y pagos: 20 de abril</b></h5>
    		</div>
			<br>
			<br>
    	</article>
    </section>
</section>
<!-- /Explain-->

<!-- Ponentes-->
<section id="pon_mag">
	<div class="parallax-overlay">
	<div id="call_to_action" class="parallax-container parallax-container-info">
	<br>
	<br>
	    <div class="section no-pad-bot">
		<h3 class="sub-title center info-title"><span class="light">Nuestros</span> <b>Valores</b></h3>
	      <div class="container">
	      	<article class="row valign-wrapper">
	      		<div class="col s12 m1 offset-m2 l1 offset-l2">
	      			<img class="responsive-img" src="{{URL::asset('img/icons/inspire.png')}}" width="100">
	      		</div>
	      		<div class="valign">
					  <h5 style="padding-left: 1em" class="inspirar-text"><b>INSPIRAR: </b>
					  <br>
					  <span class="light">Líderes de diferentes sectores comparten perspectivas, dialogan sobre las problemáticas del país e incentivan a los jóvenes a tomar acción.</span></h5>
	      		</div>
	      	</article>
		  </div>

		  <div class="container"> 
			<article class="row valign-wrapper">
	      		<div class="col s12 m1 offset-m2 l1 offset-l2">
	      			<img class="responsive-img" src="{{URL::asset('img/icons/engage.png')}}" width="100">
	      		</div>
	      		<div class="valign">
					  <h5 style="padding-left: 1em" class="inspirar-text"><b>INVOLUCRAR: </b>
					  <br>
					  <span class="light">Aliados de la organización dictan talleres con temáticas específicas que motivan el intercmbio de ideas, discusión y síntesis de una problemática.</span></h5>
	      		</div>
	      	</article>
		  </div>

		  <div class="container">
			<article class="row valign-wrapper">
	      		<div class="col s12 m1 offset-m2 l1 offset-l2">
	      			<img class="responsive-img" src="{{URL::asset('img/icons/act.png')}}" width="100">
	      		</div>
	      		<div class="valign">
					  <h5 style="padding-left: 1em" class="inspirar-text"><b>ACTUAR: </b>
					  <br>
					  <span class="light">Los jóvenes son desafiados a crear una iniciativa innovadora o a mejorar proyectos ya existentes. Los jóvenes tendrá la oportunidad de crear o innovar.</span></h5>
	      		</div>
	      	</article>	
		  </div>
	    </div>
	    <div class="parallax"><img src="{{URL::asset('img/bg/call_to_action.jpg')}}" alt="Unsplashed background img 1"></div>
	</div>
		</div>
</section>
<!-- /Ponentes -->

<!-- Y4GG-->
<section class="hide-on-small-only">
	<div class="parallax-overlay">
	<div id="y4gg" class="parallax-container parallax-container-y4gg">
	    <div class="section no-pad-bot">
		    <div class="container-fluid center">
			      	<div class="row valign-wrapper">
			      		<div class="col s12 m4 l4">
				      		<h4 class="header col s12 light">
					        	<p class="y4ggcont wow fadeIn" data-wow-delay="0.4s">Este evento <b>contribuye</b> a</p>
				            </h4>
			      		</div>
			      		<div class="col s12 m6 l6">
				      		<div class="ods-image">
				      			<img src="{{URL::asset('img/logo/y4gg.png')}}" width="180" alt="" style="margin-bottom: 20px">
				      		</div>	      			
			      		</div>
			      	</div>
		    </div>
		    <div class="parallax"><img src="{{URL::asset('img/bg/support.jpg')}}" alt="Unsplashed background img 1"></div>
		</div>
	</div>
</section>
<!-- /Y4GG -->

<!-- Y4GG Mobile -->
<section class="container-fluid blue lighten-4 hide-on-med-and-up">
	<article class="row" style="margin-bottom: 0px !important">
		<div class="col s12">
			<h4 class="header light center">
				<p class="y4ggcont wow fadeIn" data-wow-delay="0.4s">Este evento <b>contribuye</b> a</p>
			</h4>
		</div>
		<div class="col s12">
			<div class="center ods-image whitespace-large">
				<img src="{{URL::asset('img/logo/y4gg.png')}}" width="180" alt="" style="margin-bottom: 20px">
			</div>
		</div>
	</article>
</section>
<!-- /Y4GG Mobile -->

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
	      				<img class="responsive-img" src="{{URL::asset('img/agenda/inspirar.png')}}" alt="">
	      			</div>
	      			<div class="row">
	      				<img class="responsive-img" src="{{URL::asset('img/agenda/involucrar.png')}}" alt="">
	      			</div>
	      			<div class="row">
	      				<img class="responsive-img" src="{{URL::asset('img/agenda/actuar.png')}}" alt="">
	      			</div>
	      		</div>
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
	      					<img class="responsive-img" src="{{URL::asset('img/agenda/inspirar_m.png')}}" alt="" width="300">
	      			</div>
	      			<div class="row">
	      				<img class="responsive-img" src="{{URL::asset('img/agenda/involucrar_m.png')}}" alt="" width="300">
	      			</div>
	      			<div class="row">
	      				<img class="responsive-img" src="{{URL::asset('img/agenda/actuar_m.png')}}" alt="" width="300">
	      			</div>
	      	</div>
	      </div>
	    </div>
	    <div class="parallax"><img src="{{URL::asset('img/bg/ysf.jpg')}}" alt="Unsplashed background img 1"></div>
	</div>
	</div>
</section>
<!-- /Agenda -->
<!--Partners-->
<section class="container-fluid section" id="partners">
    <article class="container y-azul-text">
        <h4 class="center-align light">Youth Speak Forum es <b>organizado</b> por</h4>
        <div class="row center">
            <article class="col s12 m4 offset-m4 l4 offset-l4">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/aiesec.png')}}" alt=""></div>
			</article>

        </div>
        <h4 class="center-align light"><b>Coorganiza:</b></h4>
        <div class="row section center">
            <article class="col s12 m6 l6">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/logousil1.png')}}" alt=""></div>
            </article>
            <article class="col s12 m6 l6 margin-top-20">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/logo-vprs.png')}}" alt=""></div>
            </article>
        </div>

        <h4 class="center-align light"><b>Gracias a:</b></h4>
		<div class="row section center">
			<article class="col s12 m2 offset-m2 l2 offset-l3">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/AFP Prima.png')}}" alt=""></div>
        	</article>
			<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/Logo Calidda-02-2.png')}}" alt=""></div>
        	</article>
			<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/Me Uno Backus.jpg')}}" alt=""></div>
        	</article>
        	<!-- <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/cabify.jpg')}}" alt=""></div>
        	</article> -->
		</div>
        <div class="row section center">
        	<article class="col s12 m2 offset-m1 l2 offset-l1">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/aldeasinfantiles.png')}}" alt=""></div>
        	</article>
        	<article class="col s12 m2 l2">
                <div><img class="responsive-img margin" src="{{URL::asset('img/logo/aliados/auspicio/voluntades.png')}}" alt=""></div>
        	</article>
        	<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/techo.png')}}" alt=""></div>
        	</article>
        	<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/movitar.png')}}" alt=""></div>
        	</article>
        	<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/LogoTheMillennialsMovement-2-1.png')}}" alt=""></div>
        	</article>
		</div>
		<div class="row section center">
        	<article class="col s12 m2 offset-m2 l2 offset-l2">
                <div><img class="responsive-img padding-35" src="{{URL::asset('img/logo/aliados/auspicio/logonutrieducate.png')}}" alt=""></div>
        	</article>
        	<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/PROA-LOGO.png')}}" alt=""></div>
        	</article>
        	<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/Logotipo EnseñaPerú-Altas-01-3.png')}}" alt=""></div>
        	</article>
			<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/AFP Habitat.png')}}" alt=""></div>
        	</article>
		</div>
		

        <!-- <h4 class="center-align whitespace-short light"><b>Participan:</b></h4>
        <div class="row section center">
            <article class="col s12 m2 offset-m2 l2 offset-l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/techo.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/wwf.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/yaqua.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/crea.jpg')}}" alt=""></div>
            </article>
		</div>
		<div class="row section center">
            <article class="col s12 m2 offset-m2 l2 offset-l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/sunedu.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/minam.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/midis.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/onu.jpg')}}" alt=""></div>
            </article>
		</div>
		<div class="row section center">
            <article class="col s12 m2 offset-m2 l2 offset-l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/latamStartups.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/Unacem.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/microsoft.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/abe.jpg')}}" alt=""></div>
            </article>
		</div>
		<div class="row section center">
            <article class="col s12 m2 offset-m2 l2 offset-l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/champs.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/care.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/alto.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/wit.jpg')}}" alt=""></div>
            </article>
		</div>
		<div class="row section center">
            <article class="col s12 m2 offset-m2 l2 offset-l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/ashanti.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/inppares.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/ifmsa.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/rua.jpg')}}" alt=""></div>
            </article>
		</div>
		<div class="row section center">
            <article class="col s12 m2 offset-m2 l2 offset-l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/senaju.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/wwl.jpg')}}" alt=""></div>
            </article>
            <article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/participan/plastic.jpg')}}" alt=""></div>
            </article>
		</div> -->
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