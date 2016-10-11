<?php
/**
 * User: Leonardo
 * Date: 07/10/2016
 * Time: 15:45
 */

use PIN\DB\Conexao;
use PIN\DB\Persistence;

$conn = new Conexao();
$presistence = new Persistence($conn);
$clientes = $presistence->getAll();