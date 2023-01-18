<?php

$telefone = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 22222 - 2222'];

# Função preg_match serve para passar valores regulares
foreach ($telefone as $telefone) {
    $telefoneValido = preg_match(
        '#\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}#',
        $telefone,

    ); if ($telefoneValido) {
        echo 'Telefone válido' . PHP_EOL;
    } else {
        echo 'Telefone inválido' . PHP_EOL;
    }
}
