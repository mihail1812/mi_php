<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP - Подстроки</title>
</head>
<body>
<?php
$str = 'SQL in easy steps features SQL queries' ;
echo "'$str'<br>'SQL' счетчик: ".substr_count( $str , 'SQL' ) ;
echo '<hr>Позиция 27: '.substr( $str , 27 ) ; 
echo '<hr>Позиция 4, длина 13: '.substr( $str , 4, 13 ) ;
$sub = 'PHP & MySQL' ;
$str = substr_replace( $str, $sub , 0 , 3 ) ;
echo "<hr>'$str'" ;
?> 
</body>
</html>