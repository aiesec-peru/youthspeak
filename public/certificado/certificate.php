<?php
	mb_internal_encoding('UTF-8');
	mb_http_output('UTF-8');

	header('Content-Type: text/plain; charset=utf-8');

	require("fpdf/fpdf.php");
	require("fpdi/fpdi.php");
	
	$height = 112;
	
	$strNombre = stripslashes(utf8_decode($_POST['nombre']));
	$strCategoria = stripslashes(utf8_decode($_POST['categoria']));

	$pdf=new FPDI('L','mm','A4');
	
	
	if($strCategoria == "1"){ // Certificado para Asistente
		$pageCount = $pdf->setSourceFile("./cert/certificado.pdf");
	} else if ($strCategoria == "2"){ // Certificado para Organizador
		$pageCount = $pdf->setSourceFile("./cert/certificadoOrganizador.pdf");
	} else if ($strCategoria == "3"){ // Certificado para Expositor
		$pageCount = $pdf->setSourceFile("./cert/certificadoExpositor.pdf");
	}

	//$pageCount = $pdf->setSourceFile("certificado.pdf");
	$tplIdx = $pdf->importPage(1); 
	$pdf->addPage(); 
	$pdf->useTemplate($tplIdx, 0, 0, 0, 0); 
	//set position in pdf document 
	// now write some text above the imported page 
	$pdf->SetFont('Helvetica','B',25); 
	//$pdf->SetFontSize(25); 
	$pdf->SetTextColor(11,47,141); 
	$pdf->SetXY(10, $height);
	$pdf->Cell(0,0,$strNombre,0,0,'C'); 
	//$pdf->Write(0, "Renzo Mogrovejo");///print this output 
	$pdf->Output();
?>	
		