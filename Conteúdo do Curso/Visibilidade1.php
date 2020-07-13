<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curdo de POO</title>
</head>
<body>
    <?php
    require_once 'Visibilidade2.php';
    $c1 = new Caneta;
    $c1 -> cor = "Azul";
    $c1 -> modelo = "BIC";  
    
    $c1->rabiscando();

    var_dump($c1);

    ?>
</body>
</html>