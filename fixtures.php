<?php
/**
 * User: Leonardo
 * Date: 11/10/2016
 * Time: 11:02
 */

require_once __DIR__ . "/autoload.php";
use \PIN\DB\Conexao;
use \PIN\DB\Persistence;
use \PIN\Cliente\Types\PessoaFisicaType;
use \PIN\Cliente\Types\PessoaJuridicaType;

$db = new Conexao();

try {
    $pdo = $db->connect();
// DROP DATABASE
    $query = "DROP DATABASE IF EXISTS `poo`";
    $pdo->exec($query);
// CREATE DATABASE
    $query = "CREATE DATABASE `poo`";
    $pdo->exec($query);
// SELECT DATABASE
    $query = "USE `poo`";
    $pdo->exec($query);
// CREATE TABLE
    $query = "CREATE TABLE clientes(
                 id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                 nome VARCHAR(255) NOT NULL,
                 endereco VARCHAR(255) NOT NULL,
                 telefone VARCHAR(20) NOT NULL,
                 enderecoCobranca VARCHAR(255) NULL,
                 importancia INT(1) NOT NULL,
                 tipo VARCHAR(2) NULL,
                 documento VARCHAR(20) NULL
)";
    $pdo->exec($query);
    $persister = new Persistence($pdo);
    $cliente1 = new PessoaFisica(1,'Ana','Rua 1, 35', '(31) 9 8432-5893', 'Av. Paraguai, 12', rand(0,5),"111.111.111-11");
    $cliente2 = new PessoaFisica(2,'Maria','Rua 1, 35', '(31) 9 8432-5893', null, rand(0,5),"222.222.222-22");
    $cliente3 = new PessoaFisica(3,'Paula','Rua 1, 35', '(31) 9 8432-5893', 'Av. Paraguai, 12', rand(0,5),"333.333.333-33");
    $cliente4 = new PessoaFisica(4,'José','Rua 1, 35', '(31) 9 8432-5893', null, rand(0,5),"444.444.444-44");
    $cliente5 = new PessoaFisica(5,'Luiz','Rua 1, 35', '(31) 9 8432-5893', 'Av. Paraguai, 12', rand(0,5),"555.555.555-55");
    $cliente6 = new PessoaJuridica(6, 'Lojas Prado', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
    $cliente7 = new PessoaJuridica(7, 'Armarinho 1', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
    $cliente8 = new PessoaJuridica(8, 'Café Preto', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
    $cliente9 = new PessoaJuridica(9, 'Jóias Helena', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
    $cliente10 = new PessoaJuridica(10, 'Chapéus Touro', 'Rua A, 45', '(31) 3222-2222', 'Rua A, 45', rand(0,5), '76.208.286/0001-67');
    $persister
        ->persist($cliente1)
        ->flush();
    $persister
        ->persist($cliente2)
        ->flush();
    $persister
        ->persist($cliente3)
        ->flush();
    $persister
        ->persist($cliente4)
        ->flush();
    $persister
        ->persist($cliente5)
        ->flush();
    $persister
        ->persist($cliente6)
        ->flush();
    $persister
        ->persist($cliente7)
        ->flush();
    $persister
        ->persist($cliente8)
        ->flush();
    $persister
        ->persist($cliente9)
        ->flush();
    $persister
        ->persist($cliente10)
        ->flush();

    echo "Fixtures executadas com sucesso!\n";
} catch(\PDOException $ex) {
    echo "Erro: {$ex->getMessage()}";
}