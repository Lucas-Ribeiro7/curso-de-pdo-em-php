<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de POO</title>
</head>
<body>
    <?php
        require_once 'encapsulamento3.php';

        $c1 = new ControleRemoto;
        $c1->ligar();      
        $c1->play();
        $c1->maisVolume();
        $c1->maisVolume();
        $c1->menosVolume();
        $c1->ligarMudo();
        $c1->desligarMudo();
        $c1->pause();
        $c1->desligar();
        $c1->abrirMenu();
        
        var_dump($c1);

    ?>
</body>
</html>