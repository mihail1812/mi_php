<?php
define( 'USER' , 'Михаил' ) ; #создание константы define('name', 'значение')
define( 'PETS' , [ 'котенок' , 'щенок', 'хомячок' ] ) ;
echo '<p>Привет, ' . USER . '. Как поживает твой ' . PETS[1] . '?</p>' ;
echo '<p>Ты используешь PHP-движок версии ' . PHP_VERSION ;
echo ', запущенный в ' . PHP_OS . '</p>' ;
?>
    