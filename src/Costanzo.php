<?php

namespace FrancescoMalatesta\Costanzo;

class Costanzo
{
    public function encode($frase)
    {
        $frase = str_replace('sp', 'pp', $frase);

        return str_replace(
            ['s', 'z'],
            't',
            $frase
        );
    }
}
