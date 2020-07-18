<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria</title>
</head>
<body>
    <?php
        require_once 'livro.php';
        require_once 'pessoa.php';

        //Pessoa
        $p[0] = new pessoa ("Lucas" , 19 , "M");
        $p[1] = new pessoa ("Ronisclaiton" , 25 , "M");

        //Livro
        $l[0] = new livro ("PHP 7" , "José Ronildo" , 200 , $p[0]);
        $l[1] = new livro ("POO em PHP7" , "Maria do carmo" , 300 , $p[1]);

        //Apresentar um Livro 1
        $l[0]->abrir();
        $l[0]->folhear(45);
        $l[0]->avancarPag();
        $l[0]->avancarPag();
        $l[0]->voltarPag();
        $l[0]->detalhes();

        //Apresentar um Livro 2
        $l[1]->abrir();
        $l[1]->folhear(90);
        $l[1]->avancarPag();
        $l[1]->avancarPag();
        $l[1]->voltarPag();
        $l[1]->detalhes();
    ?>
</body>
</html>