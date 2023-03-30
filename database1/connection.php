<?php
// Conectar a la base de datos
$mysqli = new mysqli('localhost', 'root', 'db123', 'database1');

// Verificar la conexión
if ($mysqli->connect_errno) {
  echo "Error al conectar a la base de datos: " . $mysqli->connect_error;
  exit();
}

// Obtener la información de la base de datos
$query = "SELECT * FROM usuarios";
$resultado = $mysqli->query($query);

// Cerrar la conexión a la base de datos
$mysqli->close();
?>
