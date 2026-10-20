<?php
$nombre = $_GET["nombre"] ?? "Invitado";

echo "Hola, " . htmlspecialchars($nombre);
?>