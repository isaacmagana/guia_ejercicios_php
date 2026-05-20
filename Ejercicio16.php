<?php
$nombre = $_POST ['nombre'];
$horas = $_POST ['horas'];
$pago = $_POST ['pago'];
$sueldo = ($horas * $pago);
echo "El sueldo de: " . $nombre . " es de: $" . $sueldo;
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>