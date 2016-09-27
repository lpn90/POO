<?php
/**
 * User: Leonardo
 * Date: 27/09/2016
 * Time: 10:00
 */
require_once "Pessoa.php";
require_once "Produto.php";
require_once "Tenis.php";
/*
$pessoa1 = new Pessoa("Leonardo", 26);
$pessoa2 = new Pessoa("Maria", 30);

echo $pessoa1->correr(50);
*/
$tenis = new TenisAdidas();
$tenis->getCor();

$tenis2 = new SapaTenis();
$tenis2->getCor();