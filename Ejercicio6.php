<?php
$nombre = $_POST['nombre'];
$edad =$_POST['edad'];

echo "<center><h1>Su nombre es:" . $nombre;
echo "<center>Su edad es:" . $edad;
echo "</h1>";
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>