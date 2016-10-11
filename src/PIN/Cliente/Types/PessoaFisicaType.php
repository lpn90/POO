<?php

namespace PIN\Cliente\Types;

/**
 * User: Leonardo
 * Date: 30/09/2016
 * Time: 19:24
 */

use PIN\Cliente\AbstractCliente;
use PIN\Cliente\Interfaces\PFInterface;

//require_once __DIR__ . "/Contracts/PFInterface.php";
//require_once __DIR__ . "/AbstractCliente.php";

class PessoaFisicaType extends AbstractCliente implements PFInterface
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