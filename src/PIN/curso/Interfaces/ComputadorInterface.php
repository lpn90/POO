<?php
namespace PIN\Curso\Interfaces;

/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 27/09/2016
 * Time: 11:25
 */
interface ComputadorInterface
{
    public function getTela();
    public function getCor();
    public function getPeso();
    public function getTamanho();
}