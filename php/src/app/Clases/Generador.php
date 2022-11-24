<?php
// TODO Posa el namespace

namespace  Jocs\Clases;
use Goutte\Client;
use Symfony\Component\HttpClient\HttpClient;

require_once '../vendor/autoload.php';
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
        $strLenParaules = count($this->paraules);
        $randomWord = rand(0, ($strLenParaules-1));
        return $this->paraules[$randomWord];
    }

    private function scrapping()
    {
        // TODO
        /* NO ACEPTA EL VENDOR EL SCRAPPING
        $httpClient = new \Goutte\Client();
        $response = $httpClient->request('GET', 'https://rodamots.cat/tema/regionalismes/paraules-i-expressions-valencianes/');

        $response->filter('#main article section ol li article a h2')->each(
        // le pasamos $precios por referencia para poder editarla dentro del closure
        function ($node) use (&$precios) {
            array_push($this->paraules, $node->text());
        }
        );
*/
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




