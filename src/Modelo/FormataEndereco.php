<?php

namespace Alura\Banco\Modelo;

trait FormataEndereco
{
    public function __toString(): string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
}