<?php
$filestream = fopen( 'manifesto.txt', 'r' )
or die( 'Невозможно открыть файл!' ) ;
while( !feof( $filestream ) )
{
  echo fgets( $filestream ).'<br>' ;
}
fclose( $filestream ) ;