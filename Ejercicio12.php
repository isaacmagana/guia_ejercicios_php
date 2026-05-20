<?php
$base = $_POST ['base'];
$altura = $_POST ['altura'];
$unidad = $_POST ['unidad'];
$area = ($base * $altura);

switch ($unidad){
    case "mm":
     echo "El área del rectángulo es: " . $area . "mm²";
    break;

     case "cm":
        echo "El área del rectángulo es: " . $area . "cm²";
    break;
    
    case "m":
        echo "El área del rectángulo es: " . $area . "m²";
    break;
}
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
?>
   