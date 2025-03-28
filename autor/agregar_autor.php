<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexión a la base de datos
    $conexion = new mysqli("localhost", "root", "", "lexis");

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Obtener los datos del formulario
    $nombre = $conexion->real_escape_string($_POST["nombre"]);
    $biografia = $conexion->real_escape_string($_POST["biografia"]);
    $Libro = $conexion->real_escape_string($_POST["Libro"]);
    $fecha_nacimiento = $conexion->real_escape_string($_POST["fecha_nacimiento"]);
    $ESTADO = $conexion->real_escape_string($_POST["ESTADO"]);

    // Consulta SQL para insertar datos
    $sql = "INSERT INTO autores (nombre, biografia, Libro, fecha_nacimiento, ESTADO) 
            VALUES ('$nombre', '$biografia', '$Libro', '$fecha_nacimiento', '$ESTADO')";

    if ($conexion->query($sql) === TRUE) {
        Include"autor_rec.php";
    } else {
        echo "Error: " . $sql . "<br>" . $conexion->error;
    }

    // Cerrar conexión
    $conexion->close();
}
?>
