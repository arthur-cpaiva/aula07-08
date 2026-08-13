<?php

if (isset($_POST['altura']) && isset($_POST['peso'])) {

    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $calculo = $peso / ($altura * $altura);

    echo "<div class='resultado'>";
    echo "<p> Seu IMC é de: " . $calculo . "<p>";
}

echo "</div>";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Cálculo IMC</h1>

    <form action="" method="post">
        <label>Altura</label>
        <input type="text" name="altura" R$>
        <label>Peso</label>
        <input type="text" name="peso">
        <button type="submit">Calcular</button>





    </form>




</body>

</html>