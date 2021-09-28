<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP - Инициализация</title>
</head>
<body>
<?php
class Dog
{
	private $age ;
	private $weight ;
	private $color ;
	public function bark() { echo 'ГАВ! ГАВ! <br>'; }
	public function setValues( int $yrs = 2 , int $lbs = 8 , string $fur = 'черного ' ) 
	{ 
		$this->age = $yrs ; 
		$this->weight = $lbs ;
		$this->color = $fur ;
	}
	public function getAge() { return $this->age ; } 
	public function getWeight() { return $this->weight ; }
	public function getColor() { return $this->color ; }
}
$fido = new Dog();
$fido->setValues( 3 , 15 , 'коричневого' );
echo 'Шерсть Фидо '.$fido->getColor().' цвета<br>' ;
echo 'Фидо '.$fido->getAge().' года<br>' ;
echo 'Фидо весит '.$fido->getWeight().' кг<br>' ;
$fido->bark();

$pooch = new Dog() ;
$pooch->setValues( 4 , 18 , 'серого ' ) ;
echo'<hr>Дворняжка: '.$pooch->getAge().' года ';
echo $pooch->getWeight().' кг '.$pooch->getColor();
$pooch->bark();

$rover = new Dog() ;
$rover->setValues() ;
echo'<hr>Рык: '.$rover->getAge().' года ';
echo $rover->getWeight().' кг '.$rover->getColor();
$rover->bark();
?> 
</body>
</html>