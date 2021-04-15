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

    // Exemplo de adição
        $preco = $_GET["p"];
        echo "O preço do produto é R$" .number_format($preco, 2);
        $preco += ($preco*10/100);
        echo "<br/> E o novo preço com 10% de aumento sera R$" . number_format( $preco, 2);

    // . number_format (variável + 2). Essa expressão é para concatenação, o valor ao lado da variável, informa quantas casas decimais vem após o valor recebido    

    // Exemplo de subtração

    $preco = $_GET["p"];
    echo "<br/> O preço do produto é R$" . number_format($preco, 2);
    $preco -= ($preco*10/100);
    echo "<br/> O preço do produto com o desconto de 10%, fica em R$" . number_format($preco, 2);

    ?>
</body>
</html>