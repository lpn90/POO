<?php
/**
 * User: Leonardo
 * Date: 11/10/2016
 * Time: 09:38
 */

namespace PIN\DB;
use \PIN\Cliente\AbstractCliente;
use \PIN\DB\Conexao;
use \PIN\Cliente\Types\PessoaFisicaType;
use \PIN\Cliente\Types\PessoaJuridicaType;



class Persistence
{
    private $conexao;
    private $cliente;

    /**
     * persistence constructor.
     * @param $conexao
     */
    public function __construct(Conexao $conexao)
    {
        $this->conexao = $conexao;
    }
    
    public function persist(AbstractCliente $cliente)
    {
        $this->cliente = $cliente;
        return $this;
    }
    
    public function flush()
    {
        $this->conexao->beginTransaction();

        try {
            $stmt = $this->conexao->prepare(
                'INSERT INTO clintes (nome, endereco, telefone, enderecoCobranca, importancia, tipo, documento) 
                  VALUES (:nome, :endereco, :telefone, :enderecoCobranca, :importancia, :tipo, :documento)'
            );

            $stmt->bindValue(':nome', $this->cliente->getNome());
            $stmt->bindValue(':endereco', $this->cliente->getEndereco());
            $stmt->bindValue(':telefone', $this->cliente->getTelefone());
            $stmt->bindValue(':enderecoCobranca', $this->cliente->getEnderecoCobranca());
            $stmt->bindValue(':importancia', $this->cliente->getImportancia());
            $stmt->bindValue(':tipo', $this->cliente instanceof PessoaFisica ? "PF" : "PJ");
            $stmt->bindValue(':documento', $this->cliente instanceof PessoaFisica ? $this->cliente->getCpf() : $this->cliente->getCnpj());
            $stmt->execute();
            $this->conexao->commit();
        }
        catch(Exception $e) {
            $this->conexao->rollback();
        }
    }

    public function getAll() {
        $statement = $this->conexao->query(
            'SELECT * FROM cliente'
        );

        return $this->processResults($statement);
    }

    private function processResults($statement) {
        $results = array();

        if($statement) {
            while($row = $statement->fetch(PDO::FETCH_OBJ)) {
                if($row->tipo == "PF"){
                    $cliente = new PessoaFisicaType();
                    $cliente->setCpf($row->documento);
                }else{
                    $cliente = new PessoaJuridicaType();
                    $cliente->setCnpj($row->documento);
                }

                $cliente->setId($row->id);
                $cliente->setNome($row->nome);
                $cliente->setEndereco($row->endereco);
                $cliente->setTelefone($row->telefone);
                $cliente->setEnderecoCobranca($row->enderecoCobranca);
                $cliente->setImportancia($row->importancia);

                $results[] = $cliente;
            }
        }

        return $results;
    }

}