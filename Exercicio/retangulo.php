<?php
if (isset($_POST['base']) && isset($_POST['altura'])) {

    $base = $_POST['base'];
    $altura = $_POST['altura'];
    $resultadoArea = $base * $altura;

    echo  "Área: " . $resultadoArea . "m2";
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retangulo</title>
</head>

<body>

    <form action="" method="post">
        <label>Base</label>
        <input type="text" name="base">
        <label>Altura</label>
        <input type="text" name="altura">
        <button type="submit">Calcular</button>
    </form>




</body>

</html>