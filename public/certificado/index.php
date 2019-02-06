<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Generar Certificado - Foro Perú Hacia 2030</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<style>
			.y-azul{
				background-color: #06436A;
			}
			.title{
				color: white;
			}
			.btn-sub{
				display: block;
				margin: 1em auto 0;
			}
		</style>
	</head>	
	<body class="container">
		<div class="page-header">
			<h2 class="text-center">Coloca tu DNI/Pasaporte para buscar tu certificado del Foro Perú Hacia 2030</h2>		
		</div>
		<div class="jumbotron center-block y-azul">
			<form action="seeker.php" method="post" class="text-center">
				<p class="title">DNI/Pasaporte: <br></p>
				<input type="text" name="dni" />
				<button type="submit" class="btn btn-lg btn-info btn-sub">Buscar Certificado</button>
			</form>
		</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>