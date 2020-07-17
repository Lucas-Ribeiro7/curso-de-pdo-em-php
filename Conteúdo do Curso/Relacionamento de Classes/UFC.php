<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de POO</title>
</head>
<body>
    <?php
        require_once 'UFC3.php';
        require_once 'UFC4.php';
        $l = array(); 

        //Lutador 1
        $l [0] = new lutador("Lucas" , "Brasil" , 19 , 1.80 , 65 , 20 , 0 , 1);
        

        //Lutador 2
        $l [1] = new lutador("Ronisclayso" , "França" , 20 , 1.88 , 70 , 10 , 5 , 2);
        

        //Lutador 3
        $l [2] = new lutador("Vanildo" , "Alemão" , 18 , 1.75 , 95 , 15 , 10 , 9);
        
        //Lutador 4
        $l [3] = new lutador("Olax" , "Brasil" , 22 , 1.81 , 100 , 16 , 5 , 2);
        
        //Lutador 5
        $l [4] = new lutador("PistScript" , "EUA" , 21 , 1.90 , 78 , 18 , 3 , 2);
        
        //Lutador 6
        $l [5] = new lutador("Phputs" , "Holanda" , 23 , 1.78 , 83 , 19 , 2 , 1);
        
        //Luta!!
        $UFC = new luta;
        $UFC->marcarLuta($l[0] , $l[1]);
        $UFC->lutar();
               
        //Status dos lutadores
        $l [0]->status();
        $l [1]->status();
    ?>
</body>
</html>