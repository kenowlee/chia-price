<?php

namespace Chia;

use Chia\Http;

/**
 * Class Preco
 * @package Preco
 *
 */
class Preco
{
    use Formatacao;
    /**
     * Buscando e Calculando Resultados
     *
     * @param string $minhasChias - sua quantidade de chia
     *
     * @return array
     */
    public static function agora(string $minhasChias = null)
    {

        $chia = Http::chia();
        $real = Http::real();

        if (!$chia || !$real) {
            return [
                'erro' => 'Não foi possivel obter os dados'
            ];
        }

        $xch = self::chiaPreco($chia);
        $brl = self::realPreco($real);
        $calculado = 0;

        if ($minhasChias) {
            $calculado = ($xch * $brl) * str_replace(',', '.', $minhasChias);
        }

        return [
            'chia' => self::real($xch),
            'real' => self::converter($xch, $brl),
            'minhasChias' => self::real($calculado)
        ];
    }

    /**
     * Buscando o valor da Chia no resultado
     */
    public static function chiaPreco(array $chia): string
    {
        return $chia['price'];
    }

    /**
     * Buscando o valor da Do Real BRL no resultado
     */
    public static function realPreco(array $real): string
    {
        return $real['USDBRL']['high'];
    }
}
