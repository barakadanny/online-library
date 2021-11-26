<?php
include("config.php");
require('pdfgenerate/fpdf.php');

// all queries are here
// query to fetch admin info
$admin_query = mysqli_query($con, "SELECT * FROM admins");
$admin= mysqli_fetch_array($admin_query);

// query to fetch books and librarian
$librarian_query = mysqli_query($con, "SELECT * FROM librarian") or die(mysqli_error($con));

// query to select genre
$genre_query = mysqli_query($con, "SELECT * FROM genre") or die(mysqli_error($con));

// query to select languages
$language_query = mysqli_query($con, "SELECT * FROM language") or die(mysqli_error($con));

// query to count books
    $book_sql ="SELECT * FROM book";
    $book_result= mysqli_query($con, $book_sql);
    $book_rowcount= mysqli_num_rows($book_result);

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

$pdf->Cell(130	,5,$admin['admin_email'],0,0);
$pdf->Cell(59	,5,'',0,1);//end of line





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

$pdf->Cell(130	,5,'Librarian Name',1,0);
$pdf->Cell(59	,5,'books added',1,1);
//$pdf->Cell(34	,5,'-',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter
while($librarian= mysqli_fetch_array($librarian_query)){
    $single_librarian = $librarian['librarian_ID'];
    // query to select all books from a certain librarian
    $books_query= mysqli_query($con, "SELECT * FROM book WHERE librarian_ID='$single_librarian' ");
    $books_count = mysqli_num_rows($books_query);

    $pdf->Cell(130	,5,$librarian['librarian_name'],1,0);
    $pdf->Cell(59	,5,$books_count,1,1,'R');
    //$pdf->Cell(34	,5,'-',1,1,'R');//end of line

}



//make a dummy empty cell as a vertical spacer
// report on books category
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130	,5,'books report by Genre',1,0);
$pdf->Cell(59	,5,'N* of books',1,1);
//$pdf->Cell(34	,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

while($genre=mysqli_fetch_array($genre_query)){
    $single_genre= $genre['genre_ID'];
// query to select books by genre
    $books_query= mysqli_query($con, "SELECT * FROM book WHERE genre_ID='$single_genre' ");
    $books_count = mysqli_num_rows($books_query);

    $pdf->Cell(130	,5,$genre['genre_name'],1,0);
    $pdf->Cell(59	,5,$books_count,1,1,'R');
    //$pdf->Cell(34	,5,,1,1,'R');//end of line
}
//summary
$pdf->Cell(105	,5,'',0,0);
$pdf->Cell(25	,5,'Books Total',0,0);
$pdf->Cell(59	,5,$book_rowcount,1,1,'R');//end of line



//make a dummy empty cell as a vertical spacer
// report on books Language
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130	,5,'books report by Language',1,0);
$pdf->Cell(59	,5,'N* of books',1,1);
//$pdf->Cell(34	,5,'Amount',1,1);//end of line

$pdf->SetFont('Arial','',12);

//Numbers are right-aligned so we give 'R' after new line parameter

while($lang=mysqli_fetch_array($language_query)){
    $language= $lang['language_ID'];
// query to select books by genre
    $books_query= mysqli_query($con, "SELECT * FROM book WHERE language_ID='$language' ");
    $books_count = mysqli_num_rows($books_query);

    $pdf->Cell(130	,5,$lang['language_name'],1,0);
    $pdf->Cell(59	,5,$books_count,1,1,'R');
    //$pdf->Cell(34	,5,,1,1,'R');//end of line
}
//summary
$pdf->Cell(105	,5,'',0,0);
$pdf->Cell(25	,5,'Books Total',0,0);
$pdf->Cell(59	,5,$book_rowcount,1,1,'R');//end of line









$pdf->Output();


?>