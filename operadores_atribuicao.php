<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores e Atribuicao</title>
</head>
<body>
    <?php

    // Neste exemplo, o valor que está sendo recebido, está sendo inserido pela URL. Após o PHP é inserido ? + variável + valor

    //http://localhost/estudophp/operadores_atribuicao.php?p=75

        $preco = $_GET["p"];
        echo "O preço do produto é R$ $preco";
        $preco += ($preco*10/100);
        echo "<br/> e o novo preço com 10% de aumento sera R$ $preco";


    ?>
</body>
</html>