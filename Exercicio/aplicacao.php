<?php

if (isset($_POST['capital']) && isset($_POST['juros']) && isset($_POST['tempo'])) {

    $capital = $_POST['capital'];
    $juros = $_POST['juros'];
    $tempo = $_POST['tempo'];
    $jurosSimples = $capital * ($juros / 100) * $tempo;
    $montante = $capital + $jurosSimples;

    echo "<div class='resultado'>";
    echo "<p>Juros Simples: R$" . $jurosSimples . "<p>";
    echo '<br>';
    echo "<p>Montante: R$" . $montante . "<p>";
}

echo "</div>";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Investimento</h1>
    <form action="" method="post">
        <label>Capital</label>
        <input type="text" name="capital">
        <label>Juros</label>
        <input type="text" name="juros">
        <label>Tempo de Aplicação</label>
        <input type="text" name="tempo">
        <button type="submit">Calcular</button>





    </form>




</body>

</html>