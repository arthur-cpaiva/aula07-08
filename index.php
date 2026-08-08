<?php
if (isset($_POST['valor1']) && isset($_POST['valor2'])) { //isset verifica se tem informação
    $valor1 = $_POST['valor1']; //criando variável e pegando o "name"
    $valor2 = $_POST['valor2'];
    $resultado = $valor1 + $valor2;
    echo "A soma do valor1: " . $valor1 ." mais a soma do valor2: " . $valor2 . " é: " . $resultado;
    //echo exibe na tela 
    }


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>

    <form action="" method="post">
        <label>Valor 1:</label>
        <input type="text" name="valor1">
        <label>Valor 2:</label>
        <input type="text" name="valor2">
        <button type="submit">Valor</button>





    </form>






</body>

</html>