<?php

/**
 * User: Leonardo
 * Date: 27/09/2016
 * Time: 15:42
 */

require_once __DIR__ . "/contracts/EnderecoCobranca.php";
require_once __DIR__ . "/contracts/Importancia.php";

class Cliente implements EnderecoCobranca, Importancia
{
    protected $id;
    protected $nome;
    protected $endereco;
    protected $telefone;
    protected $enderecoCobranca;
    protected $importancia;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
        return $this;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    /**
     * @param mixed $enderecoCobranca
     */
    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getImportancia()
    {
        return $this->importancia;
    }

    /**
     * @param mixed $importancia
     */
    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;
        return $this;
    }
    
    
}