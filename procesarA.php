<?php
session_start();

$nombre = $_POST['nombre'];
$monto = $_POST['monto'];

// Validar si el monto es válido
if ($monto <= 3500) {
    // Obtener el monto total actual
    $monto_total = isset($_SESSION['monto_total']) ? $_SESSION['monto_total'] : 0;

    // Verificar si el monto total supera el límite de 50,000Bs
    if (($monto_total + $monto) <= 50000) {
        // Incrementar el monto total y la cantidad de productos registrados
        $_SESSION['monto_total'] = $monto_total + $monto;
        $_SESSION['cantidad_productos'] = isset($_SESSION['cantidad_productos']) ? $_SESSION['cantidad_productos'] + 1 : 1;

        // Redirigir al formulario de registro con un mensaje de éxito
        header("Location: index.php?success=1");
        exit();
    } else {
        // Redirigir al formulario de registro con un mensaje de error
        header("Location: index.php?error=Limite de monto total alcanzado");
        exit();
    }
} else {
    // Redirigir al formulario de registro con un mensaje de error
    header("Location: index.php?error=Monto excede el límite permitido");
    exit();
}