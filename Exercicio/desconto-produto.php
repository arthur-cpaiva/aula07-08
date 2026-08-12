<?php
 if (isset($_POST['produto']) && isset($_POST['desconto'])) {

$produto = $_POST['produto'];
$desconto = $_POST['desconto'];
$porcentagem = $desconto/100;
$calculo = $produto * $porcentagem;
$resultado= $produto - $calculo;

echo "O preço final do produto, com desconto é: R$".$resultado;

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porcentagem</title>
</head>

<body>

    <form action="" method="post">
        <label>Produto R$</label>
        <input type="text" name="produto"R$>
        <label>Desconto %</label>
        <input type="text" name="desconto">
        <button type="submit">Calcular</button>





    </form>




</body>

</html>