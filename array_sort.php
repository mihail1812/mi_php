<?php
    $array = array('а', 'ж', 'г', 'б', 'е', 'в', 'з');
    echo $array[1], '<br>';

    # implode() - преобразует массив в строку и добавляет определенный разделитель после каждого значения
       
    $csv_list = implode(', ', $array);
    echo $csv_list, '<br>';

    # explode() - преобразует строку в массив

    $array = explode(', ', $csv_list);

    # is_array() - позволяет убедиться, является ли переменная массивом
    echo is_array($array), '<br>';  


    // Сортировка по возрастанию
    # sort() - сортировка по значению с отбрасыванием исходного ключа
    # asort() - сортировка по значению с сохранением исходного ключа
    # ksort() - сортировка по ключу

    sort($array);
    echo $array[1], '<br>';

    // Сортировка по возрастанию
    # rsort() - сортировка по значению с отбрасыванием исходного ключа
    # arsort() - сортировка по значению с сохранением исходного ключа
    # krsort() - сортировка по ключу

    rsort($array);
    echo $array[1], '<br>';

    # count() - подсчет количества элементов в массиве

    $num = count($array);
    echo $num, '<br>';

    // Пример сортировки
    $cars = array( 'УАЗ' => 'Патриот' , 'ГАЗ' => 'Сайбер' , 'ВАЗ' => 'Нива' ) ;
    echo '<dl><dt>Исходный порядок элементов:<dd>' ;
    foreach( $cars as $key => $value ) { echo ' &bull; ' , $key . ' ' . $value ; } 
    asort( $cars ) ;
    echo '<dt>Сортировка по значению:<dd>' ;
    foreach( $cars as $key => $value ) { echo ' &bull; ' , $key . ' ' . $value ; }  
    ksort( $cars ) ;
    echo '<dt>Сортировка по ключу:<dd>' ;
    foreach( $cars as $key => $value ) { echo ' &bull; ' , $key . ' ' . $value ; } 
    echo '</dl>' ;

