<?php
$num = $_POST ['num'];
if ($num %2 ==0){
    echo "<center><h1>";
    echo "Su numero es par";
}
else {
    echo "<center><h1>";
    echo "Su numero es impar";
}
echo "</h1>";
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>