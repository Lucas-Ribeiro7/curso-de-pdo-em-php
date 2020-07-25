<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assistindo Video</title>
</head>
<body>
    <?php
        require_once 'video.php';
        require_once 'aluno.php';
        require_once 'visualizacao.php';

        //Video
        $v1 = new Video("[VLOG] O dia a dia de um Programdor.");
        $v1->play();
        $v1->like();

        //Alunos
        $a1 = new aluno("Lucas", 19, "M", "Ribeiro");
        $a2 = new aluno("Jubileu", 22, "M", "Jubi");
        $a3 = new aluno("Maria", 20, "F", "MAR");

        //Visualização do Aluno 1
        $vi1 = new visualizacao($a1, $v1);
        $vi1->avaliarNota(100);

        //Visualização do Aluno 2
        $vi2 = new visualizacao($a2, $v1);
        $vi2->avaliar();

        //Visualização do Aluno 3
        $vi3 = new visualizacao($a3, $v1);
        $vi3->avaliarPorc(100);

        var_dump($vi3);
    ?>
</body>
</html>