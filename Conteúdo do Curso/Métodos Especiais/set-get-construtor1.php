<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'set-get-construtor2.php';

        $c1 = new caneta;

        $c1 -> setModelo("BIC");
        $c1 -> setPonta(0.5);

        var_dump($c1);

        echo "Eu tenho uma caneta de modelo " . $c1 -> getModelo() . " e de ponta " . $c1 -> getPonta();

        $c2 = new caneta;

        var_dump($c2);
    ?>
    </pre>
</body>
</html>