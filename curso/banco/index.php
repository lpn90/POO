<?php
/**
 * User: Leonardo
 * Date: 29/09/2016
 * Time: 15:33
 */

require_once "Conta.php";

$conta = new ContaPremium();

$conta->depositar(100);
$conta->sacar(50);

echo $conta->getSaldo();