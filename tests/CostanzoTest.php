<?php

namespace FrancescoMalatesta\Costanzo\Test;

use FrancescoMalatesta\Costanzo\Costanzo;

class CostanzoTest extends \PHPUnit_Framework_TestCase
{
    private $costanzo;

    public function testBaseCase()
    {
        $costanzo = new Costanzo;

        $this->assertEquals(
          'tutte ttrontate',
          $costanzo->encode('tutte stronzate')
        );
    }

    public function testSpCase()
    {
        $costanzo = new Costanzo;

        $this->assertEquals(
          'ecco, appetta',
          $costanzo->encode('ecco, aspetta')
        );
    }
}
