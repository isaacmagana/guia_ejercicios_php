<?php
$palabra = $_POST['palabra']; 
$cantidad_letras = strlen($palabra);
echo "La palabra '" . $palabra . "' tiene " . $cantidad_letras . " letras.";
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>
