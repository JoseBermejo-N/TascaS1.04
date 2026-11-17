<?php

declare(strict_types=1);

class Pelicula {
    private string $titulo;
    private int $duracion;
    private string $autor;


public function __construct (string $nombre, int $duracion, string $autor){
    $this->nombre = $nombre;
    $this->duracion = $duracion;
    $this->autor = $autor;
}

public function getNombre():string {
    return $this->nombre;
}

public function getDuracion():float {
    return $this->duracion;
}

public function getAutor():string {
    return $this->autor;
}

public function __toString():string {
    return sprintf ("titulo: %s | duración: %d min| autor: %s", 
                    $this->nombre,  
                    $this->duracion,
                    $this->autor );

}
}