<?php
require_once('class/Form2d.php');
require_once('class/Rectangle.php');
require_once('class/Carre.php');
require_once('class/Ellipse.php');
require_once('class/PaintSvg.php');
require_once('class/Circle.php');
require_once('class/Polygon.php');

$svg = '';
$paint = new PaintSvg;
$rectangle = new Rectangle(10,50);

$rec1 = $rectangle;
$rec1->getPoint()->setX(200);
$rec1->getPoint()->setY(200);

$carre = new Carre(50);
$carre->getPoint()->setX(100);
$carre->getPoint()->setY(300);

$ellipse = new Ellipse(20, 10);
$ellipse->getPoint()->setX(100);
$ellipse->getPoint()->setY(500);

$circle = new Circle(20);
$circle->getPoint()->setX(500);
$circle->getPoint()->setY(100);

$polygon = new Polygon();

$polygon->addPoints(100,10);
$polygon->addPoints(40,198);
$polygon->addPoints(190,78);
$polygon->addPoints(10,78);
$polygon->addPoints(160,198);
$polygon->setFillColor('lime');
$polygon->setFillRule(true);

$triangle = new Polygon();
$triangle->addPoints(1,1);
$triangle->addPoints(42,30);
$triangle->addPoints(82,59);

$paint->addForm($rec1);
$paint->addForm($carre);
$paint->addForm($ellipse);
$paint->addForm($circle);
$paint->addForm($polygon);
$paint->addForm($triangle);


$svg = $paint->render();




include('tpl/index.phtml');