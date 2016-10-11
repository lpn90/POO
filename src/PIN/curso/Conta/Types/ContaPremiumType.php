<?php

namespace PIN\Curso\Conta\Types;

/**
 * User: Leonardo
 * Date: 04/10/2016
 * Time: 15:20
 */

use PIN\Conta\ContaAbstract as ContaAbstrata;

class ContaPremiumType extends ContaAbstrata
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