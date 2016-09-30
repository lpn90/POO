<?php

/**
 * User: Leonardo
 * Date: 27/09/2016
 * Time: 10:39
 */
class Produto
{
    private $nome;
    private $descricao;
    private $valor;
    private $estoque;

    /**
     * Produto constructor.
     * @param $nome
     * @param $valor
     * @param $descricao
     * @param $estoque
     */
    /*
    public function __construct($nome, $valor, $descricao, $estoque)
    {
        $this->nome = $nome;
        $this->valor = $valor;
        $this->descricao = $descricao;
        $this->estoque = $estoque;
    }*/

    public function baixaEstoque()
    {
        $this->estoque = $this->estoque - 1;
    }

}