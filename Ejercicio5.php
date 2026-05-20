<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$resultado = ($num1 / $num2);
echo "<center><h1>La division de los numeros es:" . $resultado;
echo "</h1>";
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>