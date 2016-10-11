<?php
/**
 * User: Leonardo
 * Date: 10/10/2016
 * Time: 10:15
 */

require_once ("autoload.php");

$conta = new PIN\Curso\Conta\Types\ContaType();
$conta->depositar(10);

$baconSantander = new PIN\Curso\Banco\Santander($conta);


$baconSantander->setNome("Santander Exemplo");
echo $baconSantander->getConta()->getSaldo();


$resultado = \PIN\Curso\Math::somar(10,10);

echo "<br />Resultado: ".$resultado;