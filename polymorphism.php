<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP - Полиморфизм</title>
</head>
<body>
<?php
interface Shape
{
	public function area() ;
}
class Polygon
{
	private $width , $height ;
	function __construct( int $w = 4 , int $h = 5 )
	{
		$this->width = $w ;
		$this->height = $h ;
	} 
	public function getWidth() { return $this->width ; }
	public function getHeight() { return $this->height ; }
}
class Rectangle extends Polygon implements Shape
{
	public function area() { return ( $this->getWidth() * $this->getHeight() ) ; }
}
class Triangle extends Polygon implements Shape
{
	public function area() { return ( $this->getWidth() * $this->getHeight() / 2 ) ; }
}
function getArea( Shape $shape )
{
	   return $shape->area() ;
}
$rect = new Rectangle( 8 , 10 ) ;
$trio = new Triangle( 8 , 10 ) ;
echo 'Площадь прямоугольника: '.getArea($rect).'<hr>' ;
echo 'Площадь треугольника: '.getArea($trio) ;
?> 
</body>
</html>