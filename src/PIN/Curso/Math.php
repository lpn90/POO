<?php
/**
 * User: Leonardo
 * Date: 10/10/2016
 * Time: 11:23
 */

namespace PIN\Curso;


class Math
{
    public static $valor = 10;
    
    public static function somar($x, $y)
    {
        return $x+$y;
    }

    /**
     * @return int
     */
    public static function getValor()
    {
        return self::$valor;
    }

}