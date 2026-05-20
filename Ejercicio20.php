<?php
$num = $_POST['numero'];
$suma = 0; 
for ($i = 1; $i <= $num; $i++) {
    $suma = $suma + $i; 
} 
echo "La suma de los números desde 1 hasta " . $num . " es: " . $suma;
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>