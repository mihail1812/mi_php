<?php
$filestream = fopen( 'poem.txt' , 'w' ) 
or die( 'Невозможно открыть файл!' ) ;
fwrite( $filestream , 'Файл перезаписан!' ) ;
fclose( $filestream ) ;