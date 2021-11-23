<?php
include("config.php");
require('pdfgenerate/fpdf.php');


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'Report',0,0);
$pdf->Cell(59	,5,'DigiBook',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'[Street Address]',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'[City, Country, ZIP]',0,0);
$pdf->Cell(25	,5,'Date',0,0);
$pdf->Cell(34	,5,'[dd/mm/yyyy]',0,1);//end of line

$pdf->Cell(130	,5,'Phone [+12345678]',0,0);
$pdf->Cell(25	,5,'Invoice #',0,0);
$pdf->Cell(34	,5,'[1234567]',0,1);//end of line

$pdf->Cell(130	,5,'Fax [+12345678]',0,0);
$pdf->Cell(25	,5,'Customer ID',0,0);
$pdf->Cell(34	,5,'[1234567]',0,1);//end of line




// here we fetch the most rated books
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130	,5,'Most rated Books',1,0);
$pdf->Cell(25	,5,'Your Rate',1,0);
$pdf->Cell(34	,5,'All Users',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter
$pdf->Cell(130	,5,'Your Rate',1,0);
$pdf->Cell(25	,5,'Your Rate',1,0);
$pdf->Cell(34	,5,'-',1,1,'R');//end of line



// here we have a report on librarian, names and how many books they have added so far
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130	,5,'books added by librarian',1,0);
$pdf->Cell(25	,5,'Your Rate',1,0);
$pdf->Cell(34	,5,'All Users',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter
$pdf->Cell(130	,5,'Your Rate',1,0);
$pdf->Cell(25	,5,'Your Rate',1,0);
$pdf->Cell(34	,5,'-',1,1,'R');//end of line



//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130	,5,'books report by category',1,0);
$pdf->Cell(25	,5,'N* of books',1,0);
$pdf->Cell(34	,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter


$pdf->Cell(130	,5,'Something Else',1,0);
$pdf->Cell(25	,5,'-',1,0);
$pdf->Cell(34	,5,'1,000',1,1,'R');//end of line

//summary
$pdf->Cell(130	,5,'',0,0);
$pdf->Cell(25	,5,'Books Total',0,0);
$pdf->Cell(4	,5,'$',1,0);
$pdf->Cell(30	,5,'4,450',1,1,'R');//end of line





















$pdf->Output();


?>