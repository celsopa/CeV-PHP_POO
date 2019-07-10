<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 05 - Conta Bancária</title>
</head>
<body>
    <pre>
<?php
    include_once "ContaBanco.php";
    
    $p1 = new ContaBanco('Jubileu');
    $p2 = new ContaBanco('Creuza');

    $p1->abrirConta("CC");
    $p2->abrirConta("CP");
    
    $p1->depositar(300);
    $p2->depositar(500);
    
    $p1->sacar(1000);
    $p2->sacar(100);
    
    $p1->pagarMensal();
    $p2->pagarMensal();
    
    $p1->fecharConta();
    $p2->fecharConta();
    
    $p1->sacar(338);
    $p2->sacar(530);
    
    $p1->fecharConta();
    $p2->fecharConta();
    
    
    
    print_r($p1);
    print_r($p2);
    
?>
    </pre>
</body>
</html>