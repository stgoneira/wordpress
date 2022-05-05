<?php 
$nombre = "Juan Pérez";

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
        <h1> <?php el_titulo() ?> </h1>
        <p>
        Quisque tincidunt justo quam, imperdiet rutrum diam aliquam et. Curabitur efficitur, urna eu efficitur varius, urna dui eleifend orci, vitae interdum tellus nulla hendrerit libero. Nulla pulvinar nulla at tincidunt interdum. Etiam sit amet arcu felis. Etiam euismod, enim eget facilisis euismod, arcu enim bibendum dui, vel luctus odio sem non erat. Etiam luctus nisl sed mollis imperdiet. Phasellus ultricies congue vehicula. Sed venenatis ante pretium dui viverra porta. Sed tempus pharetra ipsum sed condimentum. Curabitur ac ex sit amet dui tempor vulputate ac ut magna. Duis sit amet urna purus. Phasellus suscipit odio non libero tincidunt molestie. Phasellus molestie metus quis elit imperdiet, non rhoncus sapien venenatis. Praesent sem dolor, aliquam non velit a, fermentum commodo nulla. Suspendisse sodales vehicula risus id tristique.
        </p>
    </body>
<html>