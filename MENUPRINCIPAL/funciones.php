<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php


// Definir la función para obtener la ruta de la imagen del producto
function obtenerRutaImagenProducto($imagen) {
    // Si la imagen comienza con "img/", asumimos que es una imagen definida manualmente
    if (strpos($imagen, "img/") === 0) {
        return $imagen;
    } else {
        // De lo contrario, asumimos que es una imagen de la base de datos y construimos la ruta completa
        return "img/producto/" . $imagen;
    }
}

// Aquí sigue el resto de tu código PHP para manejar el carrito
?>
