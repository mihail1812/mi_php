<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP - Циклы while</title>
</head>
<body>
<dl>
<?php
$numbers = array( 10 , 20 , 30 ) ;
echo '<dt>Цикл while: Проверяет условие, потом выполняет действия' ;
$i = 0 ;
while ( $i < 3 )
{
  echo "<dd>Элемент $i = $numbers[$i]";
  $i++ ;
}
echo '<dt>Цикл do while: Выполняет действия, потом проверяет условия' ;
$i = 0 ;
do
{
  echo "<dd>Элемент $i = $numbers[$i]";
  $i++ ;
}
while ( $i < 3 ) ;
?>
<p>break - прерывает выполнение цикла</p>
<p>continue - можно испоьзовать, чтобы пропустить итерацию цикла</p>
</dl>
</body>
</html>