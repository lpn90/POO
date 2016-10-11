<?php
namespace PIN;

/**
 * User: Leonardo
 * Date: 27/09/2016
 * Time: 09:30
 */
class Pessoa
{
    public $nome;
    public $dataNascimento;
    public $cpf;
    public $endereco;
    public $telefone;

    /**
     * Pessoa constructor.
     * @param $nome
     * @param $cpf
     * @param $idade
     * @param $telefone
     */
    public function __construct($nome, $cpf, $dataNascimento, $telefone)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNascimento = $dataNascimento;
        $this->telefone = $telefone;
    }


}