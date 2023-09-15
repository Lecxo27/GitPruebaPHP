<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Actividad B</title>
</head>
<body>
    <div class="container">
        <br><br><br>
        <h1>Aplicación de Registro de Números</h1>
        <hr>
        <form action="procesar.php" method="post">
            <div class="mb-3">
                <label for="numero" class="form-label">Ingrese un número:</label>
                <input type="number" name="numero" id="numero" class="form-control" required>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Registrar número</button>
            <a  class="btn btn-primary" href="index.php">Volver al Inicio</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>