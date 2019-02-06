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
	
			$connection = mysql_connect('localhost','aiesecor_mainu','itSuPtOYou2015');
			mysql_set_charset('utf8',$connection);
			mysql_select_db('aiesecor_main');

            //add
            		
			mysql_close($connection);
	}
?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>
