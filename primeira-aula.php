<?php

$nome = 'Isaque Morais';

// função str_contains busca determinada palavra dentro de uma string
$eDaMinhaFamilia = str_contains($nome, 'Morais');

if ($eDaMinhaFamilia) {
    echo "$nome é da minha família" . PHP_EOL;
} else {
    echo "$nome não é da minha família" . PHP_EOL;
}