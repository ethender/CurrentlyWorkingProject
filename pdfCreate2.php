<?php
	require("fpdf/fpdf.php");
	$pdf = new FPDF();

	$pdf->AddPage();
	$pdf->SetFont("Arial","B","20");
	$pdf->cell(0,10,"hello,world");
	$pdf->Output();
?>
