<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Aula 04</title>
    </head>
    <body>
	    <pre>
    <?php
        include_once "aula 4 - Caneta.php";
        
        $c1 = new Caneta('Crystal', 'blue', 0.7);
        $c2 = new Caneta('colorida', 'red', 1.0);
        
        
        
        print_r($c2);
        print_r($c1);
        
        
        
        
//        echo "<br><br>";
//        echo "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}";
//        echo "<br><br>";
        
        

    ?>
		</pre>
    </body>
</html>