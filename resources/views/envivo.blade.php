@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
<link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">
@stop

@section('content')
<section class="container-fluid">
	<article class="row section">
		<div class="col s12 m8 offset-m2 l8 offset-l2">
			<div class="video-container center">
				<iframe title="Envivo" src="http://envivo.pucp.edu.pe/embed/dars" frameborder="0" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"></iframe>
			</div>
		</div>
	</article>	
@stop

