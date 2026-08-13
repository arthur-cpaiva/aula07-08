<?php
if (isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3'])) {

    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $resultadoMedia = ($nota1 + $nota2 + $nota3) / 3;

    echo "<div class='resultado'>";
    echo "A média é: " . $resultadoMedia;
}

echo "</div>";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Aritmetica</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>Notas escolares</h1>

    <form action="" method="post">
        <label>Nota 1</label>
        <input type="text" name="nota1">
        <label>Nota 2</label>
        <input type="text" name="nota2">
        <label>Nota 3</label>
        <input type="text" name="nota3">
        <button type="submit">Calcular</button>
    </form>




</body>

</html>