<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Aula 02 - PHP POO</title>
</head>
<body>
<pre>
<?php
require_once "Caneta.php";

$c1 = new Caneta();
$c1->cor = "blue";
$c1->ponta = 0.5;
$c1->tampada = true;
$c1->carga = 100;

$c1->destampar();
$c1->rabiscar();
$c1->tampar();
print_r($c1);

echo "<hr>";

$c2 = new Caneta();
$c2->cor = "red";
$c2->ponta = 0.5;
$c2->tampada = true;
$c2->carga = 100;

$c2->destampar();
$c2->rabiscar();
$c2->tampar();
print_r($c2);




?>
    </pre>
</body>
</html>