<?php 
$nombre = "Juan Pérez";

$persona = array(
    "nombre"    => "Juan Pérez", 
    "edad"      => 35, 
    "promedio"  => 6.5, 
    "casado"    => false
);

function el_titulo(string $antes = '', string $despues = '', bool $mostrar = true) {
    // el título en realidad viene desde la BD 
    $titulo = "Título de mi noticia o página";
    $texto  = $antes . $titulo . $despues;

    if($mostrar) {
        echo $texto;
    }
    return $texto;
}
?> 
<!DOCTYPE html>
<html>
    <head>
        <title>Página de <?=$nombre?></title>
        <link href="estilo.php" rel="stylesheet" />
    </head>
    <body>
        <?php el_titulo('<h2>', '</h2>') ?>
        <p>
        Quisque tincidunt justo quam, imperdiet rutrum diam aliquam et. Curabitur efficitur, urna eu efficitur varius, urna dui eleifend orci, vitae interdum tellus nulla hendrerit libero. 
        </p>

        <h2>Ficha de: <?php echo $persona["nombre"] ?></h2>
    </body>
<html>