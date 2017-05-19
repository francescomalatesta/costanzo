<?php

namespace FrancescoMalatesta\Costanzo;

class Costanzo
{
    public function encode($frase)
    {
        $mapping = [
            '/sq/' => 'qq',
            '/rt/' => 'tt',
            '/rc/' => 'cc',
            '/sp/' => 'pp',
            '/sch/' => 'cch',
            '/(?!.c)(s)/' => 't',
            '/z/' => 't',
        ];

        return preg_replace(
            array_keys($mapping), 
            array_values($mapping), 
            strtolower($frase)
        );
    }
}
