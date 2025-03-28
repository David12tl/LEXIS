<?php

require('./fpdf.php');

// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "lexis");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verificar si se recibió un ID por la URL
if (!isset($_GET['id_libros']) || empty($_GET['id_libros'])) {
    die("ID del libro no especificado.");
}

$id = intval($_GET['id_libros']); // Sanitizar el ID recibido

class PDF extends FPDF
{
    // Cabecera de página
    function Header()
    {
        // No se necesita cabecera para que la imagen ocupe todo el PDF
    }

    // Pie de página
    function Footer()
    {
        // No se necesita pie de página para que la imagen ocupe todo el PDF
    }
}

$pdf = new PDF('P', 'mm', 'A4'); // Configuración del PDF en formato A4
$pdf->AddPage();
$pdf->SetMargins(0, 0, 0); // Sin márgenes
$pdf->SetAutoPageBreak(false); // Desactivar salto automático de página

// Consulta a la base de datos para obtener la portada del libro por ID
$sql = "SELECT Portada FROM libros WHERE id_libros = $id";
$result = $conexion->query($sql);

// Verificar si se encontró el libro
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $portada = $row['Portada'];

    // Verificar si la portada está definida
    if ($portada == '') {
        $portada = '../assets/imgs/sin-foto.jpg'; // Imagen por defecto si no hay portada
    } else {
        $portada = "../acciones/fotos_portadas/" . $portada; // Ruta completa de la portada
    }

    // Verificar si el archivo existe
    if (file_exists($portada)) {
        // Agregar la imagen al PDF ocupando toda la página
        $pdf->Image($portada, 0, 0, 210, 297); // 210x297 mm es el tamaño de una página A4
    } else {
        $pdf->SetFont('Arial', 'B', 16);
        $pdf->Cell(0, 10, utf8_decode('La portada no se encuentra en el servidor.'), 0, 1, 'C');
    }
} else {
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, utf8_decode('No se encontró el libro con el ID especificado.'), 0, 1, 'C');
}

$pdf->Output('Portada_Libro.pdf', 'I'); // Mostrar el PDF en el navegador
?>
