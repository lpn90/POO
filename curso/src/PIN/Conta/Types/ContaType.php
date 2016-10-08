<?php

namespace PIN\Conta\Types;

/**
 * User: Leonardo
 * Date: 29/09/2016
 * Time: 15:30
 */
//Apelido para a Classe: use caminho as Apelido
use PIN\Conta\ContaAbstract as ContaAbstrata;

class ContaType extends ContaAbstrata
{
    protected function calculoDeposito($valor)
    {
        return $valor += 10;
    }

}