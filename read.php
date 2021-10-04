<?php
$filestream = fopen( 'manifesto.txt' , 'r' ) 
or die( 'Невозможно открыть файл!' ) ;
echo fread( $filestream , filesize( 'manifesto.txt' ) ) ;
fclose( $filestream ) ;