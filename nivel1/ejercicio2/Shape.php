<?php


class Shape {

    //declaramos atributos
    protected float $width;
    protected float $height; 

    //creamos constructor 
    public function __construct (float $width, float $height) {
        $this -> width = $width;
        $this -> height = $height;
    }

}