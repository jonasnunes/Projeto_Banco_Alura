<?php

namespace Alura\Banco\Modelo;

final class Cpf // a classe não pode ser extendida
{
    private string $numero;

    public function __construct(string $numero)
    {
        // validação "simples" de cpf
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
            'options' => [
                'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
            ]
        ]);

        if($numero === false){
            echo "CPF inválido!" . PHP_EOL;
            exit();
        }

        $this->numero = $numero;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

}