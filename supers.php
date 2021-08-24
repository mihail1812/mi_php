
<?php
echo 'Веб-сервер: '.$_SERVER[ 'SERVER_SOFTWARE' ].'<br>' ;
echo 'Сценарий: '.$_SERVER[ 'PHP_SELF' ].'<br>';
echo 'Имя хоста: '.$_SERVER[ 'HTTP_HOST' ].'<br>' ;
echo 'Метод запроса: '.$_SERVER[ 'REQUEST_METHOD' ] ;
foreach( $_GET as $key => $value )
{
  echo '<hr>HTTP GET: '.$key.'='.$value ;
}
echo '<hr>';
print_r($GLOBALS); # GLOBALS - ассоциативный массив, содержащий ссылки на все переменные, которые в настоящее время определены в глобальной области видимости сценария, в зависимости от контекста
?>
