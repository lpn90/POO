<?php

/**
 * User: Leonardo
 * Date: 30/09/2016
 * Time: 19:24
 */

require_once __DIR__ . "/contracts/PF.php";
require_once __DIR__ . "/Cliente.php";

class PessoaFisica extends Cliente implements PF
{
    
    
    protected $cpf;

    /**
     * PessoaFisica constructor.
     */
    public function __construct($id, $nome, $endereco, $telefone, $enderecoCobranca, $importancia, $cpf)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->enderecoCobranca = $enderecoCobranca;
        $this->importancia = $importancia;
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
        return $this;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }
    
    

}