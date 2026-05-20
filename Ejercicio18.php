<?php
$nombre = $_POST ['nombre'];
$producto = $_POST ['producto'];
$cantidad = $_POST ['cantidad'];
$precio = $_POST ['precio'];
$total = ($cantidad * $precio);

echo "<center>";
echo "<br><br><br><br>";
echo "Nombre del cliente:" . $nombre;
echo "<br>";
echo "<br>";
echo "Producto: ....................... " . $producto;
echo "<br>";
echo "<br>";
echo "Cantidad: ......................." . $cantidad;
echo "<br>";
echo "<br>";
echo "Sub-total: $" . $total;
echo "<br>";
echo "<br>";
echo "Total a pagar: $" . $total;
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>
