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
        $carros = array('Palio','Corsa','Gol',"siena" => "Siena");

        echo $carros[1] . "<br>"; //Resultado Corsa
        echo $carros["siena"] . "<br>"; //Resultado Siena
        ?>
        
    </body>
</html>