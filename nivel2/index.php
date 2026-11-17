<?php


require_once "PokerDice.php";

$cubilete = [];

for ($i = 0; $i < 5; $i++) {
    $cubilete[] = new PokerDice();
}

foreach ($cubilete as $dado){
    $dado->tirarDado();
}

foreach ($cubilete as $indice => $dado) {
    echo "Dado " . ($indice + 1) . ": " . $dado->getUltimaTirada() . "\n";
}

echo "Total de tiradas: " . PokerDice::getTotalTiradas() . "\n";