<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Generar Certificado - Youth Speak Forum</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>	
	<body>
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
	
<?php 
	mb_internal_encoding('UTF-8');
	mb_http_output('UTF-8');
	
	if(isset($_POST['dni'])){
		if(!empty($_POST['dni'])){
			$str = $_POST['dni'];
			//$strDNI = mysql_real_escape_string($str);
			$strDNI = $str;

			$connection = mysql_connect('localhost','aiesecor_mainu','itSuPtOYou2015');
			mysql_set_charset('utf8',$connection);
			mysql_select_db('aiesecor_main');

			$query = "SELECT *
			FROM registro_asistentes
			WHERE DNI LIKE '$strDNI'";

			$result=mysql_query($query);
			$extraido=mysql_fetch_array($result);
			$extraidoNombre = $extraido['Nombre'];
			$extraidoCategoria = $extraido['Categoria'];
			
			mysql_close($connection);
			
			if (!empty($extraidoNombre)){
				print '<div class="container">';
				print '<div class="page-header text-center">';
					print "<h3>El DNI o pasaporte <b>".$strDNI."</b> está asociado al siguiente nombre:</h3>";
				print '</div>';
				print '<div class="jumbotron text-center y-azul">';
				print "<p class='title'>".$extraidoNombre."</p>";
				print
					"
					<form action='certificate.php' method='post' accept-charset='utf-8'>
						<p><input type='hidden' name='nombre' value='".htmlspecialchars(addslashes($extraidoNombre),ENT_QUOTES)."'/></p>
						<p><input type='hidden' name='categoria' value='".htmlspecialchars(addslashes($extraidoCategoria),ENT_QUOTES)."'/></p>
						<p><button onclick='history.go(-1);' class='btn btn-lg btn-warning'>Volver </button>
						<input class='btn btn-lg btn-success' type='submit' value='Generar Certificado'/></p>
					</form>";
				print '</div>';
				print '</div>';
			} else {
				print '<div class="container" style="margin-top: 1em">';
				print '<div class="alert alert-danger" role="alert">';
					print "<p>No se ha encontrado algún certificado asociado al DNI: <b>".$_POST['dni']."</b></p>";        
      			print '</div>';
				print "<p><button onclick='history.go(-1);'>Back </button></p>";
				print '</div>';
			}
		} else {
			print '<div class="container" style="margin-top: 1em">';
			print '<div class="alert alert-danger" role="alert">';
				print "<p>Favor de ingresar un DNI válido</p>";
			print '</div>';
				print "<p><button onclick='history.go(-1);'>Back </button></p>";
		}
	}
?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
