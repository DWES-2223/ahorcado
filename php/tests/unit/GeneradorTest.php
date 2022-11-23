<?php

use Jocs\Clases\Generador;


class GeneradorTest extends \Codeception\Test\Unit
{

    protected $data;

    
    protected function _before()
    {
        require_once('./vendor/autoload.php');
        $this->data = ['Independencia','Solvencia','Amateur','Reconquesta','Salvacio','Torroner','Linux','Advertencia'];
    }


   public function testConstructGenerador()
   {
        $of = new Generador($this->data);
        $this->assertEquals($this->data, $of->getParaules());
   }

   public function testReturnRandom()
   {
       $of = new Generador($this->data);
       $paraula = $of->trauParaula();
       $this->assertEquals(true , in_array($paraula,$this->data));
   }

   public function testScrapping()
   {
       $of = new Generador();
       $this->assertEquals(true,in_array('aplegar', $of->getParaules()));
       $this->assertEquals(false,in_array('a foc i flama', $of->getParaules()));
   }



}
