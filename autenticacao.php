<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\{Cpf, Endereco};
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Service\Autenticador;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Diretor('Boss Fdp', new Cpf('111.222.333-44'), 2000);
$umGerente = new Gerente('Boss legal', new Cpf('555.666.777-88'), 5000);
$umTitular = new Titular(new Cpf('123.456.789-10'), 'Teste123',
    new Endereco('New York', 'Teste', 'Rua da terra', 20));

$autenticador->tentaLogin($umDiretor, '4321');

echo PHP_EOL;

$autenticador->tentaLogin($umGerente, '1234');

echo PHP_EOL;

$autenticador->tentaLogin($umTitular, 'abcd');