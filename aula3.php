<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 03 - PHP POO</title>
</head>
<body>
    <pre>
    <?php
        require_once "Caneta.php";

        $c1 = new Caneta();
        $c1->modelo = "BIC Crystal";
        $c1->cor = "blue";
//        $c1->ponta = 0.4;     // private
//        $c1->carga = 99;      // private
//        $c1->tampada = 99;    // private
        $c1->rabiscar();
        $c1->destampar();
        $c1->tampar();
        print_r($c1);


    ?>
    </pre>
</body>
</html>