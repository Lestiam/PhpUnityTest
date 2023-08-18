<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private $maiorValor;
    public function avalia(Leilao $leilao): void
    {
        $lances = $leilao->getLances(); //pega os lances do leilão
        $ultimoLance = $lances[count($lances) - 1]; //conta o número de lances e pega o último lance, pois começa a contar do 0
        $this->maiorValor = $ultimoLance->getValor(); //armazena no maiorValor o valor do ultimo lance
    }

    public function getMaiorValor(): float
    {
        return $this->maiorValor;
    }
}