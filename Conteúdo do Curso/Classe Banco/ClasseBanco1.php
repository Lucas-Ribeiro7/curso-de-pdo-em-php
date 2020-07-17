<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso POO</title>
</head>
<body>
    <?php
        require_once 'ClasseBanco2.php';
        $p1 = new ContaBanco; //Jubileu
        $p2 = new ContaBanco; //Cleusa

        //Jubileu
        $p1->abrirConta("CC");
        $p1->setnumConta(1111);
        $p1->setDono("Jubileu");
        $p1->depositar(300);
        $p1->pagarTarifa();
        $p1->sacar(330);
        $p1->fecharConta();

        //Cleusa
        $p2->abrirConta("CP");
        $p2->setnumConta(2222);
        $p2->setDono("Cleusa");
        $p2->depositar(500);
        $p2->sacar(100);
        $p2->pagarTarifa();
        $p2->sacar(540);
        $p2->fecharConta();

        //Saída 
        var_dump($p1);
        var_dump($p2);
    ?>
</body>
</html>