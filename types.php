<?php

//Типы дынных

$filestream = fopen( 'index.html' , 'r' ) ;
$data = array( 'PHP', 1, 2.3, TRUE, NULL, array(), new Directory, $filestream,  );
foreach( $data as $type )
{
  var_dump( $type ) ;  # Проверяет тип данных элемента, и выводит структурированную информацию о них, включая тип и значение
  echo '<br>';
}
fclose( $filestream ) ;
echo gettype( $filestream ) ; // показывает тип данных любого элемента

?> 