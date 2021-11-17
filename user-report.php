<?php
include("includes/config.php");
require('pdfgenerate/fpdf.php');

// get the id of the user
$id = (int)$_GET['user_ID'];

// all queries are here
// query to fetch the name and mail address of the current user
$user_query=mysqli_query($con, "SELECT * FROM user WHERE user_ID='$id' ");
$user=mysqli_fetch_array($user_query);

// query to fetch rated books
$rating_query=mysqli_query($con, "SELECT * FROM book INNER JOIN raiting ON book.book_ID=raiting.book_ID WHERE user_ID='$id' ") or die( mysqli_error($con));



$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'USER REPORT',0,0);
$pdf->Cell(59	,5,'DigiBook',0,1);//end of line

//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);


//make a dummy empty cell as a vertical spacer
//$pdf->Cell(189	,10,'',0,1);//end of line


//add dummy cell at beginning of each line for indentation
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$user['user_name'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$user['user_email'],0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//here we fetch the rated books
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130	,5,'Rated Books',1,0);
$pdf->Cell(25	,5,'Your Rate',1,0);
$pdf->Cell(34	,5,'All Users',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter
while($rating= mysqli_fetch_array($rating_query)){
    $pdf->Cell(130	,5,$rating['book_title'],1,0);
    $pdf->Cell(25	,5,$rating['rating_star'].' /5',1,0);
    $pdf->Cell(34	,5,'-',1,1,'R');//end of line
}



// here we will fetch books that have been viewed by the user
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130	,5,'Viewed Books',1,0);
$pdf->Cell(25	,5,'Your Rate',1,0);
$pdf->Cell(34	,5,'All Users',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter
$pdf->Cell(130	,5,'Your Rate',1,0);
$pdf->Cell(25	,5,'Your Rate',1,0);
$pdf->Cell(34	,5,'-',1,1,'R');//end of line






$pdf->Output();

?>