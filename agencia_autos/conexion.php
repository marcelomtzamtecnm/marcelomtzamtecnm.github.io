<?php
if (session_status() === PHP_SESSION_NONE) {  
    session_start();
}

// 🔹 Detectar si estás en local o en el hosting
if ($_SERVER['HTTP_HOST'] === 'localhost') {
    // ✅ Configuración para Local (XAMPP)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "agencias";
} else {
    // ✅ Configuración para InfinityFree
    $servername = "sql303.infinityfree.com";  //nombre del servidor
    $username = "if0_38204602";             //usuario del servidor
    $password = "MwJS80w3x7m1qv";       ////clave del servidor 
    $dbname = "if0_38204602_bd_reparaciones_requenez";   ////nombre de la base de datos.
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>