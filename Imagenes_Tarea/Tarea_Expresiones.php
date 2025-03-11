<?php
//Alcantara Angeles Uriel Iñaki

// Definir valores para las ecuaciones
//A
$xA = 2;
$yA = 4;
//B
$xB = 3;
//C
$xC = 2;
//D
$xD = 2;
//E
$xE = 4;

// Calcular la ecuación A
function calcularEcuacionA($x, $y) {
    return (1 / $x) + (($x + $y) / 3) + (2 * ($x / $y));
}

// Calcular la ecuación B
function calcularEcuacionB($x) {
    return (((0.5 * $x) + ((3 + $x) * pow($x, 2))) / 2) / (5 * $x);
}

// Calcular la ecuación C
function calcularEcuacionC($x) {
    return (sqrt(4 * pow($x, 2) + 9) / 5) + abs($x);
}

//Calcular la ecuación D
function calcularEcuacionD($x) {
    $suma = 0.875; // (1/2 + 1/4 + 1/8)
    return ($suma * pow($x, 1/3)) / ((sqrt($x) + (1.5 * pow($x, 2))) / 2);
}

// Calcular la ecuación E
function calcularEcuacionE($x) {
    return sqrt(((pow($x, 2) / 2) + (1 / sqrt($x))) / (3 + (0.5 * pow($x, 3))));
}



//Llamando a las funciones
$resultadoA = calcularEcuacionA($xA, $yA);
$resultadoB = calcularEcuacionB($xB);
$resultadoC = calcularEcuacionC($xC);
$resultadoD = calcularEcuacionD($xD);
$resultadoE = calcularEcuacionE($xE);
?>

<html>
<head>
    <title>Resultados</title>
</head>
<body>
    <h1>Resultados de Ecuaciones</h1>   
   
    
    <p>Respuesta de la ecuación A es: <?php echo $resultadoA; ?></p>
    <img src="imgA.jpg" alt="Ecuación A">

    <p>Respuesta de la ecuación B es: <?php echo $resultadoB; ?></p>
    <img src="imgB.jpg" alt="Ecuación B">

    <p>Respuesta de la ecuación C es: <?php echo $resultadoC; ?></p>
    <img src="imgC.jpg" alt="Ecuación C">

    <p>Respuesta de la ecuación D es: <?php echo $resultadoD; ?></p>
    <img src="imgD.jpg" alt="Ecuación D">

    <p>Respuesta de la ecuación E es: <?php echo $resultadoE; ?></p>
    <img src="imgE.jpg" alt="Ecuación E">

</body>
</html>
