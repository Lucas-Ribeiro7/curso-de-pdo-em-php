<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso POO</title>
</head>
<body>
    <?php
        require_once 'pessoa.php';
        require_once 'aluno.php';
        require_once 'professor.php';
        require_once 'funcionario.php';
        require_once 'visitante.php';
        require_once 'bolsista.php';
        
        //Aluno
        $p2 = new aluno (201902527615 , "Análise e Desenvolvimento de Sitemas");
        $p2->setNome("Lucas");
        $p2->setIdade(19);
        $p2->setSexo("M"); 
        $p2->cancelarMatr(); //Método
        $p2->pagarMensalidade(); //Método

        //Professor
        $p3 = new professor ("Desenvolvimento" , 2500,00);
        $p3->setNome("Noleto");
        $p3->setIdade(34);
        $p3->setSexo("M"); 
        $p3->receberAum(500); //Método

        //Funcionário
        $p4 = new funcionario ("Secretária" , true);
        $p4->setNome("Maria");
        $p4->setIdade(29);
        $p4->setSexo("F");
        $p4->mudarSetor("Estoque"); //Método

        //Visitante
        $p5 = new visitante();
        $p5->setNome("João");
        $p5->setIdade(25);
        $p5->setSexo("M");

        //Bolsista
        $p6 = new bolsista(201908586436, "Redes de Computadores");
        $p6->setNome("Francisca");
        $p6->setIdade(18);
        $p6->setSexo("F");
        $p6->setBolsa(300);
        $p6->renovarBolsa(); //Método
        $p6->pagarMensalidade(); //Método

        

        //ERROS
        /*
        $p1->receberAum(500);         ---- (Só o professor pode receber aumento)
        $p2->mudarSetor("Estoque");   ---- (Só quem pode mudar o setor é um funcionário)
        $p3->cancelarMatr();          ---- (Só quem pode cancelar a matricula é o Aluno)
        */

        //Verificações:
        
        var_dump($p2);
        echo "<br>";
        var_dump($p3);
        echo "<br>";
        var_dump($p4);
        echo "<br>";
        var_dump($p5);
        echo "<br>";
        var_dump($p6);
        
    ?>
</body>
</html>