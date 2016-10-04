<?php

/**
 * User: Leonardo
 * Date: 04/10/2016
 * Time: 15:20
 */
class ContaPremium extends Conta
{
    public function __construct()
    {
        $this->saldo += 10;
    }

    protected function calculoDeposito($valor)
    {
        $valorNormal = parent::calculoDeposito($valor);

        return $valorNormal += 20;
    }

}