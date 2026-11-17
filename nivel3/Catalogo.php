<?php
declare(strict_types=1);

require_once "Pelicula.php";
require_once "Cine.php";

class Catalogo {

private array $cines = [];

public function addCine(Cine $cine){
    $this->cines[] = $cine;
}

public function getCines():array {
    return $this->cines;
}


public function buscarPeliculasMayorDuracion():array {
    $resultado = [];
   
    foreach ($this->cines as $cine){
        $resultado[$cine->getNombre()]=$cine->getPeliculaMayorDuracion();
    }
    return $resultado;
}
public function buscarPorAutor(string $autor): array{

    $resultado = [];

    foreach ($this->cines as $cine) {
        foreach ($cine->getPeliculasPorAutor($autor) as $pelicula) {
           if (!in_array($pelicula, $resultado)) {
                $resultado[] = $pelicula;
           }
        }

    return $resultado;
    }   
}
} 











