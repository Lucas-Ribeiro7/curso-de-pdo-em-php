<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de POO</title>
</head>
<body>
    <?php
        require_once 'mamifero.php';
        require_once 'lobo.php';
        require_once 'cachorro.php';

        //LOBO
        $lobo = new lobo();
        $lobo->setMembros(4);
        $lobo->emitirSom();
        var_dump($lobo);

        //CACHORRO
        $cachorro = new cachorro();
        $cachorro->setMembros(4);
        $cachorro->emitirSom();
        var_dump($lobo);
        $cachorro->reagirFrase("Tome a sua comida");
        $cachorro->reagirHora(8);
        $cachorro->reagirDono(true);
        $cachorro->reagirIdadePeso(9, 8);

    ?>
</body>
</html>