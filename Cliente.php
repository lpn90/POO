<?php

/**
 * User: Leonardo
 * Date: 27/09/2016
 * Time: 15:42
 */
class Cliente
{
    public $id;
    public $nome;
    public $cpf;
    public $endereco;
    public $telefone;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }
    
    
}