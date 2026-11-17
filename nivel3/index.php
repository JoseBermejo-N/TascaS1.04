<?php

declare(strict_types=1);

require_once "Pelicula.php";
require_once "Cine.php";
require_once "Catalogo.php";

//objetos peliculas
$pelicula1 = new Pelicula("Inception", 148, "Christopher Nolan");
$pelicula2 = new Pelicula("The Matrix", 136, "Hermanas Wachowski");
$pelicula3 = new Pelicula("El Señor de los Anillos", 178, "Peter Jackson");
$pelicula4 = new Pelicula("Dune", 155, "Denis Villeneuve");


//objetos cines
$cineA = new Cine("Cinesa Diagonal", "Barcelona", [$pelicula1, $pelicula2]);
$cineB = new Cine("Cines Yelmo", "Sant Cugat", [$pelicula1, $pelicula3]);
$cineC = new Cine("Cinesa Barnasud", "Gava", [$pelicula1, $pelicula2]);
$cineC->addPelicula(new Pelicula("Interstellar", 169, "Christopher Nolan"));

//objetos catalogo

$catalogo = new Catalogo;
$catalogo->addCine($cineA);
$catalogo->addCine($cineB);
$catalogo->addCine($cineC);



echo "///Peliculas por cada cine///\n";
foreach ($catalogo->getCines() as $cine) {
    echo $cine . "\n";
}

echo "///Película de mayor duración por cine///\n";
foreach ($catalogo->buscarPeliculasMayorDuracion() as $nombreCine => $pelicula) {
    echo $nombreCine . " -> " . $pelicula . "\n";
}

echo "///Películas por director///\n";
foreach ($catalogo->buscarPorAutor("Christopher Nolan") as $pelicula) {
    echo $pelicula . "\n";
}