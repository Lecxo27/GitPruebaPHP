<!DOCTYPE html>
<html>
<head>
    <title>Procesando Número</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    p{
        text-align: center;
    }
</style>
<body>
    <div class="container">
    <?php
    // Obtener el número registrado
    $numero = $_POST['numero'];

    // Verificar si el número es 2, 5, 9 o 11
    if ($numero == 2 || $numero == 5 || $numero == 9 || $numero == 11) {
        echo "<h1>Lo sentimos, el número ingresado no puede ser mostrado.</h1>";
    } else {
        // Variable de control para alternar entre imprimir y no imprimir
        $imprimir = true;

        // Imprimir los números en función de la variable de control
        for ($i = 1; $i <= $numero; $i++) {
            if ($imprimir && $i != 2 && $i != 5 && $i != 9 && $i != 11) {
                echo "<p>$i</p>";
            }
            $imprimir = !$imprimir;
        }
    }
    ?>
    <br><b></b>

           <a href="ActividadB.php" class="btn btn-primary">Regresar</a>
           </div>
</body>
</html>