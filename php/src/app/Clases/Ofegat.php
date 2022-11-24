<?php

// TODO Posa el namespace

use Jocs\Exceptions\OfegatException;


/**
 *
 */
class Ofegat
{
    /**
     * @var array
     */
    protected $lletres = array();

    /**
     * @var int
     */
    protected int $errades = 0;

    /**
     * @var int
     */
    protected int $maxErrades = 7;

    /**
     * @param String $paraula
     */
    public function __construct(
        String $paraula,
    )
    {
        $this->paraula = eliminar_tildes($paraula);
    }

    /**
     * @return String
     */
    public function getParaula(): string
    {
        return $this->paraula;
    }

    /**
     * @return array
     */
    public function getLletres(): array
    {
        return $this->lletres;
    }

    /**
     * @return int
     */
    public function getErrades(): int
    {
        return $this->errades;
    }

    /**
     * @return int
     */
    public function getMaxErrades(): int
    {
        return $this->maxErrades;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $cadena = '<h2>';
        for ($i=0; $i<strlen($this->paraula); $i++) {
            $lletra = $this->paraula[$i];
            $cadena .= (in_array($lletra, $this->lletres))?' '.strtoupper($lletra).' ':' _ ';
        }
        $cadena .= " => $this->errades</h2>";
        return $cadena;
    }

    /**
     * @param $lletra
     * @return void
     * @throws \Jocs\Exceptions\OfegatException
     */
    public function novaLletra($lletra):void
    {
        //TODO (1p)
        $this->lletra[] = $lletra;
    }

    /**
     * @return mixed
     */
    public function fiJoc():mixed
    {
        //TODO Mira si ha acabat el joc (0,75p)
        return false;
    }

    private function totesDescobertes() {
        for ($i=0; $i<strlen($this->paraula); $i++) {
            $lletra = $this->paraula[$i];
            if (!in_array($lletra, $this->lletres)) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param int $maxErrades
     */
    public function setNivell(int $level): void
    {
        //TODO Canvia $maxErrades depenent del nivell passat (0,25p)
    }
}
