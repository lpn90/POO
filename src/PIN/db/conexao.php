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
        $this->config = parse_ini_file(__DIR__ . "/../../../config.ini", false);
    }
    
    /*Evita que a classe seja clonada*/
    public function __clone(){}

    /*Método que destroi a conexão com banco de dados e remove da memória todas as variáveis setadas*/
    public function __destruct() {
        foreach ($this as $key => $value) {
            unset($this->$key);
        }
    }

   /* private static $dbtype   = "mysql";
    private static $host     = "localhost";
    private static $port     = "3306";
    private static $user     = "root";
    private static $password = "P1nt3ch@052016";
    private static $db       = "poo";*/

    /*Metodos que trazem o conteudo da variavel desejada
    @return   $xxx = conteudo da variavel solicitada*/
    /*private function getDBType()  {return self::$dbtype;}
    private function getHost()    {return self::$host;}
    private function getPort()    {return self::$port;}
    private function getUser()    {return self::$user;}
    private function getPassword(){return self::$password;}
    private function getDB()      {return self::$db;}*/

    public function connect(){
        try
        {
            $this->conexao = new PDO($this->config['dbtype'].":host=".$this->config['host'].";port=".$this->config['port'].";dbname=".$this->config['dbname'], $this->config['user'], $this->config['password']);
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