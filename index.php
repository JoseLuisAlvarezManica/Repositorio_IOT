<?php
if (!file_exists("datos.txt")) {
    file_put_contents("datos.txt", "0\r\n");
}

if (isset($_GET['DATO'])) {
    $DATO_var = $_GET['DATO'];
    $TEXTO = $DATO_var . "\r\n";
    file_put_contents("datos.txt", $TEXTO);
}

$ARCHIVO = file_get_contents("datos.txt");
$pos1 = strpos($ARCHIVO, "\r\n");
$DATO_lectura = substr($ARCHIVO, 0, $pos1);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Mi primer página web</title>
    <meta http-equiv="refresh" content="5">
</head>
<body>
    <h1>
        <?php echo $DATO_lectura; ?>
    </h1>
</body>
</html>
