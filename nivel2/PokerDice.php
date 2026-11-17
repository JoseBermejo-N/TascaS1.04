<?php

declare(strict_types=1);

class PokerDice {
    private array $carasDado = array ("A","K","Q","J","7","8");
    private static int $totalTiradas = 0;
    private ?string $ultimaTirada = null;


public function tirarDado(): void {
    $indice = array_rand($this->carasDado);
    $this->ultimaTirada = $this->carasDado[$indice];
    self::$totalTiradas++;
}

public static function getTotalTiradas():int{
    return self::$totalTiradas;
    
}

public function getUltimaTirada():?string {
    return $this->ultimaTirada;
}

}