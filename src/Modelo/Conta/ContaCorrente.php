<?php

namespace Alura\Banco\Modelo\Conta;

class ContaCorrente extends Conta
{
    protected function percentualTarifa(): float
    {
        return 0.05;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void
    {
        // verificando se o valor a transferir é maior do que o saldo da conta em que vai sair o valor
        if($valorATransferir > $this->saldo){
            echo "Saldo indisponível" . PHP_EOL;
            return;
        }

        // sacando o valor da conta atual
        $this->saca($valorATransferir);
        // transferindo para a outra conta
        $contaDestino->deposita($valorATransferir);
    }
}