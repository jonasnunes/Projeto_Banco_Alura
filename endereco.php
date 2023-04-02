<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereco = new Endereco('Arraial do Cabo', 'Um Bairro', 'Rua Projetada', '526');
$outroEndereco = new Endereco('São Pedro da Aldeia', 'Algum Bairro', 'Rua Qualquer', '82');

echo $endereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;
echo $endereco->rua . PHP_EOL;
echo $endereco->bairro . PHP_EOL;
echo $endereco->cidade . PHP_EOL;
echo $endereco->numero;