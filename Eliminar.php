<?php
require_once('Connexio.php');

/**
 * Script para eliminar un producto de la base de datos.
 */

// Verifica si se recibió un ID válido del producto a eliminar
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id']) && is_numeric($_GET['id'])) {
    /**
     * @var int $idProducto El ID del producto a eliminar
     */
    $idProducto = $_GET['id'];

    // Conecta a la base de datos
    $conn = new Connexio();
    /**
     * @var mysqli $conexion La conexión a la base de datos
     */
    $conexion = $conn->obtenirConnexio();

    // Prepara la consulta SQL de eliminación
    $sql = "DELETE FROM productes WHERE id = ?";

    // Prepara y ejecuta la consulta utilizando declaraciones preparadas para evitar la inyección de SQL
    if ($stmt = $conexion->prepare($sql)) {
        $stmt->bind_param("i", $idProducto);

        // Ejecuta la consulta
        if ($stmt->execute()) {
            // Redirige al usuario a la página principal
            header("Location: Principal.php");
            exit();
        } else {
            // Muestra un mensaje de error si la eliminación falla
            echo "Error al eliminar el producto.";
        }

        // Cierra la declaración
        $stmt->close();
    } else {
        // Muestra un mensaje de error si la preparación de la consulta falla
        echo "Error al preparar la consulta.";
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
} else {
    // Redirige al usuario a la página principal si no se proporciona un ID válido
    header("Location: Principal.php");
    exit();
}
?>
