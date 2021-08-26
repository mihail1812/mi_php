<!DOCTYPE html>
<html lang="en">

<head>

    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            margin-left: 30px;
        }
    </style>
</head>

<body>
    <h3 class="menu__h2">Арифметические операторы</h3>
    <p>Арифметические операторы применяются для выполнения действий с числами.</p>
    <p><span style="color: #000080;">+</span>&nbsp;&nbsp;&nbsp;&nbsp;— оператор сложения;<br>
        <span style="color: #000080;">—</span>&nbsp;&nbsp;&nbsp;&nbsp;— оператор вычитания;<br>
        <span style="color: #000080;">/</span>&nbsp;&nbsp;&nbsp;&nbsp;— оператор деления;<br>
        <span style="color: #000080;">*</span>&nbsp;&nbsp;&nbsp;&nbsp;— оператор умножения;<br>
        <span style="color: #000080;">%</span>&nbsp;&nbsp;&nbsp;&nbsp;— оператор получения остатка при делении;<br>
        <span style="color: #000080;">++</span>&nbsp;&nbsp;&nbsp;&nbsp;— оператор увеличения на единицу (инкремент);<br>
        <span style="color: #000080;">— —</span>&nbsp;&nbsp;&nbsp;&nbsp;— оператор уменьшения на единицу (декремент);<br>
        
    </p>
    <hr>
    <h3 class="menu__h2">Поразрядные операторы</h3>
    <p>Поразрядные операторы предназначены для работы с двоичными данными. Если кто-то не представляет что это такое — объясню. Двоичные числа — это числа типа 1001000011100000111000.</p>
    <p><span style="color: #000080;">&amp;</span>&nbsp;&nbsp;&nbsp;&nbsp;— поразрядное соединение И (and);<br>
        <span style="color: #000080;">~</span>&nbsp;&nbsp;&nbsp;&nbsp;— поразрядное отрицание (not);<br>
        <span style="color: #000080;">|</span>&nbsp;&nbsp;&nbsp;&nbsp;— поразрядное объединение ИЛИ (or);<br>
        <span style="color: #000080;">^</span>&nbsp;&nbsp;&nbsp;&nbsp;— поразрядное исключение ИЛИ (xor);<br>
        <span style="color: #000080;">&lt;&lt;</span>&nbsp;&nbsp;&nbsp;&nbsp;— сдвиг влево битового значения операнда;<br>
        <span style="color: #000080;">&gt;&gt;</span>&nbsp;&nbsp;&nbsp;&nbsp;— сдвиг вправо битового значения операнда;
    </p>
    <hr>
    <h3 class="menu__h2">Операторы сравнения</h3>
    <p><span style="color: #000080;">&gt;</span> &nbsp;&nbsp;&nbsp;&nbsp;— оператор больше;<br>
        <span style="color: #000080;">=&gt;</span> &nbsp;&nbsp;&nbsp;&nbsp;— оператор больше или равно;<br>
        <span style="color: #000080;">&lt; </span> &nbsp;&nbsp;&nbsp;&nbsp;— оператор меньше;<br>
        <span style="color: #000080;">&lt;=</span> &nbsp;&nbsp;&nbsp;&nbsp;— оператор меньше или равно;<br>
        <span style="color: #000080;">== </span>&nbsp;&nbsp;&nbsp;&nbsp;— оператор равенство;<br>
        <span style="color: #000080;">!= </span>&nbsp;&nbsp;&nbsp;&nbsp;— оператор неравенство;<br>
        <span style="color: #000080;">=== </span>&nbsp;&nbsp;&nbsp;&nbsp;— оператор эквивалентности (равны значение и тип переменной);<br>
        <span style="color: #000080;">!== </span>&nbsp;&nbsp;— оператор неэквивалентности;
        <span style="color: #000080;"><=></span>&nbsp;&nbsp;&nbsp;&nbsp;— оператор "Спейсшип" - возвращает 1, если первый операнд больше второго, -1, если  первый операнд меньше второго, или 0, если оба операнда равны.
    </p>

    <p>
        PHP функция var_dump() используется для просмотра типа и значения результатов сравнения, выполненных с помощью любого оператора
    </p>
    <?php
        $zero = 0 ;
        $nil = 0 ;
        $one = 1 ;
        $upr = 'A' ;
        $lwr = 'a' ;
        echo "0 == 0 : " ; var_dump($zero == $nil) ; 
        echo "<br>0 == 1 : " ; var_dump($zero == $one) ;
        echo "<br>A == a : " ; var_dump($upr == $lwr) ;
        echo "<br>A != a : " ; var_dump($upr != $lwr) ;
        echo "<hr>1 > 0 : " ; var_dump($one > $nil) ;
        echo "<br>0 >= 0 : " ; var_dump($zero >= $nil) ;
        echo "<br>1 <= 0 : " ; var_dump($one <= $nil) ;
        echo "<hr>1 <=> 0 : " ; var_dump($one <=> $nil) ;
        echo "<br>1 <=> 1 : " ; var_dump($one <=> $one) ;
        echo "<br>0 <=> 1 : " ; var_dump($nil <=> $one) ;
    ?>
    <p>
        Условный оператор, ?: (тернарный): <br>
        (проверочное выражение)? результат-если-истинно: результат-если-ложно;<br><br>

        Пример: <br><br>
        $number = 2;<br>
            $verb = ($number == 1)? 'угадали': 'не угадали';<br>
            echo "Вы $verb! Вы назвали число $number";<br><br>
        <?php
            $number = 2;
            $verb = ($number == 1)? 'угадали': 'не угадали';
            echo "Вы $verb! Вы назвали число $number";
            ?>
    </p>
    <hr>
    <h3 class="menu__h2">Логические операторы</h3>
    <p><span style="font-family:Consolas;">&amp;&amp;</span> &nbsp;&nbsp;&nbsp;&nbsp;— соединительный союз И;<br>
        <span style="font-family:Consolas;">and</span> &nbsp;&nbsp;&nbsp;&nbsp;— тоже И, но с меньшим приоритетом;<br>
        <span style="font-family:Consolas;">||</span> &nbsp;&nbsp;&nbsp;&nbsp;— разделительный союз ИЛИ;<br>
        <span style="font-family:Consolas;">or</span> &nbsp;&nbsp;&nbsp;&nbsp;— тоже ИЛИ, но с меньшим приоритетом;<br>
        <span style="font-family:Consolas;">xor</span> &nbsp;&nbsp;&nbsp;&nbsp;— исключающее один элемент ИЛИ;<br>
        <span style="font-family:Consolas;">!</span> &nbsp;&nbsp;&nbsp;&nbsp;— отрицание;
    </p>

    
</body>

</html>