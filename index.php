<?php 
require_once "Rectangle.php";
require_once "TriangleRectangle.php";
require_once "Cercle.php";
require_once "Pave.php";
require_once "Pyramide.php";
require_once "Sphere.php";



echo "<br>-------------------------Rectangle----------------------------<br>";
echo "<br>--------------------------------------------------------------<br>";
$rectangle1 = new Rectangle(5,10);
$rectangle2 = new Rectangle(5,5);
$rectangle1->DonneesRectangle();
echo "<br>--------------------------------------------------------------<br>";
$rectangle2->DonneesRectangle();

echo "<br>--------------------------------------------------------------<br>";
echo Rectangle::Perimetre(5,10);
echo Rectangle::Aire(5,10);
echo Rectangle::estCarre(5,10);
echo Rectangle::estCarre(5,5);

echo "<br>-------------------TriangleRectangle--------------------------<br>";
echo "<br>--------------------------------------------------------------<br>";
echo Rectangle::Perimetre(5,10);
echo Rectangle::Aire(5,10);

echo "<br>--------------------------------------------------------------<br>";
$Trectangle1 = new TriangleRectangle(10,20);
$Trectangle2 = new TriangleRectangle(5,5);
$Trectangle1->DonneesTRectangle();
echo "<br>--------------------------------------------------------------<br>";
$Trectangle2->DonneesTRectangle();
echo "<br>--------------------------Cercle------------------------------<br>";
echo "<br>--------------------------------------------------------------<br>";
echo Cercle::Perimetre(5);
echo Cercle::Aire(5);

echo "<br>--------------------------------------------------------------<br>";
$cercle1 = new Cercle(5);
$cercle2 = new Cercle(10);
$cercle1->DonneesCercle();
echo "<br>--------------------------------------------------------------<br>";
$cercle2->DonneesCercle();

echo "<br>--------------------------Pave--------------------------------<br>";
echo "<br>--------------------------------------------------------------<br>";
echo Cercle::Perimetre(5);
echo Cercle::Aire(5);

echo "<br>--------------------------------------------------------------<br>";
$pave1 = new Pave(5,10,5);
$pave2 = new Pave(30,15,10);
$pave1->DonneesPave();
echo "<br>--------------------------------------------------------------<br>";
$pave2->DonneesPave();

echo "<br>------------------------Pyramide------------------------------<br>";
echo "<br>--------------------------------------------------------------<br>";
echo Pyramide::AirePyramide(5);
echo Pyramide::VolumePyramide(5,5);

echo "<br>--------------------------------------------------------------<br>";
$pyramide1 = new Pyramide(5,10);
$pyramide2 = new Pyramide(30,15);
$pyramide1->DonneesPyramide();
echo "<br>--------------------------------------------------------------<br>";
$pyramide2->DonneesPyramide();

echo "<br>------------------------Sphere------------------------------<br>";
echo "<br>--------------------------------------------------------------<br>";
echo Sphere::AireSphere(5);
echo Sphere::VolumeSphere(5,5);

echo "<br>--------------------------------------------------------------<br>";
$sphere1 = new Sphere(5);
$sphere2 = new Sphere(30);
$sphere1->DonneesSphere();
echo "<br>--------------------------------------------------------------<br>";
$sphere2->DonneesSphere();
?>