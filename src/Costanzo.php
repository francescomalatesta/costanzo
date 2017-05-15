<?php

namespace FrancescoMalatesta\Costanzo;

class Costanzo
{
    public function encode($frase)
    {
        $frase = strtolower($frase);
        
        $frase = str_replace('sq', 'qq', $frase);
        $frase = str_replace('rt', 'tt', $frase);
        $frase = str_replace('sp', 'pp', $frase);
        $frase = str_replace('sch', 'cch', $frase);

        return str_replace(
            ['s', 'z'],
            't',
            $frase
        );
    }
}
