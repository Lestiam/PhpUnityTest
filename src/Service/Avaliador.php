<?php

namespace Alura\Leilao\Service;

use Alura\Leilao\Model\Leilao;

class Avaliador
{
    private $maiorValor = -INF; //constante -INF recebe o menor valore possível
    private $menorValor = INF; //constante INF recebe o maior valor possível
    public function avalia(Leilao $leilao): void
    {
        foreach ($leilao->getLances() as $lance) {
            if ($lance->getValor() > $this->maiorValor) { //se este lance for maior que o maiorValor...
                $this->maiorValor = $lance->getValor(); //pega o maior lance e armazena ele na variável maioValor
            }

            if ($lance->getValor() < $this->menorValor) {
                $this->menorValor = $lance->getValor();
            }
        }
    }

    public function getMaiorValor(): float
    {
        return $this->maiorValor;
    }

    public function getMenorValor(): float
    {
        return $this->menorValor;
    }
}