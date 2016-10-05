<?php

/**
 * User: Leonardo
 * Date: 30/09/2016
 * Time: 19:27
 */

require_once __DIR__ . "/contracts/PJ.php";
require_once __DIR__ . "/Cliente.php";

class PessoaJuridica extends Cliente implements PJ
{
    protected $cnpj;

    /**
     * PessoaJuridica constructor.
     */
    public function __construct($id, $nome, $endereco, $telefone, $enderecoCobranca, $importancia, $cnpj)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->enderecoCobranca = $enderecoCobranca;
        $this->importancia = $importancia;
        $this->cnpj = $cnpj;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
        return $this;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

}