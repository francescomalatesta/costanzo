<?php

namespace FrancescoMalatesta\Costanzo;

class Costanzo
{
    public function encode($frase)
    {
        return str_replace(
            ['s', 'z'],
            't',
            $frase
        );
    }
}
