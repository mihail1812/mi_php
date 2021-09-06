<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP - Сущности</title>
</head>
<body>
<?php
$html = '<script>window.location="index.html"</script>' ;
$html = htmlspecialchars( $html ) ;
echo $html ;
?>
<p>*Посмотри что выдает dev-tools element -> edit HTML</p>
</body>
</html>