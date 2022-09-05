<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>HTML5 - Estrutura básica</title>
    </head>
    <body>
       <h1>Estamos aprendendo PHP!</h1>
       
       <?php
        //CRiação do Array
        $clubesRJ = array('Flamengo','Fluminense','Botafogo');
        
        $clubesSP = array('Corinthians','Santos','Palmeiras','RB Bragantino', 'São Paulo');
        $clubesMG = array('America-MG','Atletico-MG');
        $clubesMT = array('Cuiabá');
        $clubesRS = array('Internacional','Juventude');
        $clubesPR = array('Coritiba','Athletico');
        $clubesGO = array('Goias','Atletico Goianiense');
        $clubesCE = array('Ceará','Fortaleza');
        $clubesSC = array('Avaí');

        print_r ($clubesRJ);
        echo "<br>";
        print_r ($clubesSP);
        echo "<br>";
        print_r ($clubesMG);
        echo "<br>";
        print_r ($clubesRS);
        echo "<br>";
        print_r ($clubesPR);
        echo "<br>";
        print_r ($clubesGO);
        echo "<br>";
        print_r ($clubesCE);
        echo "<br>";
        print_r ($clubesSC);
        echo "<br>";
        ?>
        
    </body>
</html>