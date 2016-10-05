<?php

/**
 * User: Leonardo
 * Date: 05/10/2016
 * Time: 11:48
 */
abstract class ContaAbstract
{
    use ProcessoTrait;

    protected $saldo;
    
    public final function depositar($valor)
    {
        $this->iniciaProcesso();
        $this->saldo += $this->calculoDeposito($valor);
        $this->finalizaProcesso();
        return true;
    }

    public function sacar($valor)
    {
        $this->iniciaProcesso();
        if($this->saldo >= $valor){
            $this->saldo -= $valor;
            $this->finalizaProcesso();
            return true;
        }

        return false;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        return $this->saldo;
    }
    
    
    abstract protected function calculoDeposito($valor);
    
}