<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 06</title>
</head>
<body>
<h1><center>Projeto Controle Remoto<center></h1>
    <pre>
    <?php
        include_once "ControleRemoto.php";
    
        $c1 = new ControleRemoto();
        
        $c1->ligar();
        $c1->maisVolume();
        $c1->desligar();
        $c1->maisVolume();
        $c1->play();
    
    
        $c1->abrirMenu();
        echo "<hr>";
        print_r($c1);
    ?>
    </pre>
</body>
</html>