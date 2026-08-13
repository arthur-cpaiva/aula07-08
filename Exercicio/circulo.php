<?php
if (isset($_POST['raio'])) {

    $raio = $_POST['raio'];
    $resultadoArea = pow($raio, 2) * pi();

    echo "<div class='resultado'>";
    echo  "<p>Área: " . round($resultadoArea) . "</p>";
    
}

echo "</div>";

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cicrculo</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Círculo</h1>

    <form action="" method="post">
        <label>Raio</label>
        <input type="text" name="raio">
        <button type="submit">Calcular</button>
    </form>




</body>

</html>