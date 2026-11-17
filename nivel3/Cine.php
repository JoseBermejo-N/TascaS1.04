<?php
declare(strict_types=1);

require_once "Pelicula.php";
//atributos
class Cine {
    private string $nombre;
    private string $poblacion;
    private array $peliculas = [];
//constructor
public function __construct (string $nombre, string $poblacion, array $peliculas) {
    $this->nombre = $nombre;
    $this->poblacion = $poblacion;
    $this->peliculas = $peliculas;
}

//getters

public function getNombre():string{
    return $this->nombre;
}

public function getPoblacion():string{
    return $this->poblacion;
}
public function getPeliculas():array{
    return $this->peliculas;
}

//funcionalidades
public function addPelicula(Pelicula $pelicula): void {
        $this->peliculas[] = $pelicula;
    }

public function getPeliculaMayorDuracion():?Pelicula {
    $peliMasLarga = null;

        foreach ($this->peliculas as $pelicula) {
            if ($peliMasLarga === null || $pelicula->getDuracion() > $peliMasLarga->getDuracion()) {
                $peliMasLarga = $pelicula;
            }
        }

        return $peliMasLarga;

}
public function getPeliculasPorAutor(string $autor): array
{
    $resultado = [];
    $autor = strtolower(trim($autor));

    foreach ($this->peliculas as $pelicula) {
        if (strtolower($pelicula->getAutor()) === $autor) {
            $resultado[] = $pelicula;
        }
    }

    return $resultado;
}

public function __toString():string {
    return  "Cine: " . $this->nombre . "\n" .
            "Poblacion: " . $this->poblacion . "\n" .
            "Peliculas:\n -" . implode("\n- ", $this->peliculas) . "\n\n";

}
}

