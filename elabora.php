<?php
    $nome = $_GET["nome"];
    $cognome = $_GET["cognome"];
    $censura = $_GET["censura"];
    $testolungo = $_GET["testolungo"];
    $censurato = str_replace("$censura","***","$censura");
    $nomecognome = $nome . " " . $cognome;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello, <?php echo $nome . " " . $cognome ?></h1>
    <h1>Hello, <?php echo $nomecognome ?></h1>
    <!-- funziona anche con le virgole -->
    <h1>Hello, <?php echo ucfirst($nome) , " " , ucfirst($cognome) ?></h1> 
    <h1>Hello, <?php echo ucfirst($nomecognome) ?></h1>
    <h1>Hello, <?php echo strlen($nome) , " " , strlen($cognome) ?></h1>
    <h1>Hello, <?php echo strlen($nomecognome) ?></h1>
    <hr>
    <h1><?php echo strlen($censura) ?></h1>
    <h1><?php echo str_replace("$censura","***","$censura") ?></h1>
    <h1><?php echo strlen($censurato) ?></h1>
    <hr>
    <h1><?php echo strlen($testolungo) ?></h1>
    <h1><?php echo str_replace(["chiesa","dio"],"***","$testolungo") ?></h1>
</body>
</html>