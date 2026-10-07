<?php


// Cargamos los archivos de las figuras que vamos a instanciar y su clase padre
require_once 'Shape.php';
require_once 'Triangle.php';
require_once 'Rectangle.php';


//creamos un objeto de cada figura y calculamos su area
$triangle = new Triangle(9, 5);
echo "Area of the triangle: " . $triangle->calculateArea() . "\n";

$rectangle = new Rectangle(8, 3);
echo "Area of the rectangle: " . $rectangle->calculateArea() . "\n";