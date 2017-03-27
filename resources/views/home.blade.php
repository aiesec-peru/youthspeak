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
	        <img id="logo-principal" src="{{URL::asset('img/logo/logo.png')}}" alt="">
	        <h1 class="title-principal wow fadeInDown" data-wow-delay="0.1s">Americas Youth Speak Forum <br>2017</h1>
            <!--<h5 class="header col s12 light center">
	        	<p class="wow fadeIn" data-wow-delay="0.4s"><strong>Un lugar donde la inspiración y la <br>colaboración se convierten en acción</strong></p>
            </h5>-->
	        <div class="row center wow zoomIn" data-wow-delay="0.3s">
	         	<a href="https://podio.com/webforms/17985408/1208462" target="_blank" id="download-button" class="btn-large waves-effect waves-light modal-trigger y-celeste z-depth-3"><strong>Adquiere tu entrada</strong></a>
	      	</div>
	      </div>
	    </div>
	    <div class="parallax"><img src="{{URL::asset('img/bg/home.png')}}" alt="Unsplashed background img 1"></div>
	</div>
</section>
<!-- /Home -->

<!--Explain-->
<section class="container y-azul-text  section center"  id="about">
    <h3 class="y-azul-text whitespace-short sub-title-x">Un lugar donde la inspiración y la colaboración se convierten en acción a favor de los <b>Objetivos de Desarrollo Sostenible</b></h3>	
</section>
<!-- /Explain-->

<!--Video-->
<section class="container-fluid">
	<div class="video-container">
        <iframe width="853" height="480" src="//www.youtube.com/embed/foSu6LxGKrA?rel=0" frameborder="0" allowfullscreen></iframe>
      </div>
</section>
<!--/Video-->

<!--Explain 2-->
<section class="container y-azul-text section"  id="metodologia">
    <h3 class="y-azul-text whitespace-short sub-title center"><span class="light">Datos</span> <b>Generales</b></h3>
    <section>
		<article class="row">
			<div class="col s12 m5 offset-m2 l5 offset-l1 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/calendar.png')}}">
				<p class="valign padd-left"><b>Fecha:</b> Jueves 6 de Abril</p>
			</div>
			<div class="col s12 m5 l5 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/keynotes.png')}}">
				<p class="valign padd-left"><b>Charlas Magistrales:</b> 4</p>
			</div>
		</article>
		<article class="row">
			<div class="col s12 m5 offset-m2 l5 offset-l1 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/time.png')}}">
				<p class="valign padd-left"><b>Hora: </b>8am a 8pm</p>
			</div>
			<div class="col s12 m5 l5 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/workshops.png')}}">
				<p class="valign padd-left"><b>Talleres de ODS: </b>20 en simultáneo</p>
			</div>
		</article>
		<article class="row">
			<div class="col s12 m5 offset-m2 l5 offset-l1 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/place.png')}}">
				<p class="valign padd-left"><b>Lugar: </b>Polideportivo PUCP, Av. Universitaria 1801, San Miguel. Lima, Perú</p>
			</div>
			<div class="col s12 m5 l5 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/feria.png')}}">
				<p class="valign padd-left"><b>Feria de Responsabilidad Social: </b>15 stands</p>				
			</div>
		</article>
		<article class="row">
			<div class="col s12 m5 offset-m2 l5 offset-l1 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/capacity.png')}}">
				<p class="valign padd-left"><b>Capacidad: </b>800 asistentes</p>
			</div>
			<div class="col s12 m5 l5 valign-wrapper">
				<img class="responsive-img section" src="{{URL::asset('img/icons/data/include.png')}}">
				<p class="valign padd-left"><b>Incluye: </b>Almuerzo y Coffee Breaks</p></div>
		</article>
		<article class="row">
			<div class="col s12 m5 offset-m2 l5 offset-l1 valign-wrapper">
				<img class="responsive-img" src="{{URL::asset('img/icons/data/countries.png')}}">
				<p class="valign padd-left"><b>Países participantes: </b>20 países</p>
			</div>
		</article>
    </section>   
    <h3 class="y-azul-text whitespace-short sub-title center"><span class="light">Precio</span> <b>Entrada</b></h3>
    <section>
    	<article class="row">
    		<div class="col s12 m1 l1 center">
	      		<img class="responsive-img" src="{{URL::asset('img/icons/data/pricing.png')}}" alt="">
    		</div>
    		<div class="col s12 m3 l3 center">
    			<h5><b style="text-decoration: underline">1 al 15 de marzo</b></h5>
    			<h5 class="light">s/. 45</h5>
    		</div>
    		<div class="col s12 m4 l4 center">
    			<h5><b style="text-decoration: underline">16 al 31 de marzo</b></h5>
    			<h5 class="light">s/. 60</h5>
    		</div>
    		<div class="col s12 m3 l3 center">
    			<h5><b style="text-decoration: underline">1 al 2 de abril</b></h5>
    			<h5 class="light">s/. 75</h5>
    		</div>
    	</article>
    </section>
