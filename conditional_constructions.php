<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP - Инструкция switch</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <h class="3 menu__h2">If</h>


    <h class="3 menu__h2">Switch</h>
    <p>
    $number = 2 ;<br>
    $letter = 'Б' ;<br>
    switch ( $number )<br>
    &nbsp{<br>
        &nbsp&nbspcase 1 : echo 'Единица' ; break ;<br>
        &nbsp&nbspcase 2 : echo 'Двойка' ; break ;<br>
        &nbsp&nbspcase 3 : echo 'Тройка' ; break ;<br>
        &nbsp&nbspdefault : echo 'Неизвестное число' ;<br>
    &nbsp}<br>
    switch ( $letter )<br>
    &nbsp{<br>
        &nbsp&nbspcase 'А' : echo 'Буква "А"' ; break ;<br>
        &nbsp&nbspcase 'Б' : echo 'Буква "Б"' ; break ;<br>
        &nbsp&nbspcase 'В' : echo 'Буква "В"' ; break ;<br>
        &nbsp&nbspdefault : echo 'Неизвестная буква' ;<br>
    &nbsp}<br>
    switch ( $number )<br>
    &nbsp{<br>
        &nbsp&nbspcase 0 : case 1 : case 2 : echo 'Меньше, чем 3' ; break ;<br>
        &nbsp&nbspdefault : echo '3 или больше, либо меньше нуля' ;<br>
    &nbsp} <br>
    </p>
    <p>Вывод:</p>
<?php
$number = 2 ;
$letter = 'Б' ;
switch ( $number )
{
  case 1 : echo 'Единица<br>' ; break ;
  case 2 : echo 'Двойка<br>' ; break ;
  case 3 : echo 'Тройка<br>' ; break ;
  default : echo 'Неизвестное число<br>' ;
}
switch ( $letter )
{
  case 'А' : echo 'Буква "А"<br>' ; break ;
  case 'Б' : echo 'Буква "Б"<br>' ; break ;
  case 'В' : echo 'Буква "В"<br>' ; break ;
  default : echo 'Неизвестная буква<br>' ;
}
switch ( $number )
{
  case 0 : case 1 : case 2 : echo 'Меньше, чем 3<br>' ; break ;
  default : echo '3 или больше, либо меньше нуля' ;
}
?>
</body>
</html>