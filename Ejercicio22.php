<?php
$dinero = $_POST ['dinero'];
$cambio = ($dinero * 0.86);
echo "<center><br><h1>";
echo "$" . $dinero . " convertido a euros es: " . $cambio . "€";
echo "</h1>";
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>