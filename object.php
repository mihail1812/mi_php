<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTf-8">
<title>PHP - Объекты</title>
</head>
<body>
<?php
class Dog
{
	private $age ;
	private $weight ;
	private $color ;

	public function bark() { echo 'ГАВ! ГАВ! <br>'; }

	public function setAge( int $yrs ) { $this->age = $yrs ; }
	public function setWeight( int $lbs ) { $this->weight = $lbs ; }
	public function setColor( string $fur ) { $this->color = $fur ; }

	public function getAge() { return $this->age ; } 
	public function getWeight() { return $this->weight ; }
	public function getColor() { return $this->color ; }
}
$fido = new Dog();
$fido->setAge( 3 );
$fido->setWeight( 15 );
$fido->setColor( 'коричневого' );
echo 'Шерсть Фидо '.$fido->getColor().' цвета<br>' ;
echo 'Фидо '.$fido->getAge().' года<br>' ;
echo 'Фидо весит '.$fido->getWeight().' кг<br>' ;
$fido->bark();
?> 
</body>
</html>