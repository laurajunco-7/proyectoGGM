<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ggm"; 

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$connection)
{
    die("No hay conexión: ". mysqli_connect_error());
}

// Obtener datos del formulario
$usuario = $_POST["Usuario"];
$contraseña = $_POST["Contraseña"];

// Insertar datos en la base de datos
$query = "INSERT INTO login (Usuario, Contraseña) VALUES ('$usuario', '$contraseña')";
$nr = mysqli_query($connection, $query);

if ($nr == 1) {
    header("Location: facturas.html?usuario=".$usuario);

} else if ($nr == 0) {
    echo "Error al registrar usuario: " . mysqli_error($connection);
}

?>