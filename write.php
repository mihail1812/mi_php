<?php
$filename = 'poem.txt' ;
$poem = "\r\n\tНет, не смотрел никто из нас" ;
$poem .= "\r\n\tС такой тоской в глазах" ;
$poem .= "\r\n\tНа лоскуток голубизны" ;
$poem .= "\r\n\tВ тюремных небесах" ;
$filestream = fopen( $filename , 'w' )
or die( 'Невозможно открыть файл!' ) ;
$num = fwrite( $filestream , $poem ) ;
if( $num )
{
  echo "$num байт записано в файл $filename" ;
}
fclose( $filestream ) ;