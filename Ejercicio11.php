<?php
$nota1 = $_POST ['nota1'];
$nota2 = $_POST ['nota2'];
$nota3 = $_POST ['nota3'];
$suma = ($nota1 + $nota2 + $nota3);
$promedio = ($suma / 3);
if ($promedio >=6){
    echo "Felicidades, pasaste la materia, tu nota es:" . $promedio;

}else {
    echo ":( Dejaste la materia tu nota es:" . $promedio;
}
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>