<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Actividad A</title>
</head>
<body>
    <div class="container">
    <h1>Bienvenido a la Aplicación de Entrada a Países</h1>
    <div class="btn-group">
            <a href="index.php" class="btn btn-primary">Inicio</a>
            <div class="col-2"></div>
            <a href="ActividadB.php" class="btn btn-primary">Actividad B</a>
        </div>
    
    <form action="procesar.php" method="post">
        <label for="pais">Seleccione el país que desea visitar:</label>
        <select name="pais" id="pais">
            <option value="Mexico">México</option>
            <option value="Estados Unidos">Estados Unidos</option>
            <option value="Canadá">Canadá</option>
        </select>
        <br><br>
        <input type="submit" value="Procesar entrada">
    </form>
    </div>
    <?php
    // Obtener el país seleccionado
    $pais = $_POST['pais'];

    // Obtener la hora actual
    date_default_timezone_set('America/Mexico_City'); // Establecer la zona horaria
    $hora = date('H:i:s');

    // Verificar si el país está disponible
    $saludo = "";
    if ($pais == "Mexico" || $pais == "Estados Unidos" || $pais == "Canadá") {
        // Verificar la hora actual para determinar el saludo
        if ($hora >= "06:00:00" && $hora < "12:00:00") {
            $saludo = "¡Buenos días!";
        } elseif ($hora >= "12:00:00" && $hora < "18:00:00") {
            $saludo = "¡Buenas tardes!";
        } else {
            $saludo = "¡Buenas noches!";
        }

        echo "<h1>¡Bienvenido a $pais!</h1>";
        echo "<p>$saludo</p>";
    } else {
        echo "<h1>Lo sentimos, el país seleccionado no está disponible.</h1>";
    }
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>