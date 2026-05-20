<?php
$num1 = $_POST ['num1'];
$num2 = $_POST ['num2'];
if ($num1 > $num2) {
    echo "El numero menor es:" . $num2;
} else {
    echo "El numero menor es:" . $num1;
}
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>