</section>
<!-- /Explain-->

<!-- Ponentes-->
<section>
	<div class="parallax-overlay">
	<div id="call_to_action" class="parallax-container parallax-container-info">
	    <div class="section no-pad-bot">
    	<h3 class="sub-title center info-title"><span class="light">Ponencias</span> <b>Magistrales</b></h3>
	      <div class="container">
	      	<article class="row valign-wrapper">
	      		<div class="col s12 m1 offset-m2 l1 offset-l2">
	      			<img class="responsive-img" src="{{URL::asset('img/icons/inspire.png')}}" width="100">
	      		</div>
	      		<div class="valign">
	      			<h5 style="padding-left: 1em" class="inspirar-text"><b>INSPIRAR: </b><span class="light">Líderes de diferentes sectores comparten perspectivas, dialogan <br>sobre las problemáticas del país e incentivan a los jóvenes a tomar acción.</span></h5>
	      		</div>
	      	</article>
			
			<article class="row">
				<div class="col s4 m3 l3 center">
                	<div><img class="responsive-img ponente-img" src="{{URL::asset('img/ponentes/nancy_lange.png')}}" alt=""></div>
                	<h5 class="title-ponentes"><b>Nancy Lange</b></h5>
                	<h6 class="title-ponentes">Primera Dama <br>de la Nación <br>- Gobierno del Perú -</h6>
            	</div>
            	<div class="col s4 m3 l3 center">
                	<div><img class="responsive-img ponente-img" src="{{URL::asset('img/ponentes/maria_sacasa.png')}}" alt=""></div>
                	<h5 class="title-ponentes"><b>Maria Sacasa</b></h5>
                	<h6 class="title-ponentes">Coordinadora Residente <br>de ONU Perú</h6>
            	</div>
            	<div class="col s4 m3 l3 center">
                	<div><img class="responsive-img ponente-img" src="{{URL::asset('img/ponentes/maria_eugenia_mujica.png')}}" alt=""></div>
                	<h5 class="title-ponentes"><b>María Eugenia Mujica</b></h5>
                	<h6 class="title-ponentes">Viceministra de Políticas <br> y Evaluación Social <br> - MIDIS -</h6>
            	</div>            	
			</article>
			<article class="row">				
				<div class="col s4 m3 offset-m3 l3 offset-l3 center">
                	<div><img class="responsive-img ponente-img" src="{{URL::asset('img/ponentes/brigette_allen.png')}}" alt=""></div>
                	<h5 class="title-ponentes"><b>Brigette Allen</b></h5>
                	<h6 class="title-ponentes">Directora de <br>Desarrollo Global <br>- Plastic Oceans -</h6>
            	</div>
            	<div class="col s4 m3 l3 center">
                	<div><img class="responsive-img ponente-img" src="{{URL::asset('img/ponentes/fernando_tamayo.png')}}" alt=""></div>
                	<h5 class="title-ponentes"><b>Fernando Tamayo</b></h5>
                	<h6 class="title-ponentes">Directo General y <br>Cofundador <br>- Yaqua -</h6>
            	</div>
            	<div class="col s4 m3 l3 center">
                	<div><img class="responsive-img ponente-img" src="{{URL::asset('img/ponentes/julie_andersen.png')}}" alt=""></div>
                	<h5 class="title-ponentes"><b>Julie Andersen</b></h5>
                	<h6 class="title-ponentes">Directora de <br>Operaciones <br>- Plastic Oceans -</h6>
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
<!-- /Ponentes -->

