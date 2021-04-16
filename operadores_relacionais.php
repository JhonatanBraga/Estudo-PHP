<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opeadores Relacionais</title>
</head>
<body>
<?php

# Operadores lógicos em PHP
# E = and / &&
# OU = OR / ||
# OU Exclusivo = XOR
# Não = !

/*
# Comparação de valores se é Soma OU Subtração    
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];
    echo "Os valores passados foram $n1 e $n2 </br>";

    $r = ($tipo == "s")?$n1+$n2 : $n1*$n2;
    echo "O resultado será $r";
*/

/*
# Cálculo de média

$nota1 = $_GET["n1"];
$nota2 = $_GET["n2"];
$m = ($nota1 + $nota2) /2;
echo "A média entre $nota1 e $nota2 é: $m </br>";
echo "A situação do aluno e" . (($m<6)?"Reprovado":"Aprovado");
*/

# Verificação entre valores. Ex: Eleição

$ano = $_GET ["an"];
$idade = 2021 - $ano;

echo "Quem nasceu em $ano tem idade de $idade anos.";
$tipo = ($idade>= 18 && $idade <=65)?"Obrigatório votar":"Não obrigatório votar";
echo "</br>Dessa forma você é $tipo";



?>
</body>
</html>