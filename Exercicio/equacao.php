<?php

if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])) {

    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $delta = ($b * $b) - (4 * $a * $c);
   
    echo "<div class='resultado'>";
    echo "<p> O valor de Δ é: " . $delta . "<p>";

    if ($delta > 0) {

        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);

        echo "<p> O valor de x1 é: " . $x1 . "<p>";
        echo "<p> O valor de x2 é: " . $x2 . "<p>";
    } elseif ($delta == 0) {

        $x1 = -$b / (2 * $a);

        echo "A equação possui apenas uma raiz real: " . $x1;
    } else {

        echo "A equação não possui raízes reais.";
    }
}
    echo "</div>";

?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equação</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<h1>Equação de Segundo Grau</h1>


    <form action="" method="post">
        <label>A</label>
        <input type="text" name="a" R$>
        <label>B</label>
        <input type="text" name="b">
        <label>C</label>
        <input type="text" name="c">
        <button type="submit">Calcular</button>





    </form>




</body>

</html>