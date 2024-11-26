<?php
// Incluye la conexión a la base de datos
require_once '../modelo/conexion.php';

// Verifica si se envió un archivo y un nombre de usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file']) && isset($_POST['name'])) {
    $userName = trim($_POST['name']);
    $file = $_FILES['file'];

    // Verifica si el archivo es un PDF
    if ($file['type'] !== 'application/pdf') {
        die("Solo se permiten archivos PDF.");
    }

    // Define la carpeta de destino
    $uploadDir = "../uploads/";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    // Genera un nombre único para el archivo
    $filePath = $uploadDir . uniqid() . "_" . basename($file['name']);

    // Mueve el archivo a la carpeta de destino
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        // Guarda la información en la base de datos
        $stmt = $conexion->prepare("INSERT INTO pdf_uploads (user_name, filename, filepath) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $userName, $file['name'], $filePath);

        if ($stmt->execute()) {
            echo "El archivo se subió y guardó correctamente.";
        } else {
            echo "Error al guardar la información en la base de datos: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error al subir el archivo.";
    }
} else {
    echo "No se envió ningún archivo o nombre de usuario.";
}

// Cierra la conexión
$conexion->close();
?>
