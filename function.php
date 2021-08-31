<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Функции</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h3>Функции</h3>
    <p>В языке PHP имена переменных чувствительны к регистру, а имена функций нет</p>
    <p>Синтаксис:</p>
    <p>function имя_функции () {
        <br>&nbsp &nbsp выполняемая_инструкция;
        <br> &nbsp &nbsp выполняемая_инструкция;
        <br> &nbsp &nbsp выполняемая_инструкция;
        <br>}
    </p>
    <p>Вызов:</p>
    <p>имя_функции();</p>

    <?php
    function greet()
    {
        echo 'Hi, user! <br>';
    }
    function outer()
    {
        function inner()
        {
            echo 'Вложенная функция вызвана<br>';
        }
        echo 'Вложенная функция создана<br> ';
    }

    greet();
    outer(); //Если ее не вызвать, inner тоже не сработает, выскочит ошибка
    inner();
    ?>
    <h3>Передача аргументов</h3>
    <p>Параметры указываются при объявлении функции после ее имени в скобках, в виде списка инструкций, разделенных запятыми. Значения аргументов передаются функции при вызове в виде списка значений, разделенных запятыми</p>
    <p>function имя_функции ($параметр_1, $параметр_2, $параметр_3) {
        <br>&nbsp &nbsp выполняемая_инструкция;
        <br> &nbsp &nbsp выполняемая_инструкция;
        <br> &nbsp &nbsp выполняемая_инструкция;
        <br>}
    </p>

    <?php

    $a = $b = 5;

    function modify(int $val, int &$ref)  //ОБРАТИ ВНИМАНИЕ $val - значение переменной, &$ref - ссылка на переменную
    {
        echo "Переданные значения: $val , $ref<br>";
        $val++;
        $ref++;
        echo "Инкрементированные значения: $val , $ref<hr>";
    }

    modify($a, $b);

    echo "Сохраненные значения: $a , $b";
    echo '&nbsp-     Смотри комментарии в коде!'
    ?>

    <h3>Параметры функции</h3>
    <p>Если необходимо создать функцию, принимающую неизвестное (переменное) количество аргументов, в РНР используют специальный символ многоточия (оператор ...). Он указывается в определении функции следующим образом:</p>
    <p>function имя_функции (...$параметры) {
        <br>&nbsp &nbsp выполняемая_инструкция;
        <br> &nbsp &nbsp выполняемая_инструкция;
        <br> &nbsp &nbsp выполняемая_инструкция;
        <br>}
    </p>
    <p>Кроме того оператор ... может быть использован для "распаковки" массива,указанного в вызове функции, и передачи значений его элементов в виде отдельных аргументов следующим образом:</p>
    <p>function имя_функции ($параметр_1, $параметр_2, $параметр_3) {
        <br>&nbsp &nbsp echo $параметр_1 + $параметр_2 + $параметр_3;
        <br>}
        <br>$arr = [1, 2, 3];
        <br>имя_функции(...$arr) //Вывод:6
    </p>

    <?php
    function drink(string $tmp = 'горячий', string $flavor = 'чай')
    {
        echo "Пейте $tmp $flavor.<br>";
    }
    drink();
    drink('холодный');
    drink('охлажденный', 'лимонад');
    function add(int ...$numbers)
    {
        $total = 0;
        foreach ($numbers as $num) {
            $total += $num;
        }
        echo "<hr>Итого: $total";
    }
    add(1, 2, 3);
    ?>

    <h3>Область видимости</h3>
    <p>В языке РНР глобальные переменные могут использоваться в функциях, только если сначала объявлены внутри блока функции с помощью ключевого слова global</p>
    <p>global имя_переменной</p>
    <p>Статическая переменная существует только в локальной области видимости функции, но не теряет своего значения, когда выполнение программы выходит из этой области видимости.</p>
    <p>static имя_переменной</p>

    <?php
    $number = 1;
    echo "Глобальное число: $number<br>";
    function show_local()
    {
        $number = 100;
        echo "Локальное число: $number<hr>";
    }
    show_local();
    function recur()
    {
        global $number;
        static $letter = 'A';
        if ($number < 35) {
            echo "$number:$letter | ";
            $letter++;
            $number++;
            recur();
        }
    }
    recur();
    echo "<hr>Глобальное число: $number";
    ?>
    <p>В языке РНР доступен спецальный массив $GLOBALS, который содержит ссылки на все переменные глобальной области видимости. Можно использовать код $GLOBALS['number'], чтобы получить значение переменной</p>
    <h3>Возврат значений</h3>
    <p>function имя_функции () {
        <br>&nbsp &nbsp выполняемая_инструкция;
        <br> &nbsp &nbsp выполняемая_инструкция;
        <br> &nbsp &nbsp return значение;
        <br>}
    </p>
    <p>Инструкция return необязательна, и если она не указана, то по умолчанию функции возвращают вызывающей программе значение NULL.</p>
    <p>function имя_функции ():int #Вернет значение только определенного типа: int, float, string, bool или array
        <br>{
        <br>&nbsp &nbsp выполняемая_инструкция;
        <br> &nbsp &nbsp выполняемая_инструкция;
        <br> &nbsp &nbsp return значение;
        <br>}
    </p>
    <p>Пример:</p>
    <?php
    function supply(): array
    {
        return array(75, 3.142, 'Супер PHP', True);
    }
    $array = supply();
    foreach ($array as $data) {
        echo "Значение элемента: $data<br>";
    }
    ?>
    <h3>Обратный вызов</h3>
    <p>function () { #АНОНИМНАЯ ФУНКЦИЯ
        <br>&nbsp &nbsp выполняемая_инструкция;
        <br> &nbsp &nbsp выполняемая_инструкция;
        <br> &nbsp &nbsp return значение;
        <br>}; КАЖДОЕ ОПРЕДЕЛЕНИЕ АНОНИМНОЙ ФУНКЦИИ ДОЛЖНО ЗАКАНЧИВАТЬСЯ ТОЧКОЙ С ЗАПЯТОЙ
    </p>
    <p>Пример:</p>
    <?php
    $hello = function ($user) {
        echo "Привет, $user!<br>";
    };

    $hello('Михаил');

    function greet_1(callable $anon)
    {
        $anon('Катя');
    }

    greet_1($hello);

    function meet(): callable
    {
        $time = 'утро';
        return function ($name) use (&$time) {
            return "Доброе $time, $name!";
        };
    }
    $meeting = meet();
    echo $meeting('Вика');
    ?>
    <p>Использование ключевого слова use и префикса & позволяет анонимной функции ссылаться на локальную переменную в возвращающей функции</p>





</body>

</html>