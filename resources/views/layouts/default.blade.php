<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>YouthSpeak Forum</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!--ext-->
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<!--int-->
	<link rel="stylesheet" href="{{URL::asset('css/materialize.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
	<link rel="shortcut icon" href="{{URL::asset('css/font-awesome.min.css')}}" />
	<link rel="icon" sizes="192x192" href="{{URL::asset('img/logo/favicon_azul.png')}}">
	<!--Custom-->
	@yield('css')
</head>
<body>
	<!--MENU-->
	<nav class="ys-azul bg-nav" role="navigation">
	    <div class="nav-wrapper container">
	      <a id="logo-container" href="/" class="brand-logo"><img src="{{URL::asset('img/logo/favicon.png')}}" width="48px"></a>
	      <ul class="right hide-on-med-and-down">
	        <li><a href="#about" class="white-text">Acerca de YSF</a></li>
	        <li><a href="#info" class="white-text">Información</a></li>
	        <li><a href="#metodologia" class="white-text">Metodología</a></li>
	        <li><a href="#programa" class="white-text">Programa</a></li>
	        <li><a href="#ponentes" class="white-text">Ponentes</a></li>
	        <li><a href="https://podio.com/webforms/17985408/1208462" target="_blank" class="white-text"><b>Adquiere tu entrada</b></a></li>
	      </ul>

	      <ul id="nav-mobile" class="side-nav y-azul">
	        <li><a href="#about" class="white-text">Acerca de YSF</a></li>
	        <li><a href="#info" class="white-text">Información</a></li>
	        <li><a href="#metodologia" class="white-text">Metodología</a></li>
	        <li><a href="#programa" class="white-text">Programa</a></li>
	        <li><a href="#ponentes" class="white-text">Ponentes</a></li>
	        <li><a href="#aliados" class="white-text">Aliados</a></li>
	        <li><a href="https://podio.com/webforms/17985408/1208462" target="_blank" class="white-text"><b>Adquiere tu entrada</b></a></li>
	      </ul>
	      <a href="#" data-activates="nav-mobile" class="button-collapse right"><i class="white-text material-icons">menu</i></a>
	    </div>
	</nav>

	@yield('content')

	<!--FOOTER-->
	<footer class="page-footer">
		<div class="container">
            <div class="row">
              	<div class="col s12 l8">
                	<h5 class="white-text">#YouthSpeakForum <br> <br>#JovenesPorLosODS</h5>
                	<p class="grey-text text-lighten-4">Un lugar donde la inspiración y la colaboración se convierten en acción.</p>
              	</div>

              	<div class="col s12 l1"></div>

              	<div class="col s12 l3">
                	<h5 class="white-text">Síguenos</h5>
                	<ul class="white-text list-social">
                  		<li class="list-social-item"><a href="https://www.facebook.com/AIESECPeru" target="_blank"><i class="white-text fa fa-facebook fa-2x" aria-hidden="true"></a></i></li>
                  		<li class="list-social-item"><a href="https://www.youtube.com/user/AIESECPeru" target="_blank"><i class="white-text fa fa-youtube-play fa-2x" aria-hidden="true"></a></i></li>
                  		<li class="list-social-item"><a href="https://www.instagram.com/aiesecenperu/" target="_blank"><i class="white-text fa fa-instagram fa-2x"></a></i></li>
                  		<li class="list-social-item"><a href="https://twitter.com/AIESEC_PERU" target="_blank"><i class="white-text fa fa-twitter fa-2x"></a></i></li>
                	</ul>
              	</div>
            </div>
      	</div>
      	<div class="footer-copyright">
        	<div class="container">
        	Powered proudly by AIESEC
        	</div>
      	</div>
    </footer>
    <!-- /FOOTER-->
	
	@yield('js')
	
	<script>
		(function($){
  			$(function(){
	            $('.button-collapse').sideNav({
	            	edge:'right'
	            });
    			$('.parallax').parallax();		
  			}); // end of document ready
		})(jQuery); // end of jQuery name space
	</script>
	<!-- Custom -->
</body>
</html>