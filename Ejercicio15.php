<?php
$grados = $_POST ['grados'];
$conversion = ($grados * 1.8 + 32);
echo $grados . " Celcius en Fahrenheit son: " . $conversion;
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>