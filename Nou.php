<?php
require_once('Connexio.php');

/**
 * Script para  agregar un nuevo producto a la base de datos.
 */

// Verifica si se recibieron datos  del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /**
     * @var string $nom El nombre del producto
     */
    $nom = $_POST['nom'];
    /**
     * @var string $descripcio La descripción del producto
     */
    $descripcio = $_POST['descripcio'];
    /**
     * @var float $preu El precio del producto
     */
    $preu = $_POST['preu'];
    /**
     * @var int $categoria El ID de la categoría del producto
     */
    $categoria = $_POST['categoria'];

    // Conecta a la base de datos
    $conn = new Connexio();
    /**
     * @var mysqli $conexion La conexión a la base de datos
     */
    $conexion = $conn->obtenirConnexio();

    // Prepara la consulta SQL de inserción
    $sql = "INSERT INTO productes (nom, descripció, preu, categoria_id) VALUES (?, ?, ?, ?)";

    // Prepara y ejecuta la consulta utilizando declaraciones preparadas para evitar la inyección de SQL
    if ($stmt = $conexion->prepare($sql)) {
        $stmt->bind_param("ssdi", $nom, $descripcio, $preu, $categoria);

        // Ejecuta la consulta
        if ($stmt->execute()) {
            // Redirige al usuario a la página principal
            header("Location: Principal.php");
            exit();
        } else {
            // Muestra un mensaje de error si la inserción falla
            echo "Error al agregar el nuevo producto.";
        }

        // Cierra la declaración
        $stmt->close();
    } else {
        // Muestra un mensaje de error si la preparación de la consulta falla
        echo "Error al preparar la consulta.";
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nuevo producto</title>
    <!-- Enlace a Bootstrap desde su repositorio remoto -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <!-- Incluye el encabezado -->
    <?php require_once('Header.php'); ?>

    <div class="container mt-5" style="margin-bottom: 200px">
        <h2>Nuevo producto</h2>
        <hr>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <!-- Campos del formulario para agregar un nuevo producto -->
        </form>
    </div>

    <!-- Incluye el pie de página -->
    <?php require_once('Footer.php'); ?>
</body>
</html>
