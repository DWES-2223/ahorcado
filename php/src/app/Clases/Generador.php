<?php

// TODO Posa el namespace

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
        return $this->paraules[0];
    }

    private function scrapping()
    {
        // TODO
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




