<?php

namespace Chia;

/**
 * Class Formatacao
 * @package Formatacao
 *
 */
trait Formatacao
{
    /**
     * Formatando BRL
     */
    public static function real(string $valor): string
    {
        return number_format($valor, 2, ",", ".");
    }

    /**
     * Converter XCH para BRL
     */
    public static function converter(string $xch, string $brl): string
    {
        return self::real($brl * $xch);
    }
}
