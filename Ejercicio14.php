<?php
$metros = $_POST ['metros'];
$calculado = ($metros * 100);

if ($metros >= 2){
    echo $metros . " metros, equivalen a " . $calculado . " centimetros";
}else {
    echo $metros . " metro, equivale a " . $calculado . " centimetros";
}
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>