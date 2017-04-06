@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
@stop

@section('content')
<section class="container-fluid">
	<article class="row section">
		<div class="col s12 m8 l8">
			<div class="video-container center">
				<iframe title="Envivo" src="http://envivo.pucp.edu.pe/embed/dars" frameborder="0" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
			</div>
		</div>
		<div class="col s12 m4 l4 hide-on-small-only center">
           <a href="https://www.youtube.com/channel/UCezZ6Efs9A8-gp9HMVMeSJA?sub_confirmation=1" target="_blank" id="download-button" style="width: 400px;margin-bottom: 1.5em" class="btn-large waves-effect waves-light red darken-2">Suscríbete a nuestro canal</a>
        	<a class="twitter-timeline"  href="https://twitter.com/hashtag/YSF2017" data-widget-id="849988812784586753">Tweets sobre #YSF2017</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>          
		</div>
	</article>	
</section>
@stop