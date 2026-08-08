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

    echo "Soma: " . $resultadoSoma;
    echo'<br><br>';
    
    echo  "Subtração: " . $resultadoSubtracao;
    echo'<br><br>';
    
    echo  "Divisão: " . $resultadoDivisao;
    echo'<br><br>';
    
    echo  "Multiplicação: " . $resultadoMultiplicacao;
    echo'<br><br>';
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos basicos</title>
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