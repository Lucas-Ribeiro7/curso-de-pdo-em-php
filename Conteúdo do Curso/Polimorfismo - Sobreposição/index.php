<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de POO</title>
</head>
<body>
    <?php
        require_once 'ave.php';
        require_once 'mamifero.php';
        require_once 'reptil.php';
        require_once 'peixe.php';
        require_once 'cobra.php';
        require_once 'canguru.php';
        require_once 'goldfish.php';
        require_once 'cachorro.php';
        require_once 'arara.php';
        require_once 'tartaruga.php';

        //Mamifero
        $m = new mamifero();
        $m->setPeso(80.5);
        $m->setIdade(2);
        $m->setMembros(4);
        $m->locomover();
        $m->alimentar();
        $m->emitirSom();

        //Verificações
        var_dump($m);

        //Reptil
        $r = new reptil();
        $r->setPeso(70.5);
        $r->setIdade(3);
        $r->setMembros(4);
        $r->locomover();
        $r->alimentar();
        $r->emitirSom();

        //Verificações
        var_dump($r);

        //Ave
        $av = new ave();
        $av->setPeso(35.5);
        $av->setIdade(2);
        $av->setMembros(4);
        $av->locomover();
        $av->alimentar();
        $av->emitirSom();

        //Verificações
        var_dump($av);

        //Peixe
        $p = new peixe();
        $p->setPeso(30.5);
        $p->setIdade(2);
        $p->setMembros(4);
        $p->locomover();
        $p->alimentar();
        $p->emitirSom();

        //Verificações
        var_dump($p);

        //Canguru
        $c = new canguru();
        $c->setPeso(60.5);
        $c->setIdade(4);
        $c->setMembros(4);
        $c->locomover();
        $c->alimentar();
        $c->emitirSom();

        //Verificações
        var_dump($c);

        //Cachorro
        $ca = new cachorro();
        $ca->setPeso(55.5);
        $ca->setIdade(8);
        $ca->setMembros(4);
        $ca->locomover();
        $ca->alimentar();
        $ca->emitirSom();

        //Verificações
        var_dump($ca);

        //Mamifero
        $m = new mamifero();
        $m->setPeso(80.5);
        $m->setIdade(2);
        $m->setMembros(4);
        $m->locomover();
        $m->alimentar();
        $m->emitirSom();

        //Verificações
        var_dump($m);

        //Cobra
        $co = new cobra();
        $co->setPeso(80.5);
        $co->setIdade(2);
        $co->setMembros(4);
        $co->locomover();
        $co->alimentar();
        $co->emitirSom();

        //Verificações
        var_dump($co);

        //Tartaruga
        $ta = new tartaruga();
        $ta->setPeso(90.5);
        $ta->setIdade(7);
        $ta->setMembros(4);
        $ta->locomover();
        $ta->alimentar();
        $ta->emitirSom();

        //Verificações
        var_dump($ta);

        //Gold Fish
        $go = new goldFish();
        $go->setPeso(30.5);
        $go->setIdade(2);
        $go->setMembros(4);
        $go->locomover();
        $go->alimentar();
        $go->emitirSom();

        //Verificações
        var_dump($go);

        //Arara
        $ar = new arara();
        $ar->setPeso(80.5);
        $ar->setIdade(2);
        $ar->setMembros(4);
        $ar->locomover();
        $ar->alimentar();
        $ar->emitirSom();

        //Verificações
        var_dump($ar);

    ?>
</body>
</html>