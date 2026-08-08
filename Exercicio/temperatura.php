<?php
if (isset($_POST['celsius'])) {
    $celsius = $_POST['celsius'];
    $calculo = 1.8;

    $resultado = ($celsius * 1.8) + 32;

    echo "A conversão ficou em: " . $resultado . "ºF";
}




?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cicrculo</title>
</head>

<body>

    <form action="" method="post">
        <label>Celsius</label>
        <input type="text" name="celsius">
        <button type="submit">Calcular</button>
    </form>




</body>

</html>