<?php

$nome = 'Isaque Morais';
$email = 'isaquemorais@alura.com.br';
$senha = '12345';

// Pegando o contém dentro da string e devolvendo valor em byte
echo strlen($senha) . PHP_EOL;

if (strlen($senha)< 8) {
    echo 'Senha insegura' . PHP_EOL;
}

// Busca dentro de uma string um parametro especifico
$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo 'Nome:' . $nome . PHP_EOL;
echo 'Sobrenome:' . $sobrenome . PHP_EOL;