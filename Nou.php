<?php
require_once('Connexio.php');

// Verifica si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nom = $_POST['nom'];
    $descripcio = $_POST['descripcio'];
    $preu = $_POST['preu'];
    $categoria = $_POST['categoria'];

    // Limpia y valida los datos recibidos (puedes agregar validaciones según sea necesario)

    // Conecta a la base de datos
    $conn = new Connexio();
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
            <div class="mb-3">
                <label for="nom" class="form-label">Nombre:</label>
                <input type="text" name="nom" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="descripcio" class="form-label">Descripción:</label>
                <input type="text" name="descripcio" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="preu" class="form-label">Precio:</label>
                <input type="number" name="preu" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="categoria" class="form-label">Categoría:</label>
                <select name="categoria" class="form-select" required>
                    <option value="1">Electrónicos</option>
                    <option value="2">Ropa</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
            </div>

            <!-- Agrega más campos según sea necesario -->

            <hr>
            <!-- Botones de guardar y cancelar -->
            <input type="submit" value="Guardar" class="btn btn-primary">
            <a href="Principal.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <!-- Incluye el pie de página -->
    <?php require_once('Footer.php'); ?>
</body>
</html>
