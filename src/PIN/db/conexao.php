<?php

namespace PIN\DB;

/**
 * User: Leonardo
 * Date: 11/10/2016
 * Time: 09:25
 */
class Conexao
{
    private $conexao;
    protected $config;


    /*Método construtor do banco de dados*/
    public function __construct()
    {
        $this->config = parse_ini_file("./config.ini");
    }
    
    /*Evita que a classe seja clonada*/
    public function __clone(){}

    /*Método que destroi a conexão com banco de dados e remove da memória todas as variáveis setadas*/
    public function __destruct() {
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
    }

    public function connect(){

        try
        {
            $this->conexao = new \PDO("".$this->config['dbtype'].":host=".$this->config['host'].";port=".$this->config['port'].";dbname=".$this->config['dbname']."",
                $this->config['user'], $this->config['password'],
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
            ]);
        }
        catch (PDOException $i)
        {
            //se houver exceção, exibe
            die("Erro: <code>" . $i->getMessage() . "</code>");
        }

        return ($this->conexao);
    }

    public function connectFix(){

        try
        {

            $this->conexao = new \PDO("".$this->config['dbtype'].":host=".$this->config['host'].";port=".$this->config['port']."",
                $this->config['user'], $this->config['password'],
                [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                ]);
        }
        catch (PDOException $i)
        {
            //se houver exceção, exibe
            die("Erro: <code>" . $i->getMessage() . "</code>");
        }

        return ($this->conexao);
    }

    public function disconnect(){
        $this->conexao = null;
    }
    

}