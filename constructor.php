<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>PHP - Конструктор</title>
</head>

<body>
	<?php
	class Dog
	{
		private $age;
		private $weight;
		private $color;
		public function bark()
		{
			echo 'ГАВ! ГАВ! <br>';
		}
		function __construct(int $yrs = 2, int $lbs = 8, string $fur = 'черного ')
		{
			$this->age = $yrs;
			$this->weight = $lbs;
			$this->color = $fur;
		}
		function __destruct()
		{
			echo 'Объект уничтожен!  ';
		}

		public function getAge()
		{
			return $this->age;
		}
		public function getWeight()
		{
			return $this->weight;
		}
		public function getColor()
		{
			return $this->color;
		}
	}
	$fido = new Dog(3, 15, 'коричневого');
	echo 'Шерсть Фидо ' . $fido->getColor() . ' цвета<br>';
	echo 'Фидо ' . $fido->getAge() . ' года<br>';
	echo 'Фидо весит ' . $fido->getWeight() . ' кг<br>';
	$fido->bark();
	$pooch = new Dog(4, 18, 'серого ');
	echo '<hr>Дворняжка: ' . $pooch->getAge() . ' года ';
	echo $pooch->getWeight() . ' кг ' . $pooch->getColor();
	$pooch->bark();
	$rover = new Dog();
	echo '<hr>Рык: ' . $rover->getAge() . ' года ';
	echo $rover->getWeight() . ' кг ' . $rover->getColor();
	$rover->bark();
	$items = get_class_vars('Dog');
	echo '<br>Переменные класса Dog: ' . count($items);
	echo '<br>Методы класса Dog: ';
	$items = get_class_methods('Dog');
	foreach ($items as $item) {
		echo "$item, ";
	}
	#echo '<hr>' ;
	?>
</body>

</html>