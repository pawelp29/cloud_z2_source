<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Cloud App</title>
</head>
<body>
    <h1>Programowanie fullstack w chmurze obliczeniowej</h1>
    <h2>Zadanie 2</h2>
    <h3>Autor: Paweł Pańczyk</h3>
    <?php
    $version = getenv('APP_VERSION');
    ?>
    <h4>Wersja: <?php echo $version ?></h4>
</body>
</html>
