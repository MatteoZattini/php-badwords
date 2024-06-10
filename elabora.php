<?php
    $nome = $_GET["nome"];
    $cognome = $_GET["cognome"];
    $nomecognome = $nome . " " . $cognome
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
</body>
</html>