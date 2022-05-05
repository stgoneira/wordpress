<?php 
// estos es un comentario de una línea 

/* 
esto es 
un comentario
multilínea 
*/

// variable 
$nombre     = "Juanito Pérez"; // string o texto 
$edad       = 30; // número entero 
$promedio   = 6.5; // número con decimales 
$casado     = false; // bool 
// arrays o arreglos (asociativo)
$persona = array(
    "nombre"    => "Juanito Pérez",
    "edad"      => 30,
    "promedio"  => 6.5,
    "casado"    => false 
);

// función 
function el_titulo() {
    // imaginar que PHP va y se conecta a la BD (MySQL)
    // y recupera el título de un POST 
    echo "Cómo crear Temas para Wordpress";
}

function el_contenido(string $antes = "", string $despues = "", bool $escribir = true) {    
    $contenido = "Lorem ipsum dolor asit atme.....";

    if( $escribir ) {
        // si $escribir es VERDADERO (true) 
        echo $antes . $contenido . $despues; 
    } else {
        // si $escribir es FALSO (false)
        return $antes . $contenido . $despues;
    }
}
?> 
<!doctype html>
<html>
<head>
    <title>Ficha de <?php echo $nombre; ?></title>
</head>
<body>
    <?php if( ! $casado ): ?>
        <p>Puedes salir de noche </p>
    <?php endif; ?>

    <?php /* 
    <?php if( $edad > 18 ): ?>
        <p>Eres mayor de edad</p>
    <?php elseif($edad > 18 && $edad < 30): ?>
        <p>Eres joven aún.</p>
    <?php else : ?>
        <p>Eres menor de edad</p>
    <?php endif; ?>
    */ ?> 

    <?php /*
    <div class="post">
        <h1><?php el_titulo(); ?></h1>
        <?php el_contenido("<p>", "</p>"); ?>
        <p>Edad: <?=$persona["edad"]?></p>
        <p>Promedio: <?=$promedio?></p>
    </div>

    <div>
        <h1>Ficha de <?=$nombre?></h1>
        <p>Edad: <?php print $edad; ?></p>
    </div>
    */ ?>
</body>
</html>