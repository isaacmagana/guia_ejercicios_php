<?php
$nombre = $_POST ['nombre'];
$correo = $_POST ['email'];
$ciudad = $_POST ['ciudad'];

echo "Hola, " . $nombre . " con correo: " . $correo . " y vive en la ciudad de " . $ciudad;
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>