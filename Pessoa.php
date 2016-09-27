<?php

/**
 * User: Leonardo
 * Date: 27/09/2016
 * Time: 09:30
 */
class Pessoa
{
    public $nome;
    public $idade;

    /**
     * Pessoa constructor.
     * @param $nome
     * @param $idade
     */
    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }


    /**
     * @param $km
     */
    public function correr($km)
    {
        echo $this->nome." está correndo!";

        for($i=0; $km>$i; $i++)
        {
            echo ".";
        }
        echo $this->nome." terminou de correr!";
    }
}