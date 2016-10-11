<?php
/**
 * User: Leonardo
 * Date: 07/10/2016
 * Time: 15:45
 */

use PIN\Cliente\Types\PessoaFisicaType as PessoaFisica;
use PIN\Cliente\Types\PessoaJuridicaType as PessoaJuridica;

$cliente1 = new PessoaFisica(1,'Ana','Rua 1, 35', '(31) 9 8432-5893', 'Av. Paraguai, 12', rand(0,5),'11111111111');
$cliente2 = new PessoaFisica(2,'Maria','Rua 1, 35', '(31) 9 8432-5893', null, rand(0,5),'22222222222');
$cliente3 = new PessoaFisica(3,'Paula','Rua 1, 35', '(31) 9 8432-5893', 'Av. Paraguai, 12', rand(0,5),'33333333333');
$cliente4 = new PessoaFisica(4,'José','Rua 1, 35', '(31) 9 8432-5893', null, rand(0,5),'44444444444');
$cliente5 = new PessoaFisica(5,'Luiz','Rua 1, 35', '(31) 9 8432-5893', 'Av. Paraguai, 12', rand(0,5),'55555555555');
$cliente6 = new PessoaJuridica(6, 'Lojas Prado', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
$cliente7 = new PessoaJuridica(7, 'Armarinho 1', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
$cliente8 = new PessoaJuridica(8, 'Café Preto', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
$cliente9 = new PessoaJuridica(9, 'Jóias Helena', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
$cliente10 = new PessoaJuridica(10, 'Chapéus Touro', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');

$clientes = [
    $cliente1, $cliente2, $cliente3, $cliente4, $cliente5,
    $cliente6, $cliente7, $cliente8, $cliente9, $cliente10
];