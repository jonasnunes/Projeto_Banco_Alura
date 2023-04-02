<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, Titular};
use Alura\Banco\Modelo\{Endereco, Cpf};

require_once 'autoload.php';

$endereco = new Endereco('Arraial do Cabo', 'Um Bairro', 'Rua Projetada', '523');
$outroEndereco = new Endereco('São Pedro da Aldeia', 'Algum Bairro', 'Rua Qualquer', '72a');

$jonas = new Titular(new Cpf('123.456.789-10'), 'Jonas Nunes', $endereco);
$primeiraConta = new ContaPoupanca($jonas);

$isabelli = new Titular(new Cpf('987.654.321-54'), 'Isabelli Reis', $endereco);
$segundaConta = new ContaCorrente($isabelli);
$segundaConta->deposita(500);
$segundaConta->transfere(150, $primeiraConta);

$sogra = new Titular(new Cpf('546.225.314-99'), 'Márcia Pinheiro', $outroEndereco);
$quartaConta = new ContaCorrente($sogra);

var_dump($primeiraConta);
var_dump($segundaConta);
var_dump($quartaConta);

$sutao = new Titular(new Cpf('23.568.98.36'), 'Sutão', $endereco);
$terceiraConta = new ContaPoupanca($sutao);