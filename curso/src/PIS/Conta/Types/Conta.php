<?php

/**
 * User: Leonardo
 * Date: 29/09/2016
 * Time: 15:30
 */
class Conta extends ContaAbstract
{
    protected function calculoDeposito($valor)
    {
        return $valor += 10;
    }

}