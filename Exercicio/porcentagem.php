<?php
if (isset($_POST['valor1']) && isset($_POST['valor2'])) {

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $porcentagem = 10;
    $soma = $valor1 + $valor2;
    $resultado = $soma * ($porcentagem/100);

    echo "10% da soma do valor1 e valor2 é: " . $resultado;
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
        <label>Valor 1</label>
        <input type="text" name="valor1">
        <label>Valor 2</label>
        <input type="text" name="valor2">
        <button type="submit">Calcular</button>





    </form>




</body>

</html>