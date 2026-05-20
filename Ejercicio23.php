<?php
$producto = $_POST ['producto'];
$subtotal = $_POST ['precio'];
$iva = ($subtotal * 0.13);
$total = ($iva + $subtotal);

echo "<center><h3>";
echo "Sub-total: $" . $subtotal;
echo "<br><br>";
echo "Iva: 13%";
echo "<br><br>";
echo "Total: $" . $total;
echo "</h3>";
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>