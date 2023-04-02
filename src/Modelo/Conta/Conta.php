<?php

/*
 * Propriedades devem ser privadas
 * Métodos podem ser públicos
 * */

namespace Alura\Banco\Modelo\Conta;

abstract class Conta // para ter um método abstrato, a classe também precisa ser abstrata
{
    private Titular $titular;
    protected float $saldo;
    private static $totalDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$totalDeContas++;
    }

    public function __destruct() // método será executado quando houver alguma instância inutilizada
    {
        self::$totalDeContas--;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }

    public function getCpf()
    {
        return $this->titular->getCpf();
    }

    public function getNome()
    {
        return $this->titular->getNome();
    }

    public function deposita(float $valorADepositar): void
    {
        if($valorADepositar <= 0){
            echo "O valor não pode ser menor ou igual a zero" . PHP_EOL;
            return;
        }

        $this->saldo += $valorADepositar;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;

        if($valorSaque > $this->saldo){
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    // métodos abstratos obrigam as classes filhas a implementá-los
    abstract protected function percentualTarifa(): float;

    public static function getTotalDeContas(): int
    {
        return self::$totalDeContas;
    }
}