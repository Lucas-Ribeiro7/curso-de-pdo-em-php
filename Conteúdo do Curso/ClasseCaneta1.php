<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curdo de POO</title>
</head>
<body>
    <?php
    require_once 'ClasseCaneta2.php';
    $c1 = new Caneta;
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->destampar();
    
    $c1->rabiscando();

    var_dump($c1);

    $c2 = new Caneta;
    $c2->cor = "Azul";
    $c2->ponta = 0.5;
    $c2->tampar();
    
    $c2->rabiscando();

    var_dump($c2);

    ?>
</body>
</html>