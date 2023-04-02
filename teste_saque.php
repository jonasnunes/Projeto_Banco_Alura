<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{Conta, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{Endereco, Cpf};

$teste = new \Alura\Banco\Modelo\Conta\ContaCorrente(
    new Titular(
        new Cpf('123.456.789-10'),
        'Teste da Silva',
        new Endereco('Teste', 'Testando', 'Rua Projetada', '404'),
    )
);

$teste->deposita(150);
$teste->saca(50);

var_dump($teste);


$teste2 = new ContaPoupanca(
    new Titular(
        new Cpf('123.456.789-10'),
        'Teste da Silva',
        new Endereco('Teste', 'Testando', 'Rua Projetada', '404'),
    )
);

$teste2->deposita(150);
$teste2->saca(35);

var_dump($teste2);