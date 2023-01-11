<?php

function geraEmail(): void
{
    $conteudoEmail = <<<'FINAL' 
    Olá, fulano(a)!
    
    Estamos entrando em contato para
    
    {motivo do contato}
    
    {assinatura}

    FINAL;

    echo $conteudoEmail;
}

geraEmail('Isaque Morais');