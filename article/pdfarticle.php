<?php
require('fpdf/fpdf.php');
include("php/db_connect.php");
 
$row_height = 1;
$y_axis= 12;
 
//création du nouveau fichier pdf
$pdf=new FPDF();
 
//Désactivation du saut de ligne
$pdf->SetAutoPageBreak(false);
 
//Ajout de la premiere page
$pdf->AddPage();
 
//set initial y axis position per page
$y_axis_initial = 30;
 
//print column titles
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->SetY($y_axis_initial);
$pdf->SetX(25);
$pdf->Cell(30,6,'id_movie',1,0,'L',1);
$pdf->Cell(100,6,'title_movie',1,0,'L',1);
$pdf->Cell(30,6,'synopsis_movie',1,0,'R',1);
 
$y_axis = $y_axis + $row_height;
 
//Select the Products you want to show in your PDF file
$sql = 'SELECT id_movie, title_movie, synopsis_movie FROM movie';


$bdd = connexion::db_connect(); 
$stmt = $bdd->query($sql);
 
 
//initialize counter
$i = 0;
//Set maximum rows per page
$max = 10;
 //Set Row Height
$row_height = 10;
 
while($row =  $stmt->fetch(PDO::FETCH_ASSOC))

{
    //If the current row is the last one, create new page and print column title
    if ($i == $max)
    {
        $pdf->AddPage();
        //print column titles for the current page
        $pdf->SetY($y_axis_initial);
        $pdf->SetX(25);
        $pdf->Cell(39,6,'id_movie',1,0,'L',1);
        $pdf->Cell(100,6,'title_movie',1,0,'L',1);
        $pdf->Cell(30,6,'synopsis_movie',1,0,'R',1);
 
        //Go to next row
        $y_axis = $y_axis + $row_height;
 
        //Set $i variable to 0 (first row)
        $i = 0;
    }
 
    $id = $row['id_movie'];
    $title = $row['title_movie'];
    $synopsis = $row['synopsis_movie'];
 
    $pdf->SetY($y_axis);
    $pdf->SetX(50);
    $pdf->Cell(30,6,$id,1,0,'L',1);
    $pdf->Cell(100,6,$title,1,0,'L',1);
    $pdf->Cell(30,6,$synopsis,1,0,'R',1);
 
    //Go to next row
    $y_axis = $y_axis + $row_height;
    $i = $i + 1;
}
 
$bdd = null;
 
$pdf->Output();
?>