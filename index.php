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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">
    <title>Mi Página Web Mejorada</title>
    <style>
        body {
            background-color: #121212;
            color: #ffffff;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            font-size: 3em;
            font-weight: bold;
            text-align: center;
            color: #4CAF50;
        }

        .container {
            text-align: center;
            background-color: #1e1e1e;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.5);
        }

        .data-box {
            background-color: #333333;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            color: #fff;
            font-size: 1.5em;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Datos del Archivo</h1>
        <div class="data-box">
            <?php echo htmlspecialchars($DATO_lectura); ?>
        </div>
    </div>
</body>
</html>
