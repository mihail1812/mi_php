<?php
$filestream = fopen( 'title.txt' , 'r' ) 
or die( 'Невозможно открыть файл!' ) ;
while( $char = fgetc( $filestream ) )
{
  echo $char.' * ' ;
}
fclose( $filestream ) ;