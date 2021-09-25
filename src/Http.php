<?php

namespace Chia;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

/**
 * Class Http
 * @package Http
 *
 */
class Http
{
    /**
    * Prepara os detalhes para efetuar a requisição e formatar o resultado
    * @param string $rota
    */
    public static function call(string $rota)
    {
        $url = [
            'chia' => 'https://api.chiaprofitability.com/market',
            'real' => 'https://economia.awesomeapi.com.br/last/USD-BRL'
        ];

        try {
            $cliente = new Client();
            $resposta = $cliente->request('GET', $url[$rota]);

            return json_decode($resposta->getBody()->getContents(), true);
        } catch (ClientException $e) {
            return false;
        }
    }

    /**
    * Buscando Preço da Chia
    */
    public static function chia()
    {
        return self::call('chia');
    }
    /**
    * Buscando Preço do Dolar/BRL
    */
    public static function real()
    {
        return self::call('real');
    }
}
