<?php

namespace FrancescoMalatesta\Costanzo\Test;

use FrancescoMalatesta\Costanzo\Costanzo;

class CostanzoTest extends \PHPUnit\Framework\TestCase
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

    public function testRcCase()
    {
        $costanzo = new Costanzo;

        $this->assertEquals(
          'pocca miteria',
          $costanzo->encode('porca miseria')
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

    public function testScAsItIs()
    {
        $costanzo = new Costanzo;

        $this->assertEquals(
          'francesco',
          $costanzo->encode('francesco')
        );
    }

    public function testScAsEntireSentence()
    {
        $costanzo = new Costanzo;

        $this->assertEquals(
          'un taluto ai miei amici',
          $costanzo->encode('un saluto ai miei amici')
        );
    }

    public function testLowerCase()
    {
        $costanzo = new Costanzo;

        $this->assertEquals(
          'ecco, appetta',
          $costanzo->encode('ECCO, ASPETTA')
        );
    }
}
