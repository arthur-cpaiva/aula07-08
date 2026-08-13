<?php
if (isset($_POST['valor1']) && isset($_POST['valor2'])) {

    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $soma = $valor1 + $valor2;
    $subtracao = $valor1 + $valor2;
    $divisao = $valor1 / $valor2;
    $multiplicacao = $valor1 * $valor2;
    $resultadoSoma = $soma;
    $resultadoSubtracao = $subtracao;
    $resultadoDivisao = $divisao;
    $resultadoMultiplicacao = $multiplicacao;

    echo "<div class='resultado'>";

    echo "<p>Soma: " . $resultadoSoma . "</p>";
    echo '<br><br>';

    echo  "<p>Subtração: " . $resultadoSubtracao . "</p>";
    echo '<br><br>';

    echo  "<p>Divisão: " . $resultadoDivisao . "</p>";
    echo '<br><br>';

    echo  "<p>Multiplicação: " . $resultadoMultiplicacao . "</p>";
    echo '<br><br>';
}

echo "</div>";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos basicos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Cálculos Basicos</h1>

    <form action="" method="post">
        <label>Valor 1</label>
        <input type="text" name="valor1">
        <label>Valor 2</label>
        <input type="text" name="valor2">
        <button type="submit">Calcular</button>





    </form>




</body>

</html>