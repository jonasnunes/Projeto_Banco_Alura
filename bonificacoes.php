<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\{Diretor, EditorVideo, Gerente, Programador_PHP};

$diretor = new Diretor('Sutão Dog',
    new Cpf('123.456.789-10'),
    6500);

$gerente = new Gerente('Isabelli Reis',
    new Cpf('123.456.789-10'),
    3500);

$programador = new Programador_PHP('Jonas Nunes',
    new Cpf('123.654.987-65'),
    3500);

// programador passa a receber 6125
$programador->sobeDeNivel();

$controlador = new ControladorDeBonificacoes();

$controlador->adicionaBonificacao($diretor);
$controlador->adicionaBonificacao($gerente);
//$controlador->adicionaBonificacao($programador);

$editorDeVideo = new EditorVideo('Abel Mendes',
new Cpf('255.255.255-01'),
1500);

$controlador->adicionaBonificacao($editorDeVideo);

echo "Total de bonificações: " . $controlador->getTotal() . PHP_EOL;