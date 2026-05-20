<?php
$tabla = $_POST['tabla']; 

echo "<h3>Tabla del " . $tabla . "</h3>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $tabla * $i;
    echo $tabla . " x " . $i . " = " . $resultado . "<br>";  
}
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>
