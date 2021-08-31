<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Строки</title>
</head>

<body>
    <h1>Сравнение символов</h1>
    <h2>strcmp</h2>
    <p><a href="https://www.php.net/manual/ru/function.strcmp.php">strcmp() — Бинарно-безопасное сравнение строк</a> Принимает два строковых аргумента для сравнения и возвращает одно из трех целочисленных значений в зависимости от результата</p>
    <h2>strncmp</h2>
    <p><a href="https://www.php.net/manual/ru/function.strncmp">strncmp() — Бинарно-безопасное сравнение первых n символов строк</a> Работает аналогичным образом, но принимает третий целочисленный аргумент, позволяющий указать количество символов с начала строк для сравнения
    </p>
    <h2>strcasecmp и strncasecmp</h2>
    <p><a href="https://www.php.net/manual/ru/function.strcasecmp">strcasecmp() — Бинарно-безопасное сравнение строк без учёта регистра</a></p>
    <p><a href="https://www.php.net/manual/ru/function.strncasecmp">strncasecmp() — Бинарно-безопасное сравнение первых n символов строк без учёта регистра</a></p>
    <h2>Пример:</h2>
    <?php
    $str1 = 'PHP для начинающих';
    $str2 = 'PHP для начинающих';
    $str3 = 'PHP Для Начинающих';
    $str4 = 'php для начинающих';
    echo "'$str1' в сравнении с '$str2' : " . strcmp($str1, $str2) . '<br>';
    echo "'$str1' в сравнении с '$str3' : " . strcmp($str1, $str3) . '<br>';
    echo "'$str1' в сравнении с '$str4' : " . strcmp($str1, $str4) . '<hr>';
    echo 'Сравнение без учета регистра:<br>';
    echo "'$str1' в сравнении с '$str4' : " . strcasecmp($str1, $str4);
    $total = 0;
    for ($i = 0; $i < strlen($str1); $i++) {
        $total += ord($str1[$i]);
    }
    echo "<hr>Объем ASCII-кода '$str1' : $total";
    ?>
    <p><a href="https://www.php.net/manual/ru/function.strlen">strlen — Возвращает длину строки</a></p>
    <p><a href="https://www.php.net/manual/ru/function.ord">ord — Конвертирует первый байт строки в число от 0 до 255</a></p>
    <p>Порядок символов не играет роли для общего объема ASCII кода: две строки с разным порядком слов (или букв) будут эквивалентны в плане объема кода, но не будут соответствовать друг другу.
    </p>

</body>

</html>