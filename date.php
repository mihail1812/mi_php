<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP - Дата</title>
</head>
<body>
<?php
echo 'Дата: '.date( 'jS F Y' ).'<br>' ;
echo 'День недели: '.date( 'l' ).'<br>' ;
echo 'Время: '.date( 'h:i:s' ).'<br>' ;
echo 'Часовой пояс: '.date_default_timezone_get().'<hr>' ;
date_default_timezone_set( 'Europe/Moscow' ) ;
echo 'Текущий часовой пояс: '.date_default_timezone_get() ;
echo '<br>Текущее время: '.date( 'h:i:s' ).'<hr>' ;
$d = strtotime( 'tomorrow' ) ;
echo 'Завтра: '.date( 'l, jS F Y' , $d ).'<br>' ;
$d = strtotime( 'August 18, 1979' ) ;
echo 'День рождения Михаила: '.date( 'jS F', $d ) ;
?>
<br>
<br>
<br>
<a href="https://www.php.net/manual/ru/function.date.php">Документация (Подробнее)</a>
</body>
</html>