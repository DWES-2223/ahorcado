<?php

namespace Jocs\Clases;

use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

class Generador
{
    protected $paraules = [];

    public function __construct($paraules = null)
    {
        $this->paraules = $paraules??$this->scrapping();
    }

    public function trauParaula()
    {
        // TODO aleatoriament del array de paraules (0,5p)
    }

    private function scrapping()
    {
        // TODO el return està perque no falle. Substituir (1p)
        return ['hola'];
    }

    /**
     * @return array|mixed|null
     */
    public function getParaules(): mixed
    {
        return $this->paraules;
    }

}




