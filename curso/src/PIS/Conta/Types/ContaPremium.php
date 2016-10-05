<?php

/**
 * User: Leonardo
 * Date: 04/10/2016
 * Time: 15:20
 */
class ContaPremium extends ContaAbstract
{
    public function __construct()
    {
        $this->saldo += 10;
    }

    protected function calculoDeposito($valor)
    {
        return $valor += 20;
    }

}