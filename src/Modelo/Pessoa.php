<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    use AcessoPropriedades;
    protected string $nome;
    private Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getNumero();
    }

    // o método pode ser usado pelas classes filhas mas não pode ser sobreescrito
    final protected function validaNome(string $nome)
    {
        if(mb_strlen($nome) < 5){
            echo "Não foi possível criar a conta! O nome precisa ter no mínimo 5 caracteres." . PHP_EOL;
        }
    }
}