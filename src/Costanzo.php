<?php

namespace FrancescoMalatesta\Costanzo;

class Costanzo
{
    public function encode($frase)
    {
        $frase = strtolower($frase);

        $frase = str_replace('sq', 'qq', $frase);
        $frase = str_replace('rt', 'tt', $frase);
        $frase = str_replace('rc', 'cc', $frase);
        $frase = str_replace('sp', 'pp', $frase);
        $frase = str_replace('sch', 'cch', $frase);

        $frase = preg_replace('/(?!.c)(s)/', 't', $frase);
        $frase = str_replace('z', 't', $frase);

        return $frase;
    }
}