<!--Explain 2-->
<section class="container y-azul-text section">
    <h3 class="y-azul-text whitespace-short sub-title center"><b>Talleres</b></h3>
	<section>
		<article class="row valign-wrapper">
      		<div class="col s12 m2 l2">
      			<img class="responsive-img" src="{{URL::asset('img/icons/engage.png')}}" width="100">
      		</div>
      		<div class="valign">
      			<h5 class="padd-left"><b>INVOLUCRAR: </b><span class="light">Aliados de la organización dictan talleres con temáticas específicas que motivan el intercmbio de ideas, discusión y síntesis de una problemática.</span></h5>
      		</div>
      	</article>
      	<section>
      		<article class="row section">
      			<div class="col s12 m4 l4 whitespace-short">
      				<img class="responsive-img" src="{{URL::asset('img/workshops/1-1.jpg')}}">      				      				
      			</div>
      			<div class="col s12 m4 l4 whitespace-short">
      				<img class="responsive-img" src="{{URL::asset('img/workshops/3-1.jpg')}}">      				      				
      			</div>
      			<div class="col s12 m4 l4">
      				<img class="responsive-img" src="{{URL::asset('img/workshops/3-2.jpg')}}">      				      				
      			</div>
      		</article>
      		<article class="row section">
      			<div class="col s12 m4 l4 whitespace-short">
      				<img class="responsive-img" src="{{URL::asset('img/workshops/4-1.jpg')}}">      				      				
      			</div>
      			<div class="col s12 m4 l4 whitespace-short">
      				<img class="responsive-img" src="{{URL::asset('img/workshops/4-2.jpg')}}">      				      				
      			</div>
      			<div class="col s12 m4 l4 whitespace-short">
      				<img class="responsive-img" src="{{URL::asset('img/workshops/5-1.jpg')}}">      				      				
      			</div>
      		</article>
      		<article class="row section">
      			<div class="col s12 m4 l4">
      				<img class="responsive-img" src="{{URL::asset('img/workshops/10-1.jpg')}}">      				      				
      			</div>
      			<div class="col s12 m4 l4 whitespace-short">
      				<img class="responsive-img" src="{{URL::asset('img/workshops/13-1.jpg')}}">      				      				
      			</div>
      			<div class="col s12 m4 l4 whitespace-short">
      				<img class="responsive-img" src="{{URL::asset('img/workshops/13-2.jpg')}}">      				      				
      			</div>
      		</article>      		
      	</section>
	</section>
</section>
<!-- /Explain-->

<!-- Y4GG-->
<section class="hide-on-small-only">
	<div class="parallax-overlay">
	<div id="y4gg" class="parallax-container parallax-container-y4gg">
	    <div class="section no-pad-bot">
		    <div class="container-fluid center">
			      	<div class="row valign-wrapper">
			      		<div class="col s4 m4 l4">
				      		<h4 class="header col s12 light center">
					        	<p class="y4ggcont wow fadeIn" data-wow-delay="0.4s">Este evento <b>contribuye</b> a</p>
				            </h4>
			      		</div>
			      		<div class="col s4 m4 l4">
				      		<div class="center ods-image">
				      			<img src="{{URL::asset('img/logo/y4gg.png')}}" alt="">
				      		</div>	      			
			      		</div>
			      		<div class="col s4 m4 l4 valign">
			            	<a href="https://podio.com/webforms/17985408/1208462" target="_blank" id="download-button" class="btn-large waves-effect waves-light modal-trigger y-celeste z-depth-3"><strong>Adquiere tu entrada</strong></a>
			      		</div>
			      	</div>
		    </div>
		    <div class="parallax"><img src="{{URL::asset('img/bg/support.jpg')}}" alt="Unsplashed background img 1"></div>
		</div>
	</div>
