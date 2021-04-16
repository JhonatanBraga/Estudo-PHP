<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <div>
     <?php
        $valor = $_GET["v"];
        # para uso da Raiz quadrada, usa-se sqrt
        $rq = sqrt($valor);
        echo "A raiz de $valor é igual á: ". number_format($rq,2);
      ?>
      <a href ="index.html"> Voltar</a>
    </div>
</body>
</html>