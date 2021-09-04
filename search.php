<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $str = 'Most Users usually find PHP useful.';
    echo "'$str'<br>Длина строки: " . strlen($str);
    echo "<br>Первое вхождение 'us': " . strpos($str, 'us');
    echo "<br>Последнее вхождение 'us': " . strrpos($str, 'us');
    echo "<hr>Подстрока от первого вхождения 'us': " . strstr($str, 'us');
    echo "<br>Подстрока от первого вхождения 'us' без учета регистра: " . stristr($str, 'us');
    echo "<hr>Символы от первого вхождения 'u': " . strchr($str, 'u');
    echo "<br>Символы от последнего вхождения 'u': " . strrchr($str, 'u');
    ?>
</body>

</html>