<?php
$pais = $_GET['pais'];

// Obtener la hora actual del país seleccionado
$timezone = getTimezone($pais);
$hora_actual = getHoraActual($timezone);

// Obtener el saludo en función de la hora actual
$saludo = getSaludo($hora_actual);

function getTimezone($pais) {
    // Definir los diferentes husos horarios para cada país
    $zonas_horarias = array(
        'Argentina' => 'America/Argentina/Buenos_Aires',
        'España' => 'Europe/Madrid',
        'Estados Unidos' => 'America/New_York',
        'Venezuela' => 'America/Caracas',
        'Japón' => 'Asia/Tokyo',
        'Alemania' => 'Europe/Berlin',
        'Reino Unido' => 'Europe/London'
    );

    // Verificar si el país seleccionado tiene un huso horario asignado
    if (isset($zonas_horarias[$pais])) {
        return $zonas_horarias[$pais];
    } else {
        return 'UTC'; 
    }
}

function getHoraActual($timezone) {
    date_default_timezone_set($timezone);
    return date('H:i:s');
}

function getSaludo($hora_actual) {
    $hora_saludo = strtotime($hora_actual);
    $saludo = '';

    if ($hora_saludo >= strtotime('06:00:00') && $hora_saludo <= strtotime('11:59:59')) {
        $saludo = '¡Buenos días!';
    } elseif ($hora_saludo >= strtotime('12:00:00') && $hora_saludo <= strtotime('19:59:59')) {
        $saludo = '¡Buenas tardes!';
    } else {
        $saludo = '¡Buenas noches!';
    }

    return $saludo;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <br><br>
    <div class="container">
        <h1>Saludo para <?php echo $pais; ?></h1>
        <?php if ($saludo): ?>
            <h2><?php echo $saludo; ?></h2>
        <?php else: ?>
            <h2>No se pudo determinar el saludo.</h2>
        <?php endif; ?>
        <hr><br>
        <a  class="btn btn-primary" href="ActividadA.php">Volver al Menú</a>
    </div>
</body>
</html>