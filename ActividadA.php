<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar Entrada a País</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <br><br>
        <h1>Procesar Entrada a País</h1>
        <hr><br>
        <form action="procesarA.php" method="get">
            <div class="form-group row">
                <label for="pais" class="col-sm-2 col-4"><h4>Seleccione el país:</h4></label>
                <div class="col-sm-6">
                    <select name="pais" id="pais" class="form-control">
                        <option value="Argentina">Argentina</option>
                        <option value="España">España</option>
                        <option value="Estados Unidos">Estados Unidos</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Japón">Japón</option>
                        <option value="Alemania">Alemania</option>
                        <option value="Reino Unido">Reino Unido</option>
                    </select>
                </div>
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary">Procesar Entrada</button>
            <a  class="btn btn-primary" href="index.php">Volver al Inicio</a>
        </form>
    </div>
</body>
</html>