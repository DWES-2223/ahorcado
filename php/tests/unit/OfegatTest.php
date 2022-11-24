<?php

use Jocs\Clases\Ofegat;
use Jocs\Exceptions\OfegatException;

class OfegatTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
        require_once('./vendor/autoload.php');
    }


   public function testConstructOfegat()
   {
        $of = new Ofegat('Independencia');
        $this->assertEquals('independencia', $of->getParaula());
        $this->assertEquals([], $of->getLletres());
        $this->assertEquals(7, $of->getMaxErrades());
   }

   public function testExceptionsNovaLletra()
   {
       $of = new Ofegat('Independencia');
       $this->expectException(OfegatException::class);
       $of->novaLletra('');
       $this->expectException(OfegatException::class);
       $of->novaLletra('AV');
       $this->expectException(OfegatException::class);
       $of->novaLletra('2');
   }

   public function testSuccesfullNovaLletra()
   {
       $of = new Ofegat('Independencia');
       $of->novaLletra('i');
       $this->assertEquals(['i'], $of->getLletres());
       $this->assertEquals(0,$of->getErrades());

   }

    public function testFailNovaLletra()
    {
        $of = new Ofegat('Independencia');
        $of->novaLletra('x');
        $this->assertEquals(['x'], $of->getLletres());
        $this->assertEquals(1, $of->getErrades());
    }

    public function testRepeatNovaLletra()
    {
        $of = new Ofegat('Independencia');
        $of->novaLletra('i');
        $of->novaLletra('i');
        $this->assertEquals(['i'], $of->getLletres());
        $this->assertEquals(1, $of->getErrades());
    }

    public function testRepeatNovaBadLletra()
    {
        $of = new Ofegat('Independencia');
        $of->novaLletra('x');
        $of->novaLletra('x');
        $this->assertEquals(['x'], $of->getLletres());
        $this->assertEquals(2, $of->getErrades());
    }

    public function testSuccesfullFiJoc(){
        $of = new Ofegat('Independencia');
        $of->novaLletra('i');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('n');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('d');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('e');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('p');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('c');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('a');
        $this->assertEquals(1, $of->fiJoc());

    }

    public function testUnSuccesfullFiJoc()
    {
        $of = new Ofegat('Independencia');
        $of->novaLletra('x');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('z');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('r');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('s');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('t');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('o');
        $this->assertIsNotInt( $of->fiJoc());
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('u');
        $this->assertIsInt( $of->fiJoc());
        $this->assertEquals(0, $of->fiJoc());
    }

    public function testUpdateMAX()
    {
        $of = new Ofegat('Independencia');
        $of->setNivell(4);
        $this->assertEquals(5, $of->getMaxErrades());
        $of->novaLletra('x');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('z');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('r');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('s');
        $this->assertEquals(false, $of->fiJoc());
        $of->novaLletra('t');
        $this->assertIsInt( $of->fiJoc());
        $this->assertEquals(0, $of->fiJoc());
    }

}
