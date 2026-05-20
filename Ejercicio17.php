<?php 
$total = $_POST ['total'];
$descuento = ($total * 0.10);
$final = ($total - $descuento);

if ($total >= 50  ) {
    echo "Su total con descuento es de: $" . $final;
}else {
    echo "Su total es de: $" . $total;
}
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>