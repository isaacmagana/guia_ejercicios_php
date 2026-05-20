<?php
$lado = $_POST ['lado'];
$unidad = $_POST['unidad'];
$perimetro = ($lado * 4);

    switch ($unidad){
        case "mm":
            echo "El perimetro de el cuadrado es: " . $perimetro . " milimetros.";
            break;
        case "cm":
            echo "El perimetro de el cuadrado es: " . $perimetro . " centimetros.";
            break;
        case "m":
            echo "El perimetro de el cuadrado es:" . $perimetro . " metros.";
    }
echo "<div style='text-align: right; margin-top: 40px;'>";
echo "<a href='index.php'>Volver al Menú Principal</a>";
echo "</div>";
    ?>
