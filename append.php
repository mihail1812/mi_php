<?php
$info = "\r\n\r\n\tБаллада Рэдингской тюрьмы" ;
$info .= "\r\n\t\t\tОскар Уайльд, 1898" ;
$filename = 'poem.txt' ;
$filestream = fopen( $filename , 'a' )
or die( 'Невозможно открыть файл!' ) ;
$num = fwrite( $filestream , $info ) ;
if( $num )
{
  echo "$num байт добавлено в файл $filename" ;
}
fclose( $filestream ) ;