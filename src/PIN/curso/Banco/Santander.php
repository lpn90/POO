<?php

namespace PIN\Curso\Banco;
use \PIN\Curso\Conta\Types\ContaType;
use \PIN\Curso\Conta\ContaAbstract;
/**
 * User: Leonardo
 * Date: 10/10/2016
 * Time: 09:09
 */


class Santander
{
    private $nome;
    private $conta;

    /**
     * Santander constructor.
     */
    public function __construct(ContaAbstract $conta)
    {
        $this->conta = $conta;
    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getConta()
    {
        return $this->conta;
    }

    /**
     * @param mixed $conta
     */
    public function setConta($conta)
    {
        $this->conta = $conta;
    }
    
    

}