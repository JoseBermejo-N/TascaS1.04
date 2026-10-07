<?php



class Triangle extends Shape {

    //cremos funcion para calcular area del triangulo.
    public function calculateArea(): float {
        return ($this->width * $this->height) / 2;
    }
}
