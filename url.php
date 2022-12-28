<?php

$url = 'https://alura.com.br';


// Função que verifica a palavra no começo da string PHP na versão 8.1
if (str_starts_with($url, 'https')) {
    echo 'É uma URL segura para acesso ao site!';
} else {
    echo 'Não é uma URL segura para acesso ao site!';
}

echo PHP_EOL;

// Função que verifica a palavra no final da string PHP na versão 8.1
if (str_ends_with($url, '.br')) {
    echo 'É dominio brasileiro';
} else {
    echo 'Não é um dominio brasileiro';
}

echo PHP_EOL;
