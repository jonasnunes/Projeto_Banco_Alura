<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes
{
    private $totalBonificacoes = 0;

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    // método que retorna o total de bonificacoes que a empresa gastou com todos os funcionários
    public function getTotal(): float
    {
        return $this->totalBonificacoes;
    }
}