</section>
<!-- /Y4GG -->

<!--Explain 3: Action-->
<section class="container y-azul-text section">
    <h3 class="y-azul-text whitespace-short sub-title center"><span class="light">Iniciativa</span> <b>por los ODS</b></h3>
	<section>
		<article class="row valign-wrapper">
      		<div class="col s12 m2 l2">
      			<img class="responsive-img" src="{{URL::asset('img/icons/act.png')}}" width="100">
      		</div>
      		<div class="valign">
      			<h5 class="padd-left"><b>ACTUAR: </b><span class="light">Los jóvenes son desafiados a crear una iniciativa innovadora o a mejorar proyectos ya existentes. Los jóvenes tendrá la oportunidad de crear o innovar.</span></h5>
      		</div>
      	</article>
      	<section>
      		<article class="row section">
      			<div class="col s12 m6 l6 whitespace-short">
      				<img class="responsive-img" src="{{URL::asset('img/facts/crear.jpg')}}">      				      				
      			</div>
      			<div class="col s12 m6 l6">
      				<img class="responsive-img" src="{{URL::asset('img/facts/innovar.jpg')}}">      				      				
      			</div>
      		</article>   		
      	</section>
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
	      					<img class="responsive-img" src="{{URL::asset('img/agenda/inspirar_m.png')}}" alt="" width="300">
	      			</div>
	      			<div class="row">
	      				<img class="responsive-img" src="{{URL::asset('img/agenda/involucrar_m.png')}}" alt="" width="300">
	      			</div>
	      			<div class="row">
	      				<img class="responsive-img" src="{{URL::asset('img/agenda/actuar_m.png')}}" alt="" width="300">
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

	
<!--Partners-->
<section class="container-fluid section" id="aliados">
    <article class="container y-azul-text">
        <h4 class="center-align light">Youth Speak Forum es <b>organizado</b> por</h4>
        <div class="row center">
            <article class="col s12 m4 offset-m4 l4 offset-l4">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/aiesec.png')}}" alt=""></div>
            </article>
        </div>
        <h4 class="center-align light"><b>Coorganiza:</b></h4>
        <div class="row section center">
            <article class="col s12 m3 l3">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/equipu.png')}}" alt=""></div>
            </article>
            <article class="col s12 m3 l3">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/onu.png')}}" alt=""></div>
            </article>
            <article class="col s12 m3 l3">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/dars.png')}}" alt=""></div>
            </article>
            <article class="col s12 m3 l3">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/pucp.png')}}" alt=""></div>
            </article>
        </div>

        <h4 class="center-align light"><b>Auspician:</b></h4>
        <div class="row section center">
        	<article class="col s12 m2 offset-m1 l2 offset-l1">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/tata.jpg')}}" alt=""></div>
        	</article>
        	<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/protacol.jpg')}}" alt=""></div>
        	</article>
        	<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/mapfre.jpg')}}" alt=""></div>
        	</article>
        	<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/enel.jpg')}}" alt=""></div>
        	</article>
        	<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/planet.jpg')}}" alt=""></div>
        	</article>
		</div>
		<div class="row section center">
        	<article class="col s12 m2 offset-m2 l2 offset-l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/talklist.jpg')}}" alt=""></div>
        	</article>
        	<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/nestle.jpg')}}" alt=""></div>
        	</article>
        	<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/cocacola.jpg')}}" alt=""></div>
        	</article>
        	<article class="col s12 m2 l2">
                <div><img class="responsive-img" src="{{URL::asset('img/logo/aliados/auspicio/cabify.jpg')}}" alt=""></div>
        	</article>
		</div>

        <h4 class="center-align whitespace-short light"><b>Participan:</b></h4>
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