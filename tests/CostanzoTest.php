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

    public function testRtCase()
    {
        $costanzo = new Costanzo;

        $this->assertEquals(
          'chiudi la potta',
          $costanzo->encode('chiudi la porta')
        );
    }

    public function testSqCase()
    {
        $costanzo = new Costanzo;

        $this->assertEquals(
          'che facciamo a paqquetta?',
          $costanzo->encode('che facciamo a pasquetta?')
        );

        $this->assertEquals(
          'buona paqqua!',
          $costanzo->encode('buona pasqua!')
        );
    }

    public function testSchCase()
    {
        $costanzo = new Costanzo;

        $this->assertEquals(
          'faccio cchifo',
          $costanzo->encode('faccio schifo')
        );
    }
}
