<?php
require('fpdf/fpdf.php');
include("fonction/db.class.php");
 
$y_axis_initial = 40;
$x_axis_initial = 10;
 
//création du nouveau fichier pdf
$pdf=new FPDF();
//Désactivation du saut de ligne
$pdf->SetAutoPageBreak(false);
//Ajout de la premiere page
$pdf->AddPage();

//Connexion à la base
$bdd = new PDO('mysql:host=localhost;port=3308;dbname=recipedb;charset=utf8', 'root', '');
$id_article=$_GET['id_article'];
$sql = "SELECT title, content, duree, persons, etapes, user_image FROM recipe WHERE id = '$id_article'";
$stmt = $bdd->query($sql);
$row =  $stmt->fetch(PDO::FETCH_ASSOC);
// Définition des variables à insérer dans les champs
$title = $row['title'];
$content = $row['content'];
$duree = $row['duree'];
$persons = $row['persons'];
$user_image = $row['user_image'];
file_put_contents('user_image',$user_image);

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->SetY(45);
$pdf->SetX(10);
$pdf->Cell(40,8,'duree:'.' '.$duree,1,0,'C',1);

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->SetY(45);
$pdf->SetX(60);
$pdf->Cell(40,8,'Difficulte',1,0,'C',1);

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->SetY(45);
$pdf->SetX(110);
$pdf->Cell(40,8,'Personnes:'.' '.$persons,1,0,'C',1);


$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->SetY(45);
$pdf->SetX(160);
$pdf->Cell(40,8,'Prix',1,0,'C',1);


$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->SetY(165);
$pdf->SetX(35);
$pdf->Cell(40,8,'Ingredients',1,0,'C',1);

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->SetY(165);
$pdf->SetX(135);
$pdf->Cell(40,8,'Etapes',1,0,'C',1);
// insertion de Titre à utiliser pour add les autres champs de la bdd
$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->SetY(15);
$pdf->SetX(80);
$pdf->Cell(50,6,'titre :'.' '.$title,1,0,'L',1);

// $pdf->SetFillColor(232,232,232);
// $pdf->SetFont('Arial','B',12);
// $pdf->SetY(15);
// $pdf->SetX(80);
// $pdf->Image($user_image,65 ,90,-200, -200,'jpeg');

// $pdf->Image($user_image,60,30,90,0,);

//test insertion image 
$pdf->SetFont('Arial','B',12);
$pdf->Image('accueil/picture/carap.jpg',65 ,90,-200, -200);
//insertion ligne 
$pdf->Line(200, 35, 10, 35);
$pdf->Line(200, 80, 10, 80);
$pdf->Line(200, 160, 10, 160);
$pdf->Line(105, 165, 105, 290);

//Synopsis
// $pdf->SetFillColor(232,232,232);
// $pdf->SetY($y_axis_initial + 5);
// $pdf->SetX(120);
// $pdf->MultiCell(80,8,utf8_decode($title), 'LRTB', 'L', 1);

//Date de parution
// $pdf->SetFont('Arial','B',12);
// $pdf->SetY(45);
// $pdf->SetX(15);

// $pdf->multiCell(70,8,'Date de parution :'.'  '.$content, 'LRTB', 'J', 1);



$bdd = null;
 
$pdf->Output();
?>