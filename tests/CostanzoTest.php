<?php

namespace FrancescoMalatesta\Costanzo\Test;

use FrancescoMalatesta\Costanzo\Costanzo;

class CostanzoTest extends \PHPUnit_Framework_TestCase
{
    private $costanzo;

    public function testTrueIsTrue()
    {
        $costanzo = new Costanzo;

        $this->assertEquals(
          'tutte ttrontate',
          $costanzo->encode('tutte stronzate')
        );
    }
}
