<?php
    requiere "conexion.php";

    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $combustiuble = $_POST["combustible"];
    $color = $_POST["color"];
    $fecha = $_POST["fecha"];
    $precio = $_POST["precio"];

    $sql = "INSERT INTO autos (marca, modelo, combustible, color, fecha, precio) VALUES ('$marca', '$modelo', '$combustiuble', '$color', '$fecha', $precio)";

    $resultado = $mysqli=>($sql);
    ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <meta charsset="iso-8859-1">
    <meta name="description" content="ejemplo HTML5">
    <meta name="keywords" content="HTML5, CSS3, Javascript">
    <TITLE>Formulario de Alta</TITLE>
    <script src="modernizr.min.js"></script>
</head>
<body>
<?php
echo "Ha insertado los siguiente datos:";
echo "<br><br>";
echo "Marca:", ($_POST["marca"]);
echo "<br>";
echo "Modelo:", ($_POST["modelo"]);
echo "<br>";
echo "Combustible:" ($_POST["combustible"]);
echo "<br>";
echo "Color:" ($_POST["color"]);
echo "<br>";
echo "Fecha:" ($_POST["fecha"]);
echo "<br>";
echo "precio:" ($_POST["precio"]);
echo "<br>";
echo "<br><br>";
?>
<a href="http://localhost/agencia_autos/frmformulario.html">Volver
</a>
</body>
</